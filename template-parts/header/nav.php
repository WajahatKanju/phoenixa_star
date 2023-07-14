<?php

/**
 * Header Navigation template
 * PHP version 8.0
 *
 * @category Theme
 * @package  Phoneixa_Star
 * @author   Wajahat   <wajahat5ahmad@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 * @link     https://wajahatkanju.github.io
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">


	<?php
    if(function_exists('the_custom_logo')){

        the_custom_logo();

    }
    ?>

    <a class="navbar-brand" href="#">

    </a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a 
                    class="nav-link dropdown-toggle" 
                    href="#" 
                    id="navbarDropdown" 
                    role="button" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Enabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input 
                class="form-control mr-sm-2" 
                type="search" 
                placeholder="Search" 
                aria-label="Search">
            <button 
                class="btn btn-outline-success my-2 my-sm-0" 
                type="submit">Search</button>
        </form>
    </div>
</nav>