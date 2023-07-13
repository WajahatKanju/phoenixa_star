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

require_once PHOENIXA_STAR_DIR_PATH . '/inc/helpers/autoloader.php';


\PHOENIXA_STAR_THEME\Inc\PHOENIXA_STAR_THEME::get_instance();

//function phoenixa_star_get_theme_instance(): void {
//	\PHOENIXA_STAR_THEME\Inc\PHOENIXA_STAR_THEME::get_instance();
//
//}

//phoenixa_star_get_theme_instance();

/**
 * Enqueue styles for the Phoenixa Star theme.
 *
 * @return void
 */
function Phoenixa_Star_Enqueue_scripts(): void
{
    //  Register Styles
    wp_register_style(
        'style-css',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css')
    );

    wp_register_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css'
    );

    // Register Scripts 
    wp_register_script(
        'main-js',
        get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime(get_template_directory() . '/assets/main.js'),
        true
    );

    wp_register_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',
        ['jquery'],
        false,
        true
    );

    // Enqueue style
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'Phoenixa_Star_Enqueue_scripts');
