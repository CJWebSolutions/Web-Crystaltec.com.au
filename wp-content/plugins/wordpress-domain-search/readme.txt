=== WordPress Domain Search ===
Contributors: www.nerdwarehouse.com
Donate link: http://www.nerdwarehouse.com
Tags: domain search, domain, search, domains, domain name, nerd warehouse, nerdwarehouse.com, TLD, top-level domain, godaddy.com, networksolutions.com, netsol.com, domain.com, register.com, 1and1.com, ccTLD
Requires at least: 2.8
Tested up to: 3.5
Stable tag: trunk

This plugin allows you to create domain search bars using widgets or shortcode.


== Description ==

Check domain name availability through several top registrars directly from your website with this free plugin.  WordPress Domain Search also adds a domain search to the admin dashboard of your WordPress account to make it even easier to snatch up great domain names before the competition.  With the use of widgets and shortcodes you can add multiple domain search features anywhere on your website.

WordPress Domain Search is powered by [NerdWarehouse.com](http://www.nerdwarehouse.com/ "Best WordPress Hosting"),   

Nerd Warehouse is a domain registrar and hosting provider that specializes in [cloud hosting for WordPress](http://secure.nerdwarehouse.com/hosting/wordpress-hosting.aspx?isc=WPDN003) on both Windows and Linux operating systems, with plans starting at under $5 a month. Data centers in the United States, Europe, and the Asian-Pacific support the massive cloud hosting network. Each plan features unlimited bandwidth, a 99.9% uptime guarantee, robust scripting language support, dozens of free and open source applications, and unlimited automatic WordPress installations.


== Installation ==

= Required =

1. Upload "domain-search" to the "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in WordPress.

= Domain Search Widget =

1. Activate the widget though the "Appearances" menu in WordPress.
2. Adjust options to your liking.
3. You're Done!

= Domain Search Shortcode =

`[domain_search]`

The shortcode shown above will create a domain search bar with the following options configured by default:

* title ... 
* showtitle ... `hidden`
* placeholder ... `example.com`
* button ... `go`
* width ... `100`
* registrar ... `NW`
* tldmenu ... `visible`
* target ... `_blank`
* css_div ... 
* css_form ... 
* css_domain ... `float:left;`
* css_tld ... `float:left;`
* css_submit ... `float:left;`

These are the plain text options:

* title
* placeholder
* button

These are the either/or options:

* showtitle ... `hidden` OR `visible`
* width ... `px` OR `%`
* registrar ... `NW` or `DN` or `GD` or `NS` or `11` or `RE`
* tldmenu ... `hidden` OR `visible`
* target ... `_blank` OR `_self`

The registrar acronyms are as follows:

* NW ... [NerdWarehouse.com](http://www.nerdwarehouse.com/ "How To Register a Domain")
* DN ... Domain.com
* GD ... GoDaddy.com
* NS ... NetworkSolutions.com
* RE ... Register.com
* 11 ... 1and1.com

All options beginning with `css_` represent CSS selectors:

* css_div ... `#_UNIQUE_WP_GENERATED_ID {}`
* css_form ... `#_UNIQUE_WP_GENERATED_ID form {}`
* css_domain ... `#_UNIQUE_WP_GENERATED_ID input[name="domain"] {}`
* css_tld ... `#_UNIQUE_WP_GENERATED_ID select[name="tld"] {}`
* css_submit ... `#_UNIQUE_WP_GENERATED_ID input[name="submit"] {}`

Therefore, you should be adding key value pairs... `attribute:value;`

Full Example:

`
[domain_search
	title="Search for a Domain Name"
	showtitle="show"
	placeholder="your-name"
	button="check"
	width="100"
	metric="%"
	registrar="GD"
	tldmenu ="visible"
	target="_self"
	css_div="background:#CCC;"
	css_form=""
	css_domain="float:left;"
	css_tld="float:left; height:20px;"
	css_submit="float:left; color:#FFF; border:#d85f0e solid 1px; background-color:#d85f0e;"
]
`


== Frequently Asked Questions ==

= I activated the plugin, now what? =

Now you create a domain search bar to put on your site.  There are two ways...

* In the widget section of your admin panel you will see a new widget titled "WordPress Domain Search"... drag, drop, configure options, and its live.
* You can also add the domain search form to non-widgetized areas of your website with a shortcode (see "Installation" tab).

= Which registrars can I choose from? =

Available registrars include; [NerdWarehouse.com](http://www.nerdwarehouse.com/ "Best WordPress Hosting"), Domain.com, GoDaddy.com, NetworkSolutions.com, Register.com, and 1and1.com.

= Can I use CSS to customize the style of the domain search bar? =

Yes.  Custom CSS can be added to both widgets and shortcodes to customize each domain search individually.

= How do I setup the shortcode? =

Instructions are provided on the "Installation" tab (above).

= What if I do not want the domain search widget on my dashboard? =

1. From the dashboard click the "Screen Options" tab in the upper right.
1. Uncheck the box next to "Domain Search".

= What if I only want the domain search feature on my dashboard? =

Follow the installation instructions, but skip step number three.

= Can I display the results on my site? =

Not yet, but keep this plugin updated... ;)

= What is a TLD? =

TLD is an acronym for "top-level domain".  TLDs are more commonly known as domain extensions.  There are hundreds of TLDs available.

= What domain extensions can be searched? =

These are the available domain extensions, listed by registrar:

[NerdWarehouse.com](http://www.nerdwarehouse.com/ "How To Register a Domain")
>[.com](http://secure.nerdwarehouse.com/tlds/com.aspx?tld=com&isc=wpdn003 "Register a .COM Domain"),
>[.co](http://secure.nerdwarehouse.com/tlds/co-domain.aspx&isc=wpdn003 "Register a .CO Domain"),
>[.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=in&isc=wpdn003 "Register a .IN Domain"),
>[.net](http://secure.nerdwarehouse.com/tlds/net.aspx?tld=net&isc=wpdn003 "Register a .NET Domain"),
>[.org](http://secure.nerdwarehouse.com/tlds/org.aspx?tld=org&isc=wpdn003 "Register a .ORG Domain"),
>[.info](http://secure.nerdwarehouse.com/tlds/info.aspx?tld=info&isc=wpdn003 "Register a .INFO Domain"),
>[.me](http://secure.nerdwarehouse.com/tlds/me.aspx?tld=me&isc=wpdn003 "Register a .ME Domain"),
>[.xxx](http://secure.nerdwarehouse.com/tlds/xxx-domain.aspx&isc=wpdn003 "Register a .XXX Domain"),
>[.biz](http://secure.nerdwarehouse.com/tlds/biz.aspx?tld=biz&isc=wpdn003 "Register a .BIZ Domain"),
>[.us](http://secure.nerdwarehouse.com/tlds/us.aspx?tld=us&isc=wpdn003 "Register a .US Domain"),
>[.eu](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=eu&isc=wpdn003 "Register a .EU Domain"),
>[.de](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=de&isc=wpdn003 "Register a .DE Domain"),
>[.ca](http://secure.nerdwarehouse.com/tlds/ca.aspx?tld=ca&isc=wpdn003 "Register a .CA Domain"),
>[.it](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=it&isc=wpdn003 "Register a .IT Domain"),
>[.fr](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=fr&isc=wpdn003 "Register a .FR Domain"),
>[.se](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=se&isc=wpdn003 "Register a .SE Domain"),
>[.cc](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=cc&isc=wpdn003 "Register a .CC Domain"),
>[.ws](http://secure.nerdwarehouse.com/tlds/ws.aspx?tld=ws&isc=wpdn003 "Register a .WS Domain"),
>[.asia](http://secure.nerdwarehouse.com/tlds/asia.aspx?tld=asia&isc=wpdn003 "Register a .ASIA Domain"),
>[.tv](http://secure.nerdwarehouse.com/tlds/tv.aspx?tld=tv&isc=wpdn003 "Register a .TV Domain"),
>[.mx](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=mx&isc=wpdn003 "Register a .MX Domain"),
>[.com.mx](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.mx&isc=wpdn003 "Register a .COM.MX Domain"),
>[.es](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=es&isc=wpdn003 "Register a .ES Domain"),
>[.mobi](http://secure.nerdwarehouse.com/tlds/mobi.aspx?tld=mobi&isc=wpdn003 "Register a .MOBI Domain"),
>[.com.es](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.es&isc=wpdn003 "Register a .COM.ES Domain"),
>[.nom.es](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=nom.es&isc=wpdn003 "Register a .NOM.ES Domain"),
>[.org.es](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=org.es&isc=wpdn003 "Register a .ORG.ES Domain"),
>[.bz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=bz&isc=wpdn003 "Register a .BZ Domain"),
>[.com.bz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.bz&isc=wpdn003 "Register a .COM.BZ Domain"),
>[.net.bz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=net.bz&isc=wpdn003 "Register a .NET.BZ Domain"),
>[.gs](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=gs&isc=wpdn003 "Register a .GS Domain"),
>[.ms](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=ms&isc=wpdn003 "Register a .MS Domain"),
>[.com.br](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.br&isc=wpdn003 "Register a .COM.BR Domain"),
>[.net.br](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=net.br&isc=wpdn003 "Register a .NET.BR Domain"), 
>[.com.co](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.co&isc=wpdn003 "Register a .COM.CO Domain"),
>[.net.co](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=net.co&isc=wpdn003 "Register a .NET.CO Domain"),
>[.nom.co](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=nom.co&isc=wpdn003 "Register a .NOM.CO Domain"),
>[.nl](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=nl&isc=wpdn003 "Register a .NL Domain"),
>[.am](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=am&isc=wpdn003 "Register a .AM Domain"),
>[.at](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=at&isc=wpdn003 "Register a .AT Domain"),
>[.be](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=be&isc=wpdn003 "Register a .BE Domain"),
>[.co.uk](http://secure.nerdwarehouse.com/tlds/co-uk.aspx?tld=co.uk&isc=wpdn003 "Register a .CO.UK Domain"),
>[.me.uk](http://secure.nerdwarehouse.com/tlds/co-uk.aspx?tld=me.uk&isc=wpdn003 "Register a .ME.UK Domain"),
>[.org.uk](http://secure.nerdwarehouse.com/tlds/co-uk.aspx?tld=org.uk&isc=wpdn003 "Register a .ORG.UK Domain"),
>[.fm](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=fm&isc=wpdn003 "Register a .FM Domain"),
>[.co.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=co.in&isc=wpdn003 "Register a .CO.IN Domain"),
>[.firm.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=firm.in&isc=wpdn003 "Register a .FIRM.IN Domain"),
>[.gen.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=gen.in&isc=wpdn003 "Register a .GEN.IN Domain"),
>[.ind.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=ind.in&isc=wpdn003 "Register a .IND.IN Domain"),
>[.net.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=net.in&isc=wpdn003 "Register a .NET.IN Domain"),
>[.org.in](http://secure.nerdwarehouse.com/tlds/in.aspx?tld=org.in&isc=wpdn003 "Register a .ORG.IN Domain"),
>[.jp](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=jp&isc=wpdn003 "Register a .JP Domain"),
>[.nu](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=nu&isc=wpdn003 "Register a .NU Domain"),
>[.co.nz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=co.nz&isc=wpdn003 "Register a .CO.NZ Domain"),
>[.net.nz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=net.nz&isc=wpdn003 "Register a .NET.NZ Domain"),
>[.org.nz](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=org.nz&isc=wpdn003 "Register a .ORG.NZ Domain"),
>[.tk](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=tk&isc=wpdn003 "Register a .TK Domain"),
>[.tw](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=tw&isc=wpdn003 "Register a .TW Domain"),
>[.com.tw](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=com.tw&isc=wpdn003 "Register a .COM.TW Domain"),
>[.org.tw](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=org.tw&isc=wpdn003 "Register a .ORG.TW Domain"),
>[.idv.tw](http://secure.nerdwarehouse.com/tlds/international-domain-names.aspx?tld=idv.tw&isc=wpdn003 "Register a .IDV.TW Domain")

Domain.com
>.com, .co, .org, .net, .me, .info, .biz, .us, .tv, .ca, .mobi,
>.name, .tel, .xxx, .co.uk, .org.uk, .asia, .ws, .bz, .de, .es,
>.cc, .la, .nu, .com.au, .aero, .com, .coop, .jobs, .museum, .at,
>.be, .ch, .cn, .com.cn, .net.cn, .org.cn, .eu, .hn, .it, .vc'

GoDaddy.com
>.com, .co, .info, .net, .org, .me, .mobi, .us, .biz, .ca, .cc,
>.tv, .ws, .asia, .xxx, .mx, .com.mx, .eu, .de, .es, .com.es,
>.nom.es, .org.es, .it, .fr, .nl, .am, .at, .be, .co.uk, .me.uk,
>.org.uk, .se, .ag, .com.ag, .net.ag, .org.ag, .bz, .com.bz,
>.net.bz, .gs, .ms, .com.br, .net.br, .com.co, .net.co, .nom.co,
>.fm, .in, .co.in, .firm.in, .gen.in, .ind.in, .net.in, .org.in,
>.jp, .nu, .com.au, .net.au, .org.au, .co.nz, .net.nz, .org.nz,
>.tk, .tw, .com.tw, .org.tw, .idv.tw

NetworkSolutions.com
>.com, .co, .biz, .info, .mobi, .name, .net, .org, .pro, .tv,
>.tel, .xxx, .asia, .ca, .gd, .ms, .mx, .com.mx, .qc.com, .tc,
>.us, .us.com, .vc, .vg, .ag, .ar.com, .br.com, .bz, .com.co,
>.net.co, .nom.co, .gs, .hn, .lc, .uy.com, .am, .at, .be, .ch,
>.cz, .de, .de.com, .es, .eu, .eu.com, .gb.com, .gb.net, .hu.com,
>.im, .li, .me


Register.com
>.com, .co, .net, .org, .biz, .info, .eu, .es, .ro, .eg, .ie,
>.mobi, .tel, .us, .tv, .cc, .ws, .la, .name, .ca, .aero,
>.travel, .coop, .pro, .cat, .us.com, .eu.com, .uk.com, .uk.net,
>.co.uk, .cn.com, .br.com, .de.com, .sa.com, .ru.com, .uy.com,
>.za.com, .no.com, .se.com, .hu.com, .qc.com, .ar.com, .gb.com,
>.jpn.com, .kr.com, .ae.org, .gb.net, .org.uk, .cn, .com.cn,
>.org.cn, .net.cn, .com.gr

1and1.com
>.com, .co, .net, .org, .info, .mx, .us, .ca, .biz, .mobi,
>.name, .tv, .ws, .cc

= What if I didn't find the answer I was looking for? =

Please send your questions and suggestions to... wordpress@nerdwarehouse.com


== Screenshots ==

1. After you install WordPress Domain Search (by uploading it to /wp-content/plugins/) you will need to navigate to the "Plugins" page from your dashboard and activate the plugin.
2. Activating the WordPress Domain Search plugin will create a domain search dashboard widget.
3. Activating the WordPress Domain Search plugin will also create a widget.
4. Once you have activated the widget you will have access to the customization options.
5. Now you can quickly and easily search for available domain names directly from your website.


== Changelog ==

= 2.3.3 =
* Function change to support servers running versions of PHP older than 5.3

= 2.3.0 =
* Added shortscode support.
* Added custom CSS options.
* Refactored CSS scheme.

= 2.2.0 =
* Added 1and1.com as an available domain registrar.
* Name change: Dotster.com became Domain.com
* Updated supported TLD lists.
* Updated the widget options.
* Simplified the HTML structure around the domain search bar.
* Confirmed compatibility up to WordPress version 3.5.1

= 2.0.0 =
* Added the "Widget Title Display" option.
* Added GoDaddy.com, NetworkSolutions.com, Dotster.com, and Register.com as options for the registrar to check domain availability.
* Added the option to choose a target window.
* Added the "TLD Menu Display" option (only available for some registrars).
* Added support for multiple instances of the widget.
* Updated to the newest version of the WordPress Widget API.
* Confirmed compatibility up to WordPress version 3.2.1

= 1.2.3 =
* Set the domain search results page to open in a new tab.
* Added the domain search feature as an admin dashboard widget.

= 1.2.2 =
* Added .SE as an available domain extension.  This extension is the Internet country code top-level domain (ccTLD) for Sweden.
* Confirmed backwards compatibility to WordPress version 2.8
* Confirmed compatibility up to WordPress version 3.0.5


== Upgrade Notice ==

= 2.3.3 =
Now supports servers running versions of PHP older than 5.3

= 2.3.0 =
Added Shortcodes and custom CSS options.  Please resave your settings.

= 2.2.0 =
Update for the available TLDs, widget options, and HTML structure around the domain search bar.  Please resave your settings.

= 2.0.0 =
This version supports multiple instances of the plugin, adds the option to choose a target window, and allows you to choose which registrar will perform the domain availability check.

= 1.2.3 =
This version opens the domain search results in a new tab so that your users stay on your website.  We have also added a domain search bar directly to your admin dashboard for quick access.

= 1.2.2 =
This version adds .SE as an available domain extension.  The .SE extension is the Internet country code top-level domain (ccTLD) for Sweden.