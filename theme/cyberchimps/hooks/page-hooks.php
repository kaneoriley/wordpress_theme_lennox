<?php

/**
 * Checks for all elements added in the page section order drag and drop.
 * Calls do_action for each active elements.
 **/
function cyberchimps_page_section_order_action() {
	global $post;

	// Checking for password protection.
	if( !post_password_required() ) {
		$page_section_order = get_post_meta( $post->ID, 'cyberchimps_page_section_order', true );

		// set page default if nothing is selected
		$page_section_order = ( $page_section_order == '' ) ? array( 'page_section' ) : $page_section_order;
		$slider_size        = get_post_meta( $post->ID, 'cyberchimps_slider_size', true );
		if( is_array( $page_section_order ) ) {

			// Check if both of slider and page were active
			if( in_array( 'page_slider', $page_section_order ) && in_array( 'page_section', $page_section_order ) ) {

				// Get position of slider and blog post page in the active elements list.
				$position_slider = array_search( 'page_slider', $page_section_order );
				$position_page   = array_search( 'page_section', $page_section_order );

				$slider_order = $position_slider > $position_page ? 'after' : 'before';
				cyberchimps_add_half_slider_action( $slider_order );
			}

			foreach( $page_section_order as $func ) {

				// checks if slider is selected at half size, if it is it removes it so we can display it above page content
				if( $func == 'page_slider' && $slider_size == 'half' ) {
					$func = '';
				}
				else {
					?>
					<div class="container-full-width" id="<?php echo $func; ?>_section">
						<div class="container">
							<div class="container-fluid">
								<?php
								do_action( $func );
								?>
							</div>
							<!-- .container-fluid-->
						</div>
						<!-- .container -->
					</div>    <!-- .container-full-width -->
				<?php
				}
			}
		}
	}
	else {
		// Get the form to submit password
		?>
		<div class="container-full-width" id="<?php echo $func; ?>_section">
			<div class="container">
				<div class="container-fluid">
					<div id="container" class="row-fluid">
						<div id="content">
							<article class="post">
								<?php
								echo get_the_password_form();
								?>
							</article>
						</div>
					</div>
				</div>
				<!-- .container-fluid-->
			</div>
			<!-- .container -->
		</div>    <!-- .container-full-width -->
	<?php
	}
}

add_action( 'cyberchimps_page_content', 'cyberchimps_page_section_order_action' );

function cyberchimps_page() {
	?>
	<div id="container" <?php cyberchimps_filter_container_class(); ?>>

		<?php do_action( 'cyberchimps_before_content_container' ); ?>

		<div id="content" <?php cyberchimps_filter_content_class(); ?>>

			<?php do_action( 'cyberchimps_before_content' ); ?>

			<?php while( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if( comments_open() || '0' != get_comments_number() ) {
					comments_template( '', true );
				}
				?>

			<?php endwhile; // end of the loop. ?>

			<?php do_action( 'cyberchimps_after_content' ); ?>

		</div>
		<!-- #content -->

		<?php do_action( 'cyberchimps_after_content_container' ); ?>

	</div><!-- #container .row-fluid-->
<?php
}

add_action( 'page_section', 'cyberchimps_page' );