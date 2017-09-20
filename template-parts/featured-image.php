<?php

// ACF

// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php

			while ( have_posts() ) : the_post();

				// ACF
				$hero_image = get_field('hero_image');

		?>
			<article <?php post_class('featured-hero-wrap') ?> id="post-<?php the_ID(); ?>">
				<div class="row align-center">
					<div class="small-12 medium-8 column align-self-bottom">
						<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="small-12 column align-self-bottom">
						<img data-interchange="[<?php echo $hero_image['sizes']['fp-small']; ?>, small], [<?php echo $hero_image['sizes']['fp-medium']; ?>, medium], [<?php echo $hero_image['sizes']['fp-large']; ?>, large], [<?php echo $hero_image['sizes']['fp-xlarge']; ?>, xlarge]" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
					</div>
				</div>
			</article>
		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>

	</header>
<?php endif;
