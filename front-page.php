<?php
/**
 * Front Page
 */
get_header();

// Intro Section
get_template_part( 'template-parts/section', 'hero' );
?>

<main id="main">

	<?php get_template_part( 'template-parts/home', 'about-us' ); ?>
	<?php get_template_part( 'template-parts/home', 'services' ); ?>
	<?php get_template_part( 'template-parts/home', 'specialities' ); ?>
	<?php get_template_part( 'template-parts/home', 'portfolio' ); ?>
	<?php get_template_part( 'template-parts/home', 'testimonials' ); ?>
	<?php get_template_part( 'template-parts/home', 'team' ); ?>
	<?php get_template_part( 'template-parts/home', 'clients' ); ?>
	<?php get_template_part( 'template-parts/contact', 'us' ); ?>

</main>

<?php get_footer(); ?>
