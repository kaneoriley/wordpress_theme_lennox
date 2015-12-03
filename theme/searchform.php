<?php

// Fetching the searchbar text from the theme options.
$search_text = esc_attr( cyberchimps_get_option( 'searchbar_text' ) );
if( !$search_text ) {
	$search_text = esc_attr( 'Search &hellip;', 'fresh-lite' );
}
?>
<form method="get" id="searchform" class="navbar-search pull-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" class="search-query input-medium" name="s" placeholder="<?php echo $search_text; ?>"/>
</form>
<div class="clear"></div>