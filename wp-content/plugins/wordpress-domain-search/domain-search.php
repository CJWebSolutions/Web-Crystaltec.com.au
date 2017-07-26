<?php
/*
Plugin Name: WordPress Domain Search
Plugin URI: http://wordpress.org/plugins/wordpress-domain-search/
Description: This plugin creates a widget that enables users to check domain name availability through several top registrars.
Version: 2.3.3
Author: Nerd Warehouse
Author URI: http://www.nerdwarehouse.com/
*/

class Domain_Search
{

	public function Domain_Search(){
		$this->title 			= '';
		$this->showtitle		= 'hidden';
		$this->placeholder		= 'example.com';
		$this->button			= 'go';
		$this->width 			= '100';
		$this->metric			= '';
		$this->registrar 		= 'NW';
		$this->tldmenu 			= 'visible';
		$this->target 			= '_blank';
		$this->css_div			= '';
		$this->css_form			= '';
		$this->css_domain		= 'float:left;';
		$this->css_tld			= 'float:left;';
		$this->css_submit		= 'float:left;';
	}

	public function get_instance($instance){
		$instance['title'] 			= (!isset($instance['title']))			? $this->title			: $instance['title'];
		$instance['showtitle']		= (!isset($instance['showtitle']))		? $this->showtitle		: $instance['showtitle'];
		$instance['placeholder'] 	= (!isset($instance['placeholder']))	? $this->placeholder	: $instance['placeholder'];
		$instance['button']			= (!isset($instance['button']))			? $this->button			: $instance['button'];
		$instance['width']			= (!isset($instance['width']))			? $this->width			: $instance['width'];
		$instance['metric']			= (!isset($instance['metric']))			? $this->metric			: $instance['metric'];
		$instance['registrar']		= (!isset($instance['registrar']))		? $this->registrar		: $instance['registrar'];
		$instance['tldmenu']		= (!isset($instance['tldmenu']))		? $this->tldmenu		: $instance['tldmenu'];
		$instance['target']			= (!isset($instance['target']))			? $this->target			: $instance['target'];
		$instance['css_div']		= (!isset($instance['css_div']))		? $this->css_div		: $instance['css_div'];
		$instance['css_form']		= (!isset($instance['css_form']))		? $this->css_form		: $instance['css_form'];
		$instance['css_domain']		= (!isset($instance['css_domain']))		? $this->css_domain		: $instance['css_domain'];
		$instance['css_tld']		= (!isset($instance['css_tld']))		? $this->css_tld		: $instance['css_tld'];
		$instance['css_submit']		= (!isset($instance['css_submit']))		? $this->css_submit		: $instance['css_submit'];
		return $instance;
	}

	public function form_html($args,$instance){
		$tlds = $this->get_tlds($instance['registrar']); ?>
		<style>
			<?php
				echo '#'. $args['widget_id'] .'{'. $instance['css_div'] .'}'."\n";
				echo '#'. $args['widget_id'] .' form {'. $instance['css_form'] .'}'."\n";
				echo '#'. $args['widget_id'] .' input[name="domain"] {'. $instance['css_domain'] .'}'."\n";
				echo '#'. $args['widget_id'] .' select[name="tld"] {'. $instance['css_tld'] .'}'."\n";
				echo '#'. $args['widget_id'] .' input[name="submit"] {'. $instance['css_submit'] .'}'."\n";
			?>
		</style>
		<div id="<?php echo $args['widget_id']; ?>" class="wp-dn-search">
		<?php if ( $instance['showtitle'] == 'visible' ) echo '<h3>'. $instance['title'] .'</h3>'; ?>
			<form class="wp-dn-form">
				<input type="text" name="domain" placeholder="<?php echo $instance['placeholder']; ?>" style="width:<?php echo $instance['width'] . $instance['metric']; ?>"/>
				<?php
					if( $instance['tldmenu'] == "visible" ){
						echo '<select name="tld" style="width:auto;">';
						foreach( $tlds as $k => $v ){
							echo '<option value="'. strtoupper($v) .'">.'. strtolower(ltrim($v,'.')) .'</option>'."\n";
						}
						echo '</select>';
					}
				?>
				<input type="submit" name="submit" value="<?php echo $instance['button']; ?>"/>
			</form>
		</div>
		<script>
			jQuery(document).ready(function($){
				$("#<?php echo $args['widget_id']; ?>").on('submit', 'form.wp-dn-form', function (event) {
					event.preventDefault();
					$.ajax({
			            type: "GET",
			            url: "http://wpdn.nerdwarehouse.com/index.php?host=<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&domain="+ $('input[name="domain"]').val() +"&tld="+ $('select[name="tld"]').val() +"&registrar=<?php echo $instance['registrar']; ?>&target=<?php echo $instance['target']; ?>&id=<?php echo $this->id; ?>&callback=?",
			            async: false,
			            cache: false,
			            contentType: "text/json; charset=utf-8",
			            dataType: "jsonp",
			            crossDomain: true,
			            success: function(data, textStatus){
			                data.dnform = decodeURIComponent(data.dnform);
							data.dnform = $.parseHTML(data.dnform);
							data.dnform = $(data.dnform).text().replace(/&nbsp;/g,' ');
							//console.log(data);
			                $('#<?php echo $args["widget_id"]; ?>').after( data.dnform );
			                $('form#'+data.id).submit();
			            }
			        })
				});
			});
		</script>
	<?php
	}

