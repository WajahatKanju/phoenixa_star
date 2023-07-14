<?php

/**
 * Function File
 * PHP version 8.0
 *
 * @category Theme
 * @package  Phoneixa_Star
 * @author   Wajahat   <wajahat5ahmad@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 * @link     https://wajahatkanju.github.io
 */

if (!defined('PHOENIXA_STAR_DIR_PATH')) {
    define('PHOENIXA_STAR_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('PHOENIXA_STAR_DIRECTORY_URI')) {
	define('PHOENIXA_STAR_DIRECTORY_URI', untrailingslashit(get_template_directory_uri()));
}

require_once PHOENIXA_STAR_DIR_PATH . '/inc/helpers/autoloader.php';



function phoenixa_star_get_theme_instance(): void {
	\PHOENIXA_STAR_THEME\Inc\PHOENIXA_STAR_THEME::get_instance();

}

phoenixa_star_get_theme_instance();

/**
 * Enqueue styles for the Phoenixa Star theme.
 *
 * @return void
 */

