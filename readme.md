<!-- DO NOT EDIT THIS FILE; it is auto-generated from readme.txt -->
# Menu Icons

Spice up your navigation menus with sexy icons, easily.

**Contributors:** [kucrut](http://profiles.wordpress.org/kucrut), [joshuairl](http://profiles.wordpress.org/joshuairl)  
**Tags:** [menu](http://wordpress.org/plugins/tags/menu), [nav-menu](http://wordpress.org/plugins/tags/nav-menu), [icons](http://wordpress.org/plugins/tags/icons), [navigation](http://wordpress.org/plugins/tags/navigation)  
**Requires at least:** 3.8  
**Tested up to:** 4.0  
**Stable tag:** 0.5.1  
**License:** [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html)  
**Donate Link:** http://kucrut.org/#coffee  

## Description ##

### Usage ###
1. After the plugin is activated, go to *Appearance* > *Menus* to edit your menus
1. Enable/Disable icon types in "Menu Icons Settings" meta box
1. Set default settings for current nav menu; these settings will be inherited by the newly added menu items
1. Select icon by clicking on the "Select icon" link
1. Save the menu

### Supported icon types ###
- Dashicons (WordPress core icons)
- [Elusive Icons](http://shoestrap.org/downloads/elusive-icons-webfont/) by [Aristeides Stathopoulos](http://shoestrap.org/blog/author/aristath/)
- [Font Awesome](http://fontawesome.io/) by [Dave Gandy](http://twitter.com/davegandy)
- [Foundation Icons](http://zurb.com/playground/foundation-icon-fonts-3/) by [Zurb](http://zurb.com/)
- [Genericons](http://genericons.com/) by [Automattic](http://automattic.com/)
- [Fontello](http://fontello.com/) icon packs
- Image (attachments)

### Planned supported icon types ###
- Image (URL)

### Extensions ###
- [IcoMoon](http://wordpress.org/plugins/menu-icons-icomoon/) by [IcoMoon.io](http://icomoon.io/)

Development of this plugin is done on [GitHub](https://github.com/kucrut/wp-menu-icons). **Pull requests welcome**. Please see [issues reported](https://github.com/kucrut/wp-menu-icons/issues) there before going to the plugin forum.


## Screenshots ##

### Menu Editor

![Menu Editor](assets/screenshot-1.png)

### Icon selection

![Icon selection](assets/screenshot-2.png)

### Twenty Fourteen with Dashicons

![Twenty Fourteen with Dashicons](assets/screenshot-3.png)

### Twenty Fourteen with Genericons

![Twenty Fourteen with Genericons](assets/screenshot-4.png)

### Twenty Thirteen with Dashicons

![Twenty Thirteen with Dashicons](assets/screenshot-5.png)

### Twenty Thirteen with Genericons

![Twenty Thirteen with Genericons](assets/screenshot-6.png)

### Settings Meta Box (Global)

![Settings Meta Box (Global)](assets/screenshot-7.png)

### Settings Meta Box (Menu)

![Settings Meta Box (Menu)](assets/screenshot-8.png)

## Installation ##

1. Upload `menu-icons` to the `/wp-content/plugins/` directory
1. Activate the plugin through the *Plugins* menu in WordPress

## Frequently Asked Questions ##

### The icons are not showing! ###
Make sure that your active theme is using the default walker for displaying the nav menu. If it's using its own custom walker, make sure that the menu item titles are filterable (please consult your theme author about this).

### The icon positions don't look right ###
If you're comfortable with editing your theme stylesheet, then you can override the styles from there.
If you have [Jetpack](http://wordpress.org/plugins/jetpack) installed, you can also use its **Custom CSS** module.
Otherwise, I recommend you to use the [Simple Custom CSS plugin](http://wordpress.org/plugins/simple-custom-css/).

### Some font icons are not rendering correctly ###
This is a bug with the font icon itself. When the font is updated, this plugin will update its font too.

### Is this plugin extendable? ###
**Certainly!** Here's how you can remove an icon type from your plugin/theme:
```php
function myplugin_remove_menu_icons_type( $types ) {
	unset( $types['genericon'] );
	return $types;
}
add_filter( 'menu_icons_types', 'myplugin_remove_menu_icons_type' );
```

To add a new icon type, take a look at the `type-*.php` files inside the `includes` directory of this plugin.

### I don't want the settings meta box. How do I remove/disable it? ###
Add this line to your [mu-plugin file](http://codex.wordpress.org/Must_Use_Plugins):
```php
add_filter( 'menu_icons_disable_settings', '__return_true' );
```

### How can I use CSS file for a font type from a CDN instead of the bundled one? ###
You can filter the icon type property from your plugin/theme:
```php
function _my_fontawesome_props( $props, $instance ) {
	$props['stylesheet'] = sprintf(
		'//maxcdn.bootstrapcdn.com/font-awesome/%s/css/font-awesome.min.css',
		$instance->version
	);

	return $props;
}
add_filter( 'menu_icons_fa_props', '_my_fontawesome_props', 10, 2 );
```

### Can you please add X icon font? ###
Let me know via [GitHub issues](https://github.com/kucrut/wp-menu-icons/issues) and I'll see what I can do.

### How do I add an icon pack from Fontello? ###
1. Create a new directory called `fontpacks` in `wp-content`.
1. Grab the zip of the pack, extract, and upload it to the newly created directory.
1. Enable the icon type from the Settings meta box.

### I can't select a custom image size from the *Image Size* dropdown ###
Read [this blog post](http://kucrut.org/add-custom-image-sizes-right-way/).


## Changelog ##

### 0.5.1 ###
* Update Menu Item Custom Fields to play nice with other plugins.
* Add missing Foundation Icons stylesheet, props [John](http://wordpress.org/support/profile/dsl225)
* JS & CSS fixes

### 0.5.0 ###
* New Icon type: Foundation Icons
* Add new Dashicons icons
* Various fixes & enhancements

### 0.4.0 ###
* Fontello icon packs support
* New icon type: Image (attachments)

### 0.3.2 ###
* Add missing minified CSS for Elusive font icon, props [zazou83](http://profiles.wordpress.org/zazou83)

### 0.3.1 ###
* Fix fatal error on outdated PHP versions, props [dellos](http://profiles.wordpress.org/dellos)

### 0.3.0 ###
* Add Settings meta box on Menu screen
* New feature: Settings inheritance (nav menu > menu items)
* New feature: Hide menu item labels
* New Icon type: Elusive Icons
* Update Font Awesome to 4.1.0

### 0.2.3 ###
* Add new group for Dashicons: Media

### 0.2.1 ###
* Fix icon selector compatibility with WP 3.9

### 0.2.0 ###
* Media frame for icon selection
* New font icon: Font Awesome

### 0.1.5 ###
* Invisible, but important fixes and improvements

### 0.1.4 ###
* Fix menu saving

### 0.1.3 ###
* Provide icon selection fields on newly added menu items

### 0.1.2 ###
* Improve extra stylesheet

### 0.1.1 ###
* Improve icon selection UX

### 0.1.0 ###
* Initial public release


