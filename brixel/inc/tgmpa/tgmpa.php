<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme brixel for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 */

require_once get_parent_theme_file_path( '/inc/tgmpa/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'brixel_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function brixel_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// One Click Demo Import.
		array(
			'name'     => 'One Click Demo Import',
			'slug'     => 'one-click-demo-import',
			'required' => true,
		),

		// Redux Framework.
		array(
			'name'     => 'Redux Framework',
			'slug'     => 'redux-framework',
			'required' => true,
		),

		// Contact Form 7.
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => true,
		),

		// WooCommerce.
		array(
			'name'     => 'woocommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		),

		// WPBakery Page Builder.
		array(
			'name'     => 'WPBakery Page Builder',
			'slug'     => 'js_composer',
			'source'   => 'https://api.radiantthemes.com/plugins/@3d!S58hndj-5d5&-fg8/visual-composer--SQeyhuYxqWFubs5iyeWPczR8jE7zU6zen8JpUGZw.zip',
			'required' => true,
			'version'  => '6.5.0',
		),

		// Slider Revolution.
		array(
			'name'     => 'Slider Revolution',
			'slug'     => 'revslider',
			'source'   => 'https://api.radiantthemes.com/plugins/@3d!S58hndj-5d5&-fg8/revslider--4cLsaCdwDzB4jxfMDiKyn8w6aaGoxSAuARhrNfm6.zip',
			'required' => true,
			'version'  => '6.3.3',
		),

		// RadiantThemes Custom Post Type.
		array(
			'name'     => 'RadiantThemes Custom Post Type',
			'slug'     => 'radiantthemes-custom-post-type',
			'source'   => 'https://brixel.radiantthemes.com/plugins/radiantthemes-custom-post-type.zip',
			'required' => true,
			'version'  => '1.2.1',
			
		),

		// RadiantThemes Addons.
		array(
			'name'     => 'RadiantThemes Addons',
			'slug'     => 'radiantthemes-addons',
			'source'   => 'https://brixel.radiantthemes.com/plugins/radiantthemes-addons.zip',
			'required' => true,
			'version'  => '2.0.0',
		),
		// RadiantThemes Mega Menu.
		array(
			'name'     => 'RadiantThemes Mega Menu',
			'slug'     => 'radiantthemes-mega-menu',
			'source'   => 'https://brixel.radiantthemes.com/plugins/radiantthemes-mega-menu.zip',
			'required' => false,
			'version'  => '1.2.0',
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'brixel',               // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
