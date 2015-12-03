<?php
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'fresh-lite' ); ?></h1>
	</header>
	<!-- .entry-header -->

	<div class="entry-content">
		<?php if( is_home() ) { ?>

			<p><?php printf( '%1$s <a href="%2$s"></a>.',
			                 __( 'Ready to publish your first post?', 'fresh-lite' ),
			                 admin_url( 'post-new.php' ),
			                 __( 'Get started here', 'fresh-lite' )
				); ?></p>

		<?php
		}
		elseif( is_search() ) {
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'fresh-lite' ); ?></p>
			<?php get_search_form(); ?>

		<?php
		}
		else {
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'fresh-lite' ); ?></p>
			<?php get_search_form(); ?>

		<?php } ?>
	</div>
	<!-- .entry-content -->
</article><!-- #post-0 -->