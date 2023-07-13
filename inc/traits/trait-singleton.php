<?php

/**
 * Singleton file for theme
 * PHP version 8.0.
 *
 * @category Theme
 *
 * @package  Phoneixa_Star
 * @author   Wajahat   <wajahat5ahmad@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 *
 * @see     https://wajahatkanju.github.io
 */

namespace PHOENIXA_STAR_THEME\Inc\Traits;
trait Singleton {
    public function  __construct()
    {
    }
    public function __clone(){

    }

    final public static function get_instance(): string
    {
        static $instance = [];
        $called_class =get_called_class();
        if(! isset( $instance[$called_class])){
            $instance[$called_class] = new $called_class;
                do_action( sprintf('phoenixa_star_theme_singleton_init%s', $called_class));
        }
        return $instance[$called_class];
    }
}