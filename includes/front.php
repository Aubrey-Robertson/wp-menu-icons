<?php

/**
 * Front end functionalities
 *
 * @package Menu_Icons
 * @author  Dzikri Aziz <kvcrvt@gmail.com>
 */
final class Menu_Icons_Front_End {

	/**
	 * Icon types
	 *
	 * @since  0.9.0
	 * @access protected
	 * @var    array
	 */
	protected static $icon_types = array();

	/**
	 * Default icon style
	 *
	 * @since  0.9.0
	 * @access protected
	 * @var    array
	 */
	protected static $default_style = array(
		'font-size'      => '1.2',
		'vertical-align' => 'middle',
		'width'          => '1',
	);

	/**
	 * Hidden label class
	 *
	 * @since  0.9.0
	 * @access protected
	 * @var    string
	 */
	protected static $hidden_label_class = 'visuallyhidden';


	/**
	 * Add hooks for front-end functionalities
	 *
	 * @since 0.9.0
	 */
	public static function init() {
		$active_types = Menu_Icons_Settings::get( 'global', 'icon_types' );

		if ( empty( $active_types ) ) {
			return;
		}

		foreach ( Icon_Picker_Types_Registry::instance()->types as $type ) {
			if ( in_array( $type->id, $active_types ) ) {
				self::$icon_types[ $type->id ] = $type;
			}
		}

		/**
		 * Allow themes/plugins to overrride the hidden label class
		 *
		 * @since  0.8.0
		 * @param  string $hidden_label_class Hidden label class.
		 * @return string
		 */
		self::$hidden_label_class = apply_filters( 'menu_icons_hidden_label_class', self::$hidden_label_class );

		add_action( 'wp_enqueue_scripts', array( __CLASS__, '_enqueue_styles' ), 7 );
		add_filter( 'wp_nav_menu_args', array( __CLASS__, '_add_menu_item_title_filter' ) );
		add_filter( 'wp_nav_menu', array( __CLASS__, '_remove_menu_item_title_filter' ) );
	}


	/**
	 * Get nav menu ID based on arguments passed to wp_nav_menu()
	 *
	 * @since  0.3.0
	 * @param  array $args wp_nav_menu() Arguments
	 * @return mixed Nav menu ID or FALSE on failure
	 */
	public static function get_nav_menu_id( $args ) {
		$args = (object) $args;
		$menu = wp_get_nav_menu_object( $args->menu );

		// Get the nav menu based on the theme_location
		if ( ! $menu
			&& $args->theme_location
			&& ( $locations = get_nav_menu_locations() )
			&& isset( $locations[ $args->theme_location ] )
		) {
			$menu = wp_get_nav_menu_object( $locations[ $args->theme_location ] );
		}

		// get the first menu that has items if we still can't find a menu
		if ( ! $menu && ! $args->theme_location ) {
			$menus = wp_get_nav_menus();
			foreach ( $menus as $menu_maybe ) {
				if ( $menu_items = wp_get_nav_menu_items( $menu_maybe->term_id, array( 'update_post_term_cache' => false ) ) ) {
					$menu = $menu_maybe;
					break;
				}
			}
		}

		if ( is_object( $menu ) && ! is_wp_error( $menu ) ) {
			return $menu->term_id;
		} else {
			return false;
		}
	}


	/**
	 * Enqueue stylesheets
	 *
	 * @since   0.1.0
	 * @access  protected
	 * @wp_hook action    wp_enqueue_scripts/7
	 * @link    http://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
	 */
	public static function _enqueue_styles() {
		foreach ( self::$icon_types as $type ) {
			if ( wp_style_is( $type->stylesheet_id, 'registered' ) ) {
				wp_enqueue_style( $type->stylesheet_id );
			}
		}

		wp_enqueue_style(
			'menu-icons-extra',
			sprintf( '%scss/extra%s.css', Menu_Icons::get( 'url' ), Menu_Icons::get_script_suffix() ),
			false,
			Menu_Icons::VERSION
		);
	}


	/**
	 * Add filter to 'the_title' hook
	 *
	 * We need to filter the menu item title but **not** regular post titles.
	 * Thus, we're adding the filter when `wp_nav_menu()` is called.
	 *
	 * @since   0.1.0
	 * @wp_hook filter wp_nav_menu_args/999
	 * @param   array  $args Not used.
	 *
	 * @return array
	 */
	public static function _add_menu_item_title_filter( $args ) {
		add_filter( 'the_title', array( __CLASS__, '_filter_menu_item_title' ), 999, 2 );

		return $args;
	}


	/**
	 * Remove filter from 'the_title' hook
	 *
	 * Because we don't want to filter post titles, we need to remove our
	 * filter when `wp_nav_menu()` exits.
	 *
	 * @since   0.1.0
	 * @wp_hook filter wp_nav_menu/999/2
	 * @param   array  $nav_menu Not used.
	 * @return  array
	 */
	public static function _remove_menu_item_title_filter( $nav_menu ) {
		remove_filter( 'the_title', array( __CLASS__, '_filter_menu_item_title' ), 999, 2 );

		return $nav_menu;
	}


