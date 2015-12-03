<?php

/**
 * Adds the CyberChimps credit.
 *
 * @since 1.0
 */
function cyberchimps_footer_credit() {
	?>
	<div class="container-full-width" id="after_footer">
		<div class="container">
			<div class="container-fluid">
				<footer class="site-footer row-fluid">
					<!-- Adds the afterfooter copyright area -->
					<div class="span6">
						<?php $copyright = ( cyberchimps_get_option( 'footer_copyright_text' ) ) ? cyberchimps_get_option( 'footer_copyright_text' ) : 'Kane O\'Riley &#169;' . date( 'Y' ); ?>
						<div id="copyright">
							<?php echo wp_kses_post( $copyright ); ?>
						</div>
					</div>
				</footer>
				<!-- row-fluid -->
			</div>
			<!-- .container-fluid-->
		</div>
		<!-- .container -->
	</div>    <!-- #after_footer -->
<?php
}

add_action( 'cyberchimps_footer', 'cyberchimps_footer_credit' );

// Start new row of footer widgets with a new row-fluid div so that it keeps the fluid layout.
function cyberchimps_footer_widgets( $params ) {

	// Checked if it's footer widgets.
	if( 'Footer Widgets' == $params[0]['name'] ) {
	
		// Declare a widget counter globally so that we can increase it in each iteration.
		global $footer_widget_counter;
		$footer_widget_counter++; 

		// If it's 5(or multiple of 5)th widget then we need to close the current row-fluid div and start a new one.
		if ( $footer_widget_counter % 5 == 0 ) {
			echo '</div> <div class="row-fluid">';
		}
	}
	
	return $params;
}
add_filter( 'dynamic_sidebar_params', 'cyberchimps_footer_widgets' );
