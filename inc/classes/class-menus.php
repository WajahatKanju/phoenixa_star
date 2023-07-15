<?php

namespace PHOENIXA_STAR_THEME\Inc;

use PHOENIXA_STAR_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	public function setup_hooks(): void {
		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus(): void {
		register_nav_menus( [
			'phoenixa-star-header-menu' => esc_html__( 'Header Menu', 'phoenixa_star' ),
			'phoenixa-star-footer-menu' => esc_html__( 'Footer Menu', 'phoenixa_star' )
		] );
	}

	public function get_menu_id( $location ): int|string {
		// Get Location of all the menus
		$locations = get_nav_menu_locations();
		$menu_id   = $locations[ $location ];

		return ! empty( $menu_id ) ? $menu_id : '';
	}

	public function get_child_menu_items( $menu_array, $parent_id ): array {

		$child_menus = [];

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}
}