<?php

function texlab_header_style() {
	if ( is_admin() || ! is_user_logged_in() ) {
		return;
	}
	?>
	<style>
        #header{
            top:32px;
        }
        @media only screen and (max-width: 782px) {
            #header{
                top:46px;
            }
        }
	</style>
	<?php
}
add_action( 'wp_head', 'texlab_header_style' );

function texlab_get_custom_logo_image_attributes( $custom_logo_attr ) {
	if ( ! is_admin() ) {
		$custom_logo_attr['class'] = 'img-fluid';
	}
    return $custom_logo_attr;
}
add_filter( 'get_custom_logo_image_attributes', 'texlab_get_custom_logo_image_attributes' );

function texlab_get_custom_logo( $html ) {
    if ( is_admin() || ! has_custom_logo() ) {
        return $html;
    }
    $new_html = str_replace( 'class="custom-logo-link"', 'class="scrollto"', $html );
    return $new_html;
}
add_filter( 'get_custom_logo', 'texlab_get_custom_logo' );