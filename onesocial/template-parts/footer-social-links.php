<?php
$show_social_links	 = onesocial_get_option( 'footer_social_links' );
$social_links		 = onesocial_get_option( 'boss_footer_social_links' );

if ( $show_social_links && is_array( $social_links ) ) {
	?>

	<div id="footer-icons">

		<ul class="social-icons"><?php
			foreach ( $social_links as $key => $link ) {
				if ( !empty( $link ) ) {
					$href = ( $key == 'email' ) ? 'mailto:' . sanitize_email( $link ) : esc_url( $link );
					?>
					<li>
						<a title="<?php echo $key; ?>" href="<?php echo $href; ?>" target="_blank">
							<i class="<?php echo 'email' == $key ? 'fas' : 'rss' == $key ? 'fa' : 'fab'; ?> fa-<?php echo 'email' == $key ? 'envelope' : $key; ?>" aria-hidden="true"></i>
						</a>
					</li>
					<?php
				}
			}
		?></ul>

	</div>

	<?php
}