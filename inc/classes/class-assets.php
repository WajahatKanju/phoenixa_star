<?php

namespace PHOENIXA_STAR_THEME\Inc;

use PHOENIXA_STAR_THEME\Inc\Traits\Singleton;
class ASSETS {
	use Singleton;

	protected function __construct() {
		// load class
		$this->set_hooks();
	}

	protected function set_hooks(): void {

		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

	}

	public function register_styles(): void {

		wp_register_style(
			'style-css',
			get_stylesheet_uri(),
			[],
			filemtime( PHOENIXA_STAR_DIR_PATH . '/style.css' ),
			'all'
		);

		wp_register_style(
			'bootstrap-css',
			PHOENIXA_STAR_DIRECTORY_URI . '/assets/src/library/css/bootstrap.min.css'
		);


		// Enqueue The Styles after registering
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'bootstrap-css' );
	}

	public function register_scripts(): void {
		wp_register_script(
			'main-js',
			PHOENIXA_STAR_DIRECTORY_URI . '/assets/main.js',
			[],
			filemtime( PHOENIXA_STAR_DIR_PATH . '/assets/main.js' ),
			true
		);

		wp_register_script(
			'bootstrap-js',
			PHOENIXA_STAR_DIRECTORY_URI . '/assets/src/library/js/bootstrap.min.js',
			[ 'jquery' ],
			false,
			true
		);
		// Enqueue The scripts after registering
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
	}


}