<?php

get_header(); ?>

	<div id="search_page" class="container-full-width">

		<div class="container">

			<div class="container-fluid">

				<?php do_action( 'cyberchimps_before_container' ); ?>

				<div id="container" <?php cyberchimps_filter_container_class(); ?>>

					<?php do_action( 'cyberchimps_before_content_container' ); ?>

					<div id="content" <?php cyberchimps_filter_content_class(); ?>>

						<?php do_action( 'cyberchimps_before_content' ); ?>

						<?php if( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'fresh-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header>

							<?php /* Start the Loop */ ?>
							<?php while( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'search' ); ?>

							<?php endwhile; ?>

						<?php else : ?>

							<?php get_template_part( 'no-results', 'search' ); ?>

						<?php endif; ?>

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