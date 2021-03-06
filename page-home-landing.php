<?php
/**
 * The template for displaying the Code Reference landing page.
 *
 * Template Name: Home
 *
 * @package wporg-developer
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="home-landing">

			<div class="handbook-banner section blue clear color">
				<div class="inner-wrap two-columns">
					<div class="widget box box-left transparent">
						<h3 class="widget-title"><div class="dashicons dashicons-welcome-widgets-menus"></div><?php _e( 'Themes', 'wporg' ); ?></h3>
						<p class="widget-description"><?php _e( 'Want to learn how to start theming WordPress?', 'wporg' ); ?></p>
						<a href="<?php echo esc_url( get_post_type_archive_link( 'theme-handbook' ) ); ?>" class="themes-go get-started go button"><?php _e( 'Develop Themes ', 'wporg' ); ?><span class="dashicons dashicons-arrow-right-alt2"></span></a>
					</div>
					<div class="widget box box-right transparent">
						<h3 class="widget-title"><div class="dashicons dashicons-admin-plugins"></div><?php _e( 'Plugins', 'wporg' ); ?></h3>
						<p class="widget-description"><?php _e( 'Ready to dive deep into the world of plugin authoring?', 'wporg' ); ?></p>
						<a href="<?php echo esc_url( get_post_type_archive_link( 'plugin-handbook' ) ); ?>" class="plugins-go get-started go button"><?php _e( 'Develop Plugins ', 'wporg' ); ?><span class="dashicons dashicons-arrow-right-alt2"></span></a>
					</div>
				</div>
			</div><!-- /topic-guide -->

			<div class="code-reference-banner section gray clear color">
				<div class="inner-wrap">
					<div class="widget transparent">
						<div class="code-ref-left">
							<h3 class="widget-title"><div class="dashicons dashicons-editor-code"></div><?php _e( ' Code Reference', 'wporg' ); ?></h3>
							<p class="widget-description"><?php _e( 'Search the codebase for documentation', 'wporg' ); ?></p>
						</div>
						<div class="code-ref-right">
							<a href="<?php echo home_url( '/reference' ); ?>" class="codex-go go button"><?php _e( 'Visit the Reference ', 'wporg' ); ?><span class="dashicons dashicons-arrow-right-alt2"></span></a>
						</div>
					</div>
				</div>
			</div><!-- /new-in-guide -->

			<div class="handbook-banner section blue clear color">
				<div class="inner-wrap two-columns">
					<div class="widget box box-left transparent">
						<h3 class="widget-title"><div class="dashicons dashicons-controls-repeat"></div><?php _e( 'REST API', 'wporg' ); ?></h3>
						<p class="widget-description"><?php _e( 'Getting started on making WordPress applications?', 'wporg' ); ?></p>
						<a href="<?php esc_attr_e( get_post_type_archive_link( 'rest-api-handbook' ) ); ?>" class="rest-api-go get-started go button"><?php _e( 'Make Applications ', 'wporg' ); ?><span class="dashicons dashicons-arrow-right-alt2"></span></a>
					</div>
					<div class="widget box box-right transparent">
						<h3 class="widget-title"><div class="dashicons dashicons-arrow-right-alt2"></div><?php _e( 'WP-CLI', 'wporg' ); ?></h3>
						<p class="widget-description"><?php _e( 'Want to accelerate your workflow managing WordPress?', 'wporg' ); ?></p>
						<a href="<?php esc_attr_e( get_post_type_archive_link( 'command' ) ); ?>" class="wp-cli-go get-started go button"><?php _e( 'Run Commands ', 'wporg' ); ?><span class="dashicons dashicons-arrow-right-alt2"></span></a>
					</div>
				</div>
			</div><!-- /topic-guide -->

			<?php /*
			<main id="main" class="site-main section" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" class="home-primary-content">
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'wporg' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
							<?php edit_post_link( __( 'Edit', 'wporg' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
						</div><!-- #post-## -->

					<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
*/ ?>

			<div class="search-guide section light-gray clear">
				<div class="inner-wrap three-columns">

					<?php if ( is_active_sidebar( 'landing-footer-1') ) { ?>
						<?php dynamic_sidebar( 'landing-footer-1' ); ?>
					<?php } else { ?>
						<div class="widget box"></div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'landing-footer-2') ) { ?>
						<?php dynamic_sidebar( 'landing-footer-2' ); ?>
					<?php } else { ?>
						<div class="widget box"></div>
					<?php } ?>

					<div class="widget box">
						<h4 class="widget-title"><a href="https://make.wordpress.org/" class="make-wp-link"><?php _e( 'Help Make WordPress', 'wporg' ); ?></a></h4>
					</div>
				</div>
			</div>

		</div><!-- /home-landing -->
	</div><!-- #primary -->

<?php get_footer(); ?>
