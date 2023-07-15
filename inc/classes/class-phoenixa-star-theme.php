<?php
/**
 * Bootstrap theme
 * PHP version 8.0
 *
 * @category Theme
 * @package  Phoneixa_Star
 * @author   Wajahat   <wajahat5ahmad@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 * @see     https://wajahatkanju.github.io
 */

namespace PHOENIXA_STAR_THEME\Inc;

use PHOENIXA_STAR_THEME\Inc\Traits\Singleton;

class PHOENIXA_STAR_THEME {
	use Singleton;

	protected function __construct() {

		// load class
		ASSETS::get_instance();
		Menus::get_instance();
		$this->set_hooks();
	}

	protected function set_hooks() {

		/**
		 * ACTIONS
		 */

		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
	}

	public function setup_theme(): void {

		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', [
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => [ 'site-title', 'site-description' ]

		] );
		add_theme_support('custom-background', [
			'default-preset'         => 'fit', // 'default', 'fill', 'fit', 'repeat', 'custom'
			'default-size'           => 'cover',    // 'auto', 'contain', 'cover'
			'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
			'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
			'default-color'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		]);

		add_theme_support('post-thumbnails');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support('html5', [
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script'
		]);

		add_theme_support('wp-block-styles');
		add_theme_support('block-wide   ');

		global $content_width;
		if(! isset($content_width)){
			$content_width = 1240;
		}
	}

	public function register_menu(): void {
		
	}

}