	/* If a registrar does not have an agreement with a registry to sell a particular TLD then their system will not be able
	 * to do so, even if you add the TLD to the list below.  We cannot make the registrar offer domians they currently do not
	 * offer - we can only list those TLDs that they do currently offer.  If any of the registrars supported by this plugin
	 * do offer a TLD that is not listed, please let us know so that we may update the plugin.  Thank you.
	 *
	 *  Word Press @ Nerd Warehouse .com
	 */
	public function get_tlds( $registrar ){			
		switch( $registrar )
		{
			case '11':
				$tlds = array(
					'.com',
					'.co',
					'.net',
					'.org',
					'.info',
					'.mx',
					'.us',
					'.ca',
					'.biz',
					'.mobi',
					'.name',
					'.tv',
					'.ws',
					'.cc'
				); break;
			case 'DN':
				$tlds = array(
					'.com',
					'.co',
					'.org',
					'.net',
					'.me',
					'.info',
					'.biz',
					'.us',
					'.tv',
					'.ca',
					'.mobi',
					'.name',
					'.tel',
					'.xxx',
					'.co.uk',
					'.org.uk',
					'.asia',
					'.ws',
					'.bz',
					'.de',
					'.es',
					'.cc',
					'.la',
					'.nu',
					'.com.au',
					'.aero',
					'.com',
					'.coop',
					'.jobs',
					'.museum',
					'.at',
					'.be',
					'.ch',
					'.cn',
					'.com.cn',
					'.net.cn',
					'.org.cn',
					'.eu',
					'.hn',
					'.it',
					'.vc'
				); break;
			case 'GD':
				$tlds = array (
					'.com',
					'.co',
					'.info',
					'.net',
					'.org',
					'.me',
					'.mobi',
					'.us',
					'.biz',
					'.ca',
					'.cc',
					'.tv',
					'.ws',
					'.asia',
					'.xxx',
					'.mx',
					'.com.mx',
					'.eu',
					'.de',
					'.es',
					'.com.es',
					'.nom.es',
					'.org.es',
					'.it',
					'.fr',
					'.nl',
					'.am',
					'.at',
					'.be',
					'.co.uk',
					'.me.uk',
					'.org.uk',
					'.se',
					'.ag',
					'.com.ag',
					'.net.ag',
					'.org.ag',
					'.bz',
					'.com.bz',
					'.net.bz',
					'.gs',
					'.ms',
					'.com.br',
					'.net.br',
					'.com.co',
					'.net.co',
					'.nom.co',
					'.fm',
					'.in',
					'.co.in',
					'.firm.in',
					'.gen.in',
					'.ind.in',
					'.net.in',
					'.org.in',
					'.jp',
					'.nu',
					'.com.au',
					'.net.au',
					'.org.au',
					'.co.nz',
					'.net.nz',
					'.org.nz',
					'.tk',
					'.tw',
					'.com.tw',
					'.org.tw',
					'.idv.tw'
				); break;
			case 'NW':
				$tlds = array(
					'.com',
					'.co',
					'.in',
					'.net',
					'.org',
					'.info',
					'.me',
					'.xxx',
					'.biz',
					'.us',
					'.eu',
					'.de',
					'.ca',
					'.it',
					'.fr',
					'.se',
					'.cc',
					'.ws',
					'.asia',
					'.tv',
					'.mx',
					'.com.mx',
					'.es',
					'.mobi',
					'.com.es',
					'.nom.es',
					'.org.es',
					'.bz',
					'.com.bz',
					'.net.bz',
					'.gs',
					'.ms',
					'.com.br',
					'.net.br',
					'.com.co',
					'.net.co',
					'.nom.co',
					'.nl',
					'.am',
					'.at',
					'.be',
					'.co.uk',
					'.me.uk',
					'.org.uk',
					'.fm',
					'.co.in',
					'.firm.in',
					'.gen.in',
					'.ind.in',
					'.net.in',
					'.org.in',
					'.jp',
					'.nu',
					'.co.nz',
					'.net.nz',
					'.org.nz',
					'.tk',
					'.tw',
					'.com.tw',
					'.org.tw',
					'.idv.tw'

				); break;
			case 'NS':
				$tlds = array(
					'.COM', 
					'.CO', 
					'.BIZ', 
					'.INFO', 
					'.MOBI', 
					'.NAME', 
					'.NET', 
					'.ORG', 
					'.PRO', 
					'.TV', 
					'.TEL', 
					'.XXX', 
					'.ASIA', 
					'.CA', 
					'.GD', 
					'.MS', 
					'.MX', 
					'.COM.MX', 
					'.QC.COM', 
					'.TC', 
					'.US', 
					'.US.COM', 
					'.VC', 
					'.VG', 
					'.AG', 
					'.AR.COM', 
					'.BR.COM', 
					'.BZ', 
					'.COM.CO', 
					'.NET.CO', 
					'.NOM.CO', 
					'.GS', 
					'.HN', 
					'.LC', 
					'.UY.COM', 
					'.AM', 
					'.AT', 
					'.BE', 
					'.CH', 
					'.CZ', 
					'.DE', 
					'.DE.COM', 
					'.ES', 
					'.EU', 
					'.EU.COM', 
					'.GB.COM', 
					'.GB.NET', 
					'.HU.COM', 
					'.IM', 
					'.LI', 
					'.ME', 
				); break;
			case 'RE':
				$tlds = array(
					'.com', 
					'.co', 
					'.net', 
					'.org', 
					'.biz', 
					'.info', 
					'.eu', 
					'.es', 
					'.ro', 
					'.eg', 
					'.ie', 
					'.mobi', 
					'.tel', 
					'.us', 
					'.tv', 
					'.cc', 
					'.ws', 
					'.la', 
					'.name', 
					'.ca', 
					'.aero', 
					'.travel', 
					'.coop', 
					'.pro', 
					'.cat', 
					'.us.com', 
					'.eu.com', 
					'.uk.com', 
					'.uk.net', 
					'.co.uk', 
					'.cn.com', 
					'.br.com', 
					'.de.com', 
					'.sa.com', 
					'.ru.com', 
					'.uy.com', 
					'.za.com', 
					'.no.com', 
					'.se.com', 
					'.hu.com', 
					'.qc.com', 
					'.ar.com', 
					'.gb.com', 
					'.jpn.com', 
					'.kr.com', 
					'.ae.org', 
					'.gb.net', 
					'.org.uk', 
					'.cn', 
					'.com.cn', 
					'.org.cn', 
					'.net.cn', 
					'.com.gr'
				); break;
		} // end switch
		foreach( $tlds as $k => $v ){
			$v = (substr($v, 0, 1) === '.' ? substr($v, 1) : $v);
		}
		return $tlds;
	}

}