	/**
	 * Filter menu item titles
	 *
	 * @since   0.1.0
	 * @wp_hook filter  the_title/999/2
	 * @param   string  $title           Menu item title.
	 * @param   int     $id              Menu item ID.
	 *
	 * @return string
	 */
	public static function _filter_menu_item_title( $title, $id ) {
		$meta = Menu_Icons_Meta::get( $id );
		$icon = self::get_icon( $meta );

		if ( empty( $icon ) ) {
			return $title;
		}

		$title_class   = ! empty( $values['hide_label'] ) ? self::$hidden_label_class : '';
		$title_wrapped = sprintf(
			'<span%s>%s</span>',
			( ! empty( $class ) ) ? sprintf( ' class="%s"', esc_attr( $class ) ) : '',
			$title
		);

		if ( 'after' === $meta['position'] ) {
			$title_with_icon = "{$title_wrapped}{$icon}";
		} else {
			$title_with_icon = "{$icon}{$title_wrapped}";
		}

		/**
		 * Allow plugins/themes to override menu item markup
		 *
		 * @since 0.8.0
		 *
		 * @param string  $title_with_icon Menu item markup after the icon is added.
		 * @param integer $id              Menu item ID.
		 * @param array   $values          Menu item metadata values.
		 * @param string  $title           Original menu item title.
		 *
		 * @return string
		 */
		$title_with_icon = apply_filters( 'menu_icons_item_title', $title_with_icon, $id, $meta, $title );

		return $title_with_icon;
	}


	/**
	 * Get icon
	 *
	 * @since  0.9.0
	 * @access protected
	 * @param  array     $meta  Menu item meta value.
	 * @return string
	 */
	protected static function get_icon( $meta ) {
		$icon = '';

		// Icon type is not set.
		if ( empty( $meta['type'] ) ) {
			return $icon;
		}

		// Icon is not set.
		if ( empty( $meta['icon'] ) ) {
			return $icon;
		}

		// Icon type is not registered/enabled.
		if ( ! isset( self::$icon_types[ $meta['type'] ] ) ) {
			return $icon;
		}

		$type = self::$icon_types[ $meta['type'] ];

		$callbacks = array(
			array( $type, 'get_icon' ),
			array( __CLASS__, "get_{$type->id}_icon" ),
			array( __CLASS__, "get_{$type->template_id}_icon" ),
		);

		foreach ( $callbacks as $callback ) {
			if ( is_callable( $callback ) ) {
				$icon = call_user_func( $callback, $meta );
				break;
			}
		}

		return $icon;
	}


	/**
	 * Get icon style
	 *
	 * @since  0.9.0
	 * @param  array $meta Menu item meta value.
	 * @return string
	 */
	public static function get_icon_style( $meta ) {
		$style_a = array();
		$style_s = '';

		foreach ( array( 'font-size', 'width' ) as $rule ) {
			if ( ! empty( $meta[ $rule ] ) ) {
				$style_a[ $rule ] = sprintf( '%sem', $meta[ $rule ] );
			}
		}

		if ( ! empty( $meta['vertical_align'] ) ) {
			$style_a['vertical-align'] = $meta['vertical_align'];
		}

		$style_a = array_diff_assoc( $style_a, self::$default_style );

		if ( ! empty( $style_a ) ) {
			foreach ( $style_a as $key => $value ) {
				$style_s .= sprintf( '%s:%s;', esc_attr( $key ), esc_attr( $value ) );
			}
		}

		return $style_s;
	}


	/**
	 * Get icon classes
	 *
	 * @since  0.9.0
	 * @param  array $meta Menu item meta value.
	 * @return array
	 */
	public static function get_icon_classes( $meta ) {
		$classes = array( '_mi' );

		if ( empty( $meta['hide_label'] ) ) {
			$classes[] = "_{$meta['position']}";
		}

		return $classes;
	}


	/**
	 * Get font icon
	 *
	 * @since  0.9.0
	 * @param  array $meta Menu item meta value.
	 * @return string
	 */
	public static function get_font_icon( $meta ) {
		$classes = self::get_icon_classes( $meta );
		$classes = array_merge( $classes, array( $meta['type'], $meta['icon'] ) );
		$classes = implode( ' ', $classes );

		return sprintf(
			'<i class="%s"%s></i>',
			esc_attr( $classes ),
			self::get_icon_style( $meta )
		);
	}


	/**
	 * Get image icon
	 *
	 * TODO: Replace 'thumbnail' size with `$meta['image_size']`.
	 *
	 * @since  0.9.0
	 * @param  array $meta Menu item meta value.
	 * @return string
	 */
	public static function get_image_icon( $meta ) {
		$args = array(
			'class' => implode( ' ', self::get_icon_classes( $meta ) ),
		);

		$style = self::get_icon_style( $meta );
		if ( ! empty( $style ) ) {
			$args['style'] = $style;
		}

		return wp_get_attachment_image( $meta['icon'], 'thumbnail', false, $args );
	}


	/**
	 * Get SVG icon
	 *
	 * // TODO: Don't hardcode `width`.
	 *
	 * @since  0.9.0
	 * @param  array $meta Menu item meta value.
	 * @return string
	 */
	public static function get_svg_icon( $meta ) {
		$classes       = implode( ' ', self::get_icon_classes( $meta ) );
		$meta['width'] = 1;

		return sprintf(
			'<img src="%s" class="%s" style="%s" />',
			esc_url( wp_get_attachment_url( $meta['icon'] ) ),
			esc_attr( $classes ),
			self::get_icon_style( $meta )
		);
	}
}
