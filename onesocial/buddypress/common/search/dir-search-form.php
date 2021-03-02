<?php
/**
 * Output the search form markup.
 *
 * @since 2.7.0
 */
?>

<div id="<?php echo esc_attr( bp_current_component() ); ?>-dir-search" class="dir-search boss-search-wrapper" role="search">
	<form action="" method="get" id="search-<?php echo esc_attr( bp_current_component() ); ?>-form">
		<label for="<?php bp_search_input_name(); ?>">
			<input type="text" name="<?php echo esc_attr( bp_core_get_component_search_query_arg() ); ?>" id="<?php bp_search_input_name(); ?>" placeholder="<?php bp_search_placeholder(); ?>" />
		</label>

		<input type="submit" id="<?php echo esc_attr( bp_get_search_input_name() ); ?>_submit" name="<?php bp_search_input_name(); ?>_submit" value="<?php esc_attr_e( 'Search', 'onesocial' ); ?>" />
	</form>
</div><!-- #<?php echo esc_attr( bp_current_component() ); ?>-dir-search -->
