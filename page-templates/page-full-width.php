<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<section class="secondary-nav">
	<nav class="site-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<div class="site-desktop-title top-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-container">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="115 62 170.041 55.336"><defs><style>.cls-1, .cls-2 { fill: #f6c816; } .cls-2 { font-size: 6px; font-family: Helvetica; }</style></defs><g id="Group_4" data-name="Group 4"><path id="Path_6" data-name="Path 6" class="cls-1" d="M142.142 76.728l-8.416 19.953h8.346zm0 36.75l.07-8.24H129.94l-3.613 8.24H115l24.863-50.917h10.38l2.525 50.918z"/><g id="Group_3" data-name="Group 3"><path id="Path_7" data-name="Path 7" class="cls-1" d="M158.553 88.02c3.3-14.588 4.944-18.726 8.556-22.022 2.98-2.735 6.38-4 11.64-4 4.49 0 8.1 1.157 10.38 3.717a12.415 12.415 0 0 1 2.666 7.855 21.237 21.237 0 0 1-.175 3.226h-10.554a18.136 18.136 0 0 0 .14-2.63c0-1.93-.7-3.577-3.366-3.577a4.73 4.73 0 0 0-3.472 1.367c-1.823 1.648-2.98 5.365-5.365 16.1-1.087 5.015-2.14 10.52-2.14 13.57 0 2.35.878 3.858 3.367 3.858a4.6 4.6 0 0 0 4-1.93 11.87 11.87 0 0 0 1.964-4.347h10.7c-1.333 5.716-3.156 8.942-6.452 11.572-2.665 2.14-5.576 3.3-11.15 3.3-5.822 0-9.294-1.86-11.152-4.944-1.4-2.28-1.823-4.138-1.823-7.364a84.1 84.1 0 0 1 2.244-13.746"/><path id="Path_8" data-name="Path 8" class="cls-1" d="M192.777 88.02c3.3-14.588 4.944-18.726 8.556-22.022 2.98-2.735 6.382-4 11.642-4 4.49 0 8.1 1.157 10.38 3.717a12.414 12.414 0 0 1 2.665 7.855 21.237 21.237 0 0 1-.175 3.226h-10.553a18.138 18.138 0 0 0 .14-2.63c0-1.93-.7-3.577-3.366-3.577a4.73 4.73 0 0 0-3.472 1.367c-1.824 1.648-2.98 5.365-5.365 16.1-1.088 5.015-2.14 10.52-2.14 13.57 0 2.35.877 3.858 3.366 3.858a4.6 4.6 0 0 0 4-1.93 11.87 11.87 0 0 0 1.964-4.347h10.836c-1.333 5.716-3.156 8.942-6.452 11.572-2.665 2.14-5.576 3.3-11.15 3.3-5.822 0-9.294-1.86-11.152-4.944-1.4-2.28-1.823-4.138-1.823-7.364-.036-3.156.77-7.96 2.1-13.746"/></g><path id="Path_9" data-name="Path 9" class="cls-1" d="M233.737 62.56h24.55l-1.9 8.592h-13.988l-2.736 12.344h12.028l-1.894 8.59H237.77l-2.77 12.8h14.027l-1.894 8.592h-24.547z"/><path id="Path_10" data-name="Path 10" class="cls-1" d="M285.04 109.16l-7.855-8.135-.842 3.857H264.42l9.294-42.32h-10.556l-11.15 50.916h22.477l-.842 3.857z"/><text id="_" data-name="™" class="cls-2" transform="translate(276.232 67.445)"><tspan x="0" y="0">™</tspan></text></g></svg>
					<p>DUST-PREVENTING POLYMERIC SAND</p>
				</a>
			</div>
		</div>
		<div class="top-bar-right">
			<?php foundationpress_top_bar_r(); ?>

			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>
	</nav>
</section>

<div class="main-wrap full-width" role="main">


<?php do_action( 'foundationpress_before_content' ); ?>


<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
