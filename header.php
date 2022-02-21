<?php
/**
 * The header for our theme
 *
 * @package texlab
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="fixed-top">
	<div class="container">

        <div class="logo float-left">
			<?php if ( ! has_custom_logo() ) { ?>
                <a href="<?php esc_url( site_url() ) ?>" class="scrollto">
                    <img src="<?php echo TEXLAB_ASSETS_URI; ?>/img/logo.png" alt="Texlab IT" class="img-fluid">
                </a>
				<?php
			} else {
				the_custom_logo();
			} ?>
        </div>
        <?php
        wp_nav_menu( array(
	        'menu_id'         => 'home',
	        'container'       => 'nav',
	        'container_class' => 'main-nav float-right d-none d-lg-block'
        ) );
        ?>
	</div>
</header>