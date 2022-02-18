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

		<nav class="main-nav float-right d-none d-lg-block">
			<ul>
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#about">About Us</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#team">Team</a></li>
				<li class="drop-down"><a href="">Drop Down</a>
					<ul>
						<li><a href="#">Drop Down 1</a></li>
						<li class="drop-down"><a href="#">Drop Down 2</a>
							<ul>
								<li><a href="#">Deep Drop Down 1</a></li>
								<li><a href="#">Deep Drop Down 2</a></li>
								<li><a href="#">Deep Drop Down 3</a></li>
								<li><a href="#">Deep Drop Down 4</a></li>
								<li><a href="#">Deep Drop Down 5</a></li>
							</ul>
						</li>
						<li><a href="#">Drop Down 3</a></li>
						<li><a href="#">Drop Down 4</a></li>
						<li><a href="#">Drop Down 5</a></li>
					</ul>
				</li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</header>