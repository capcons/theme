<?php
/*
 * Mobile Logo Option
 */

$show	 = onesocial_get_option( 'mobile_logo_switch' );
$logo_id = onesocial_get_option( 'boss_mobile_logo', 'id' );
$logo	 = ( $show && $logo_id ) ? wp_get_attachment_image( $logo_id, 'medium', '', array( 'class' => 'boss-mobile-logo' ) ) : get_bloginfo( 'name' );
$search = onesocial_get_option( 'onesocial_search_instead' );
$search_class = $search ? 'is-search' : '';
?>

<div id="mobile-header" class="<?php echo $search_class; ?>">

    <div class="mobile-header-inner">

        <!-- Left button -->
        <?php if ( !is_user_logged_in() && onesocial_get_option( 'user_login_option' ) ) { ?>
            <a href="<?php echo wp_login_url(); ?>" class="login header-button bb-user-login-link"><?php _e( 'Login', 'onesocial' ); ?></a><?php
        } elseif ( !is_user_logged_in() && ! onesocial_get_option( 'user_login_option' ) ) {
            ?>
            <a class="bb-user-login-link" href="<?php echo wp_login_url( home_url() ); ?>" title="<?php _e( 'Login', 'onesocial' ); ?>"><?php _e( 'Login', 'onesocial' ); ?></a><?php
        }
        ?>
        <a href="#" id="user-nav" class="left-btn onesocial-mobile-button" data-position="left"></a>

        <!-- Right button -->
        <a href="#" id="main-nav" class="right-btn onesocial-mobile-button" data-position="right">Menu</a>
		
		<?php if ( $search ) { ?>
			<a href="#" id="enable-header-search" class="onesocial-mobile-button" data-position="right"><i class="bb-icon-search"></i></a>
		<?php } ?>
    </div>

	<div id="mobile-logo">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php echo $logo; ?>
			</a>
		</h1>
	</div>

	<?php
	if ( $search ) {
		echo get_search_form();
	} ?>

</div><!-- #mobile-header -->