class Domain_Search_Widget extends WP_Widget {

	public function Domain_Search_Widget(){
		$widget_ops = array(
			'classname' 	=> 'wp-dn-search',
			'description' 	=> __( "Search for available domain names." )
		);
        $this->WP_Widget('wp-dn-search',__('WordPress Domain Search'),$widget_ops);
        $this->build = new Domain_Search();
	}

	public function form($instance){

		$i = $this->build->get_instance( $instance ); ?>

		<p>
			Unique Widget ID: <strong><?php echo $this->id; ?></strong><br/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label><br/>
			<input
				type="text"
				id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>"
				value="<?php echo $i['title']; ?>"
				style="width:155px;"
			/>
			<?php
				echo '<select id="'. $this->get_field_id('showtitle') .'" name="'. $this->get_field_name('showtitle') .'" style="width:auto;">
						<option value="visible" '. ($showtitle == 'visible' ? 'selected="selected"' : '') .'>Show</option>
						<option value="hidden"  '. ($showtitle == 'hidden'  ? 'selected="selected"' : '') .'>Hide</option>
					  </select>';
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('placeholder'); ?>">Placeholder Text:</label><br/>
			<input
				type="text"
				id="<?php echo $this->get_field_id('placeholder'); ?>"
				name="<?php echo $this->get_field_name('placeholder'); ?>"
				value="<?php echo $i['placeholder']; ?>"
				style="width:100%;"
			/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('button'); ?>">Submit Button Text:</label><br/>
			<input
				type="text"
				id="<?php echo $this->get_field_id('button'); ?>"
				name="<?php echo $this->get_field_name('button'); ?>"
				value="<?php echo $i['button']; ?>"
				style="width:100%;"
			/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('width'); ?>">Search Bar Width:</label><br/>
			<input
				type="text"
				id="<?php echo $this->get_field_id('width'); ?>"
				name="<?php echo $this->get_field_name('width'); ?>"
				value="<?php echo $i['width']; ?>"
				style="width:100px;"
			/>
			<?php
				echo '<select id="'. $this->get_field_id('metric') .'" name="'. $this->get_field_name('metric') .'" style="width:50px;">
						<option '. ($i['metric'] == '%' ? 'selected="selected"' : '') .'>%</option>
						<option '. ($i['metric'] == 'px' ? 'selected="selected"' : '') .'>px</option>
					  </select>';
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('registrar'); ?>">Domain Registrar:</label><br/>
			<?php
				$registrars = array(
					'11'	=>	'1and1.com',
					'DN'	=>	'Domain.com',
					'GD'	=>	'GoDaddy.com',
					'NW'	=>	'NerdWarehouse.com',
					'NS'	=>	'NetworkSolutions.com',
					'RE'	=>	'Register.com'
				);
				foreach ($registrars as $k => $v){
					echo '<input
							type="radio"
							id="'. $this->get_field_id('registrar') .'"
							name="'. $this->get_field_name('registrar') .'"
							value="'. $k .'"
							style="margin-right:10px;"';
					if ($k == $i['registrar']){echo 'checked="checked"';}
					echo '/>'. $v .'<br />';
				}
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('target'); ?>">Target:</label>
			<?php
				echo '<select id="'. $this->get_field_id('target') .'" name="'. $this->get_field_name('target') .'" style="width:auto;">
						<option value="_self"  '. ($i['target'] == '_self'  ? 'selected="selected"' : '') .'>Same Tab</option>
						<option value="_blank" '. ($i['target'] == '_blank' ? 'selected="selected"' : '') .'>New Tab</option>
					  </select>';
			?>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('tldmenu'); ?>">TLD Menu:</label>
			<?php
				echo '<select id="'. $this->get_field_id('tldmenu') .'" name="'. $this->get_field_name('tldmenu') .'" style="width:auto;">
						<option value="visible" '. ($i['tldmenu'] == 'visible' ? 'selected="selected"' : '') .'>Show</option>
						<option value="hidden"  '. ($i['tldmenu'] == 'hidden'  ? 'selected="selected"' : '') .'>Hide</option>
					  </select>';
			?>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('css_div'); ?>">CSS :: Wrapper Div</label><br/>
			<input
				id="<?php echo $this->get_field_id('css_div'); ?>"
				name="<?php echo $this->get_field_name('css_div'); ?>"
				value="<?php echo $i['css_div']; ?>"
				style="width:95%;"
			/>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('css_form'); ?>">CSS :: Form Element</label><br/>
			<input
				id="<?php echo $this->get_field_id('css_form'); ?>"
				name="<?php echo $this->get_field_name('css_form'); ?>"
				value="<?php echo $i['css_form']; ?>"
				style="width:95%;"
			/>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('css_domain'); ?>">CSS :: Domain Field</label><br/>
			<input
				id="<?php echo $this->get_field_id('css_domain'); ?>"
				name="<?php echo $this->get_field_name('css_domain'); ?>"
				value="<?php echo $i['css_domain']; ?>"
				style="width:95%;"
			/>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('css_tld'); ?>">CSS :: TLD Menu</label><br/>
			<input
				id="<?php echo $this->get_field_id('css_tld'); ?>"
				name="<?php echo $this->get_field_name('css_tld'); ?>"
				value="<?php echo $i['css_tld']; ?>"
				style="width:95%;"
			/>
		</p>
		<p>	
			<label for="<?php echo $this->get_field_id('css_button'); ?>">CSS :: Submit Button</label><br/>
			<input
				id="<?php echo $this->get_field_id('css_button'); ?>"
				name="<?php echo $this->get_field_name('css_button'); ?>"
				value="<?php echo $i['css_button']; ?>"
				style="width:95%;"
			/>
		</p>
	<?php
	}

