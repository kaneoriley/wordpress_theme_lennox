<?php

get_header(); ?>

	<div id="error_page" class="container-full-width">

		<div class="container">

			<div class="container-fluid">

				<?php do_action( 'cyberchimps_before_container' ); ?>

				<div id="container" <?php cyberchimps_filter_container_class(); ?>>

					<?php do_action( 'cyberchimps_before_content_container' ); ?>

					<div id="content" <?php cyberchimps_filter_content_class(); ?>>

						<?php do_action( 'cyberchimps_before_content' ); ?>

						<article id="post-0" class="post error404 not-found">
							<header class="entry-header">
								<h1 class="entry-title">
									<?php if (cyberchimps_get_option( 'error_custom_title' ) != ''): ?>
										<?php echo cyberchimps_get_option( 'error_custom_title' ); ?>
									<?php else: ?>
									<?php _e( 'Oops! That page cannot be found.', 'fresh-lite' ); ?></h1>
								<?php endif; ?>
							</header>

							<div class="entry-content">
								<?php if( cyberchimps_get_option( 'error_custom_content' ) != '' ): ?>
									<p><?php echo cyberchimps_get_option( 'error_custom_content' ); ?></p>
								<?php else: ?>
									<p><?php _e( 'It looks like nothing was found at this location. Maybe try searching for it?', 'fresh-lite' ); ?></p>
								<?php endif; ?>
								<?php get_search_form(); ?>

							</div>
							<!-- .entry-content -->
						</article>
						<!-- #post-0 -->

						<?php do_action( 'cyberchimps_after_content' ); ?>

					</div>
					<!-- #content -->

					<?php do_action( 'cyberchimps_after_content_container' ); ?>

				</div>
				<!-- #container .row-fluid-->

				<?php do_action( 'cyberchimps_after_container' ); ?>

			</div>
			<!--container fluid -->

		</div>
		<!-- container -->

	</div><!-- container full width -->

<?php get_footer(); ?>