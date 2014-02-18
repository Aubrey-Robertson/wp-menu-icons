<?php
/**
 * Dashicons
 *
 * @package Menu_Icons
 * @version 0.1.0
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 */


/**
 * Icon type: Dashicons
 *
 * @since 0.1.0
 */
class Menu_Icons_Dashicons extends Menu_Icons_Fonts {

	/**
	 * Holds icon type
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $type = 'dashicons';

	/**
	 * Holds icon label
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $label = 'Dashicons';

	/**
	 * Holds icon stylesheet URL
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $stylesheet = 'dashicons';


	/**
	 * Dashicons' icon names
	 *
	 * @since  0.1.0
	 * @return array
	 */
	public function get_names() {
		return array(
			array(
				'label' => __( 'Admin', 'menu-icons' ),
				'items' => array(
					'dashicons-admin-appearance' => __( 'Appearance', 'menu-icons' ),
					'dashicons-admin-collapse'   => __( 'Collapse', 'menu-icons' ),
					'dashicons-admin-comments'   => __( 'Comments', 'menu-icons' ),
					'dashicons-dashboard'        => __( 'Dashboard', 'menu-icons' ),
					'dashicons-admin-generic'    => __( 'Generic', 'menu-icons' ),
					'dashicons-admin-home'       => __( 'Home', 'menu-icons' ),
					'dashicons-admin-media'      => __( 'Media', 'menu-icons' ),
					'dashicons-menu'             => __( 'Menu', 'menu-icons' ),
					'dashicons-admin-network'    => __( 'Network', 'menu-icons' ),
					'dashicons-admin-page'       => __( 'Page', 'menu-icons' ),
					'dashicons-admin-plugins'    => __( 'Plugins', 'menu-icons' ),
					'dashicons-admin-settings'   => __( 'Settings', 'menu-icons' ),
					'dashicons-admin-site'       => __( 'Site', 'menu-icons' ),
					'dashicons-admin-tools'      => __( 'Tools', 'menu-icons' ),
					'dashicons-admin-users'      => __( 'Users', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Post Formats', 'menu-icons' ),
				'items' => array(
					'dashicons-format-standard' => __( 'Standard', 'menu-icons' ),
					'dashicons-format-aside'    => __( 'Aside', 'menu-icons' ),
					'dashicons-format-image'    => __( 'Image', 'menu-icons' ),
					'dashicons-format-video'    => __( 'Video', 'menu-icons' ),
					'dashicons-format-audio'    => __( 'Audio', 'menu-icons' ),
					'dashicons-format-quote'    => __( 'Quote', 'menu-icons' ),
					'dashicons-format-gallery'  => __( 'Gallery', 'menu-icons' ),
					'dashicons-format-links'    => __( 'Links', 'menu-icons' ),
					'dashicons-format-status'   => __( 'Status', 'menu-icons' ),
					'dashicons-format-chat'     => __( 'Chat', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Welcome Screen', 'menu-icons' ),
				'items' => array(
					'dashicons-welcome-add-page'      => __( 'Add page', 'menu-icons' ),
					'dashicons-welcome-comments'      => __( 'Comments', 'menu-icons' ),
					'dashicons-welcome-edit-page'     => __( 'Edit page', 'menu-icons' ),
					'dashicons-welcome-learn-more'    => __( 'Learn More', 'menu-icons' ),
					'dashicons-welcome-view-site'     => __( 'View Site', 'menu-icons' ),
					'dashicons-welcome-widgets-menus' => __( 'Widgets', 'menu-icons' ),
					'dashicons-welcome-write-blog'    => __( 'Write Blog', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Edit', 'menu-icons' ),
				'items' => array(
					'dashicons-image-crop'            => __( 'Crop', 'menu-icons' ),
					'dashicons-image-rotate-left'     => __( 'Rotate Left', 'menu-icons' ),
					'dashicons-image-rotate-right'    => __( 'Rotate Right', 'menu-icons' ),
					'dashicons-image-flip-vertical'   => __( 'Flip Vertical', 'menu-icons' ),
					'dashicons-image-flip-horizontal' => __( 'Flip Horizontal', 'menu-icons' ),
					'dashicons-undo'                  => __( 'Undo', 'menu-icons' ),
					'dashicons-redo'                  => __( 'Redo', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Editor', 'menu-icons' ),
				'items' => array(
					'dashicons-editor-bold'             => __( 'Bold', 'menu-icons' ),
					'dashicons-editor-italic'           => __( 'Italic', 'menu-icons' ),
					'dashicons-editor-ul'               => __( 'Unordered List', 'menu-icons' ),
					'dashicons-editor-ol'               => __( 'Ordered List', 'menu-icons' ),
					'dashicons-editor-quote'            => __( 'Quote', 'menu-icons' ),
					'dashicons-editor-alignleft'        => __( 'Align Left', 'menu-icons' ),
					'dashicons-editor-aligncenter'      => __( 'Align Center', 'menu-icons' ),
					'dashicons-editor-alignright'       => __( 'Align Right', 'menu-icons' ),
					'dashicons-editor-insertmore'       => __( 'Insert More', 'menu-icons' ),
					'dashicons-editor-spellcheck'       => __( 'Spell Check', 'menu-icons' ),
					'dashicons-editor-distractionfree'  => __( 'Distraction-free', 'menu-icons' ),
					'dashicons-editor-kitchensink'      => __( 'Kitchensink', 'menu-icons' ),
					'dashicons-editor-underline'        => __( 'Underline', 'menu-icons' ),
					'dashicons-editor-justify'          => __( 'Justify', 'menu-icons' ),
					'dashicons-editor-textcolor'        => __( 'Text Color', 'menu-icons' ),
					'dashicons-editor-paste-word'       => __( 'Paste Word', 'menu-icons' ),
					'dashicons-editor-paste-text'       => __( 'Paste Text', 'menu-icons' ),
					'dashicons-editor-removeformatting' => __( 'Clear Formatting', 'menu-icons' ),
					'dashicons-editor-video'            => __( 'Video', 'menu-icons' ),
					'dashicons-editor-customchar'       => __( 'Custom Characters', 'menu-icons' ),
					'dashicons-editor-indent'           => __( 'Indent', 'menu-icons' ),
					'dashicons-editor-outdent'          => __( 'Outdent', 'menu-icons' ),
					'dashicons-editor-help'             => __( 'Help', 'menu-icons' ),
					'dashicons-editor-strikethrough'    => __( 'Strikethrough', 'menu-icons' ),
					'dashicons-editor-unlink'           => __( 'Unlink', 'menu-icons' ),
					'dashicons-editor-rtl'              => __( 'RTL', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Post', 'menu-icons' ),
				'items' => array(
					'dashicons-align-left'   => __( 'Align Left', 'menu-icons' ),
					'dashicons-align-right'  => __( 'Align Right', 'menu-icons' ),
					'dashicons-align-center' => __( 'Align Center', 'menu-icons' ),
					'dashicons-align-none'   => __( 'Align None', 'menu-icons' ),
					'dashicons-lock'         => __( 'Lock', 'menu-icons' ),
					'dashicons-calendar'     => __( 'Calendar', 'menu-icons' ),
					'dashicons-visibility'   => __( 'Visibility', 'menu-icons' ),
					'dashicons-post-status'  => __( 'Post Status', 'menu-icons' ),
					'dashicons-post-trash'   => __( 'Post Trash', 'menu-icons' ),
					'dashicons-edit'         => __( 'Edit', 'menu-icons' ),
					'dashicons-trash'        => __( 'Trash', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Sorting', 'menu-icons' ),
				'items' => array(
					'dashicons-arrow-up'         => __( 'Arrow: Up', 'menu-icons' ),
					'dashicons-arrow-down'       => __( 'Arrow: Down', 'menu-icons' ),
					'dashicons-arrow-left'       => __( 'Arrow: Left', 'menu-icons' ),
					'dashicons-arrow-right'      => __( 'Arrow: Right', 'menu-icons' ),
					'dashicons-arrow-up-alt'     => __( 'Arrow: Up #2', 'menu-icons' ),
					'dashicons-arrow-down-alt'   => __( 'Arrow: Down #2', 'menu-icons' ),
					'dashicons-arrow-left-alt'   => __( 'Arrow: Left #2', 'menu-icons' ),
					'dashicons-arrow-right-alt'  => __( 'Arrow: Right #2', 'menu-icons' ),
					'dashicons-arrow-up-alt2'    => __( 'Arrow: Up #3', 'menu-icons' ),
					'dashicons-arrow-down-alt2'  => __( 'Arrow: Down #3', 'menu-icons' ),
					'dashicons-arrow-left-alt2'  => __( 'Arrow: Left #3', 'menu-icons' ),
					'dashicons-arrow-right-alt2' => __( 'Arrow: Right #3', 'menu-icons' ),
					'dashicons-leftright'        => __( 'Left-Right', 'menu-icons' ),
					'dashicons-sort'             => __( 'Sort', 'menu-icons' ),
					'dashicons-list-view'        => __( 'List View', 'menu-icons' ),
					'dashicons-exerpt-view'      => __( 'Excerpt View', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Social', 'menu-icons' ),
				'items' => array(
					'dashicons-share'        => __( 'Share', 'menu-icons' ),
					'dashicons-share1'       => __( 'Share #2', 'menu-icons' ),
					'dashicons-share-alt'    => __( 'Share #3', 'menu-icons' ),
					'dashicons-share-alt2'   => __( 'Share #4', 'menu-icons' ),
					'dashicons-twitter'      => 'Twitter',
					'dashicons-rss'          => __( 'RSS', 'menu-icons' ),
					'dashicons-email'        => __( 'Email', 'menu-icons' ),
					'dashicons-email-alt'    => __( 'Email #2', 'menu-icons' ),
					'dashicons-facebook'     => 'Facebook',
					'dashicons-facebook-alt' => sprintf( __( '%s #2', 'menu-icons' ), 'Facebook' ),
					'dashicons-networking'   => __( 'Networking', 'menu-icons' ),
					'dashicons-googleplus'   => 'Google+',
				),
			),
			array(
				'label' => __( 'Jobs', 'menu-icons' ),
				'items' => array(
					'dashicons-art'         => __( 'Art', 'menu-icons' ),
					'dashicons-hammer'      => __( 'Hammer', 'menu-icons' ),
					'dashicons-migrate'     => __( 'Migrate', 'menu-icons' ),
					'dashicons-performance' => __( 'Performance', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Internal/Products', 'menu-icons' ),
				'items' => array(
					'dashicons-wordpress'     => 'WordPress',
					'dashicons-wordpress-alt' => sprintf( __( '%s #2', 'menu-icons' ), 'WordPress' ),
					'dashicons-pressthis'     => 'PressThis',
					'dashicons-update'        => __( 'Update', 'menu-icons' ),
					'dashicons-screenoptions' => __( 'Screen Options', 'menu-icons' ),
					'dashicons-info'          => __( 'Info', 'menu-icons' ),
					'dashicons-cart'          => __( 'Cart', 'menu-icons' ),
					'dashicons-feedback'      => __( 'Feedback', 'menu-icons' ),
					'dashicons-cloud'         => __( 'Cloud', 'menu-icons' ),
					'dashicons-translation'   => __( 'Translation', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Taxonomies', 'menu-icons' ),
				'items' => array(
					'dashicons-tag'      => __( 'Tag', 'menu-icons' ),
					'dashicons-category' => __( 'Category', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Alerts/Notifications', 'menu-icons' ),
				'items' => array(
					'dashicons-yes'         => __( 'Yes', 'menu-icons' ),
					'dashicons-no'          => __( 'No', 'menu-icons' ),
					'dashicons-no-alt'      => __( 'No #2', 'menu-icons' ),
					'dashicons-plus'        => __( 'Plus', 'menu-icons' ),
					'dashicons-minus'       => __( 'Minus', 'menu-icons' ),
					'dashicons-dismiss'     => __( 'Dismiss', 'menu-icons' ),
					'dashicons-marker'      => __( 'Marker', 'menu-icons' ),
					'dashicons-star-filled' => __( 'Star: Filled', 'menu-icons' ),
					'dashicons-star-half'   => __( 'Star: Half', 'menu-icons' ),
					'dashicons-star-empty'  => __( 'Star: Empty', 'menu-icons' ),
					'dashicons-flag'        => __( 'Flag', 'menu-icons' ),
				),
			),
			array(
				'label' => __( 'Misc./Post Types', 'menu-icons' ),
				'items' => array(
					'dashicons-location'     => __( 'Location', 'menu-icons' ),
					'dashicons-location-alt' => __( 'Location #2', 'menu-icons' ),
					'dashicons-camera'       => __( 'Camera', 'menu-icons' ),
					'dashicons-images-alt'   => __( 'Images', 'menu-icons' ),
					'dashicons-images-alt2'  => __( 'Images #2', 'menu-icons' ),
					'dashicons-video-alt'    => __( 'Video', 'menu-icons' ),
					'dashicons-video-alt2'   => __( 'Video #2', 'menu-icons' ),
					'dashicons-video-alt3'   => __( 'Video #3', 'menu-icons' ),
					'dashicons-vault'        => __( 'Vault', 'menu-icons' ),
					'dashicons-shield'       => __( 'Shield', 'menu-icons' ),
					'dashicons-shield-alt'   => __( 'Shield #2', 'menu-icons' ),
					'dashicons-sos'          => __( 'S.O.S.', 'menu-icons' ),
					'dashicons-search'       => __( 'Search', 'menu-icons' ),
					'dashicons-slides'       => __( 'Slides', 'menu-icons' ),
					'dashicons-analytics'    => __( 'Analytics', 'menu-icons' ),
					'dashicons-chart-pie'    => __( 'Chart: Pie', 'menu-icons' ),
					'dashicons-chart-bar'    => __( 'Chart: Bar', 'menu-icons' ),
					'dashicons-chart-line'   => __( 'Chart: Line', 'menu-icons' ),
					'dashicons-chart-area'   => __( 'Chart: Area', 'menu-icons' ),
					'dashicons-groups'       => __( 'Groups', 'menu-icons' ),
					'dashicons-businessman'  => __( 'Businessman', 'menu-icons' ),
					'dashicons-id'           => __( 'ID', 'menu-icons' ),
					'dashicons-id-alt'       => __( 'ID #2', 'menu-icons' ),
					'dashicons-products'     => __( 'Products', 'menu-icons' ),
					'dashicons-awards'       => __( 'Awards', 'menu-icons' ),
					'dashicons-forms'        => __( 'Forms', 'menu-icons' ),
					'dashicons-testimonial'  => __( 'Testimonial', 'menu-icons' ),
					'dashicons-portfolio'    => __( 'Portfolio', 'menu-icons' ),
					'dashicons-book'         => __( 'Book', 'menu-icons' ),
					'dashicons-book-alt'     => __( 'Book #2', 'menu-icons' ),
					'dashicons-download'     => __( 'Download', 'menu-icons' ),
					'dashicons-upload'       => __( 'Upload', 'menu-icons' ),
					'dashicons-backup'       => __( 'Backup', 'menu-icons' ),
					'dashicons-clock'        => __( 'Clock', 'menu-icons' ),
					'dashicons-lightbulb'    => __( 'Lightbulb', 'menu-icons' ),
					'dashicons-desktop'      => __( 'Desktop', 'menu-icons' ),
					'dashicons-tablet'       => __( 'Tablet', 'menu-icons' ),
					'dashicons-smartphone'   => __( 'Smartphone', 'menu-icons' ),
					'dashicons-smiley'       => __( 'Smiley', 'menu-icons' ),
				),
			),
		);
	}
}


/**
 * Register Dashicons
 *
 * @since   0.1.0
 * @wp_hook filter menu_icons_types/10/1
 * @param   array  $types Icon Types
 * @return  array
 */
function _menu_icons_dashicons( $types ) {
	$dashicons = new Menu_Icons_Dashicons();
	return $dashicons->register( $types );
}
add_filter( 'menu_icons_types', '_menu_icons_dashicons' );