	public function update( $new_instance, $old_instance ){
		$r = array_merge( $old_instance, $new_instance );
		return $r;
	}

	public function widget( $args, $instance ){
		$this->build->form_html( $args, $instance );
	}


	/*
		this method needs refactored
	*/
	public function widget_table( $args, $instance ){
		$tlds = $this->build->get_tlds('NW'); ?>
		<form action="http://wpdn.nerdwarehouse.com/index.php" method="post" target="_blank">
			<input type="hidden" name="registrar" value="NW"/>
			<table style="width:100%;">
				<tr>
					<td><input type="text" name="domain" style="width:100%"/></td>
					<td style="width:1px;">
						<select name="tld">
							<?php
							foreach( $tlds as $k => $v ){
								echo '<option value="'. strtoupper($v) .'">.'. strtolower(ltrim($v,'.')) .'</option>'."\n";
							}
							?>
						</select>
					</td>
					<td style="width:1px;"><input type="submit" value="Check"/></td>
				</tr>
			</table>
		</form>
	<?php
	}

}
add_action('widgets_init', create_function('', 'return register_widget("Domain_Search_Widget");'));



/* Add Admin Dashboard Widget */
	
	function Domain_Search_Dashboard(){
		$dash = new Domain_Search_Widget();
		$dash->widget_table('','');
	}
	function add_Domain_Search_Dashboard(){
		global $wp_meta_boxes;
		wp_add_dashboard_widget('wp_domain_search_dashboard', 'Domain Search', 'Domain_Search_Dashboard');
	}
	add_action('wp_dashboard_setup', 'add_Domain_Search_Dashboard');



/* Add Shortcode */
	
	function Domain_Search_Shortcode($atts){

		$build = new Domain_Search();
		$i = $build->get_instance( $instance = array() );
		extract( shortcode_atts( $i, $atts ));

		$i['title'] 		= $title;
		$i['showtitle']		= $showtitle;
		$i['placeholder'] 	= $placeholder;
		$i['button']		= $button;
		$i['width']			= $width;
		$i['metric']		= $metric;
		$i['registrar']		= $registrar;
		$i['tldmenu']		= $tldmenu;
		$i['target']		= $target;
		$i['css_div'] 		= $css_div;
		$i['css_form'] 		= $css_form;
		$i['css_domain']	= $css_domain;
		$i['css_tld'] 		= $css_tld;
		$i['css_submit']	= $css_submit;

		STATIC $id = 1;
		$i['id']			= $id;
		$id++;

		return $build->form_html( array('widget_id' => 'wp-dn-short-'.$i['id']) , $i );
	}
	add_shortcode( 'domain_search', 'Domain_Search_Shortcode' );