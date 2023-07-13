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

class PHOENIXA_STAR_THEME{
    use Singleton;
    protected function __construct()
    {
		wp_die('Hello there!');
        // load class
        $this->set_hooks();
    }

    protected function set_hooks(){

    }
}