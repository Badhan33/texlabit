<?php
/**
 * Enqueue scripts and styles.
 *
 * @package texlab
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function texlab_scripts() {
	// Google Fonts
	wp_enqueue_style( 'texlab-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' );

	// Bootstrap CSS File
	wp_enqueue_style( 'texlab-bootstrap', TEXLAB_ASSETS_URI . '/lib/bootstrap/css/bootstrap.min.css', array() );

	// Libraries CSS Files
	wp_enqueue_style( 'texlab-fontawesome', TEXLAB_ASSETS_URI . '/lib/font-awesome/css/font-awesome.min.css', array() );
	wp_enqueue_style( 'texlab-animate', TEXLAB_ASSETS_URI . '/lib/animate/animate.min.css', array() );
	wp_enqueue_style( 'texlab-ionicons', TEXLAB_ASSETS_URI . '/lib/ionicons/css/ionicons.min.css', array() );
	wp_enqueue_style( 'texlab-owlcarousel', TEXLAB_ASSETS_URI . '/lib/owlcarousel/assets/owl.carousel.min.css', array() );
	wp_enqueue_style( 'texlab-lightbox', TEXLAB_ASSETS_URI . '/lib/lightbox/css/lightbox.min.css', array() );

	// Main Stylesheet File
	wp_enqueue_style( 'texlab-style', TEXLAB_ASSETS_URI . '/css/style.css', array(), TEXLAB_VERSION );
	wp_enqueue_style( 'texlab-theme', get_stylesheet_uri(), array(), TEXLAB_VERSION );

	// JavaScript Libraries
	wp_enqueue_script( 'texlab-bootstrap', TEXLAB_ASSETS_URI . '/lib/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-easing', TEXLAB_ASSETS_URI . '/lib/easing/easing.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-mobile-nav', TEXLAB_ASSETS_URI . '/lib/mobile-nav/mobile-nav.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-wow', TEXLAB_ASSETS_URI . '/lib/wow/wow.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-waypoints', TEXLAB_ASSETS_URI . '/lib/waypoints/waypoints.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-counterup', TEXLAB_ASSETS_URI . '/lib/counterup/counterup.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-owlcarousel', TEXLAB_ASSETS_URI . '/lib/owlcarousel/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-isotope', TEXLAB_ASSETS_URI . '/lib/isotope/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'texlab-lightbox', TEXLAB_ASSETS_URI . '/lib/lightbox/js/lightbox.min.js', array( 'jquery' ), '1.0.0', true );

	// Contact Form JavaScript File
	wp_enqueue_script( 'texlab-contactform', TEXLAB_ASSETS_URI . '/contactform/contactform.js', array( 'jquery' ), '1.0.0', true );

	// Template Main Javascript File
	wp_enqueue_script( 'texlab-main', TEXLAB_ASSETS_URI . '/js/main.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'texlab_scripts' );
