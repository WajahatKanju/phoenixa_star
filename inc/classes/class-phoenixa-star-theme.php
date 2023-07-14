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
		add_theme_support( 'custom-logo', array(
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' )

		) );
	}

}