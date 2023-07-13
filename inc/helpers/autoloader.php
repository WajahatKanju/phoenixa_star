<?php

/**
 * Autoloader file for theme
 * PHP version 8.0.
 *
 * @category Theme
 * @package  Phoneixa_Star
 * @author   Wajahat   <wajahat5ahmad@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 *
 * @see     https://wajahatkanju.github.io
 */


namespace PHOENIXA_STAR_THEME\Inc\Helpers;

/**
 * Auto loader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */
function autoloader( string $resource = '' ): void {


	$resource_path  = false;
	$namespace_root = 'PHOENIXA_STAR_THEME\\';
	$resource       = trim( $resource, '\\' );

	if ( empty( $resource ) || ! str_contains( $resource, '\\' ) || ! str_starts_with( $resource, $namespace_root ) ) {
		// Not our namespace, bail out.
		return;
	}

	// Remove our root namespace.
	$resource = str_replace( $namespace_root, '', $resource );

	$path = explode(
		'\\',
		str_replace( '_', '-', strtolower( $resource ) )
	);


	/**
	 * Time to determine which type of resource path it is,
	 * so that we can deduce the correct file path for it.
	 */
	if ( empty( $path[0] ) || empty( $path[1] ) ) {
		return;
	}

	$directory = '';
	$file_name = '';

	if ( 'inc' === $path[0] ) {

		switch ( $path[1] ) {
			case 'traits':
				$directory = 'traits';
				$file_name = sprintf( 'trait-%s', trim( strtolower( $path[2] ) ) );
				break;

			case 'widgets':
			case 'blocks': // phpcs:ignore PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
				/**
				 * If there is class name provided for specific directory then load that.
				 * otherwise find in inc/ directory.
				 */
				if ( ! empty( $path[2] ) ) {
					$directory = sprintf( 'classes/%s', $path[1] );
					$file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
					break;
				}
				break;
			default:
				$directory = 'classes';

				$file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
				break;
		}

		$resource_path = sprintf( '%s/inc/%s/%s.php', untrailingslashit( PHOENIXA_STAR_DIR_PATH ), $directory, $file_name );

	}

	/**
	 * If $is_valid_file has 0 means valid path or 2 means the file path contains a Windows drive path.
	 */
	$resource_path = str_replace('\\', '/', $resource_path);
	$is_valid_file = validate_file( $resource_path );



	if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {

		// We are already making sure that file is exists and valid.
		require_once( $resource_path ); // phpcs:ignore

	}

}

spl_autoload_register( '\PHOENIXA_STAR_THEME\Inc\Helpers\autoloader' );