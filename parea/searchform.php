<form role="search" method="get" action="<?php echo home_url('/'); ?>">
	<input 
	type="search" 
	class="form-control" 
	placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'parea' ); ?>" 
	value="<?php echo get_search_query(); ?>" 
	name="s" 
	title="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'parea' ); ?>" />
</form>