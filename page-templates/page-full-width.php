<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>


<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
