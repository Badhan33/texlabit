<?php
/**
 * Theme functions
 *
 * @package texlab
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'TEXLAB_VERSION', '1.0.0' );

define( 'TEXLAB_BASE_URI', get_template_directory_uri() );
define( 'TEXLAB_ASSETS_URI', TEXLAB_BASE_URI . '/assets' );
define( 'TEXLAB_INC_DIR', TEXLAB_BASE_URI . '/inc/' );

$files = array(
	'setup.php',
	'widgets.php',
	'enqueue.php',
	'hooks.php'
);

foreach ( $files as $file ) {
	$filepath = locate_template( 'inc/' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}