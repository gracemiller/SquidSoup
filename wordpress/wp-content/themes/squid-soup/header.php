<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package azera-shop
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?> dir="<?php if (is_rtl()) echo "rtl"; else echo "ltr"; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'azera-shop' ); ?></a>
	<!-- =========================
     PRE LOADER       
    ============================== -->
	<?php
		
	 global $wp_customize;

	 if( !isset( $wp_customize ) && is_page_template('template-frontpage.php') ) {
	 
		$azera_shop_disable_preloader = get_theme_mod('azera_shop_disable_preloader');
		
		if( isset($azera_shop_disable_preloader) && ($azera_shop_disable_preloader != 1)) {
			 
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
			
		}

	} ?>


	<!-- =========================
     SECTION: HOME / HEADER  
    ============================== -->
	<!--header-->
	<header itemscope itemtype="http://schema.org/WPHeader" id="masthead" role="banner" data-stellar-background-ratio="0.5" class="header header-style-one site-header">

        <!-- COLOR OVER IMAGE -->
        <?php
			$azera_shop_sticky_header = get_theme_mod('azera_shop_sticky_header','azera-shop');
			if( isset($azera_shop_sticky_header) && ($azera_shop_sticky_header != 1)){
				$fixedheader = 'sticky-navigation-open';
			} else {
				if( !is_page_template('template-frontpage.php') ){
					$fixedheader = 'sticky-navigation-open';
				}else{
					$fixedheader = '';
					if ( 'posts' != get_option( 'show_on_front' ) ) {
						if( isset($azera_shop_sticky_header) && ($azera_shop_sticky_header != 1)){
							$fixedheader = 'sticky-navigation-open';
						} else {
							$fixedheader = '';
						}
					}
				}
			}
        ?>
		<div class="overlay-layer-nav <?php if(!empty($fixedheader)) {echo esc_attr($fixedheader);} ?>">

            <!-- STICKY NAVIGATION -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll">
				<!-- CONTAINER -->
                <div class="container">
				


					<div class="header-container-wrap">

	                    <!-- MENU -->
	                    <div class="header-nav-wrap">
							<div itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="<?php esc_html_e('Primary Menu','azera-shop') ?>" id="menu-primary" class="navbar-collapse collapse">
								<!-- LOGO ON STICKY NAV BAR -->
								<div id="site-header-menu" class="site-header-menu">
									<nav id="site-navigation" class="main-navigation" role="navigation">
									<?php 
										wp_nav_menu( 
											array( 
												'theme_location'    => 'primary',
												'menu_class'        => 'primary-menu small-text',
												'depth'           	=> 4,
												'fallback_cb'       => 'azera_shop_wp_page_menu'
												 ) 
										);
									?>
									</nav>
								</div>
		                    </div><!-- .navbar-collapse -->
		                </div><!-- .header-nav-wrap -->

						<?php if( class_exists( 'WooCommerce' ) ) { ?>
							<div class="header-icons-wrap">
								
								<div class="header-search">
									<div class="fa fa-search header-search-button"></div>
									<div class="header-search-input">
										<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
											<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'azera-shop' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'azera-shop' ); ?>" />
											<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'azera-shop' ); ?>" />
											<input type="hidden" name="post_type" value="product" />
										</form>
									</div>
								</div>

								<?php if( function_exists( 'WC' ) ) { ?>
									<div class="navbar-cart-inner">
										<a href="<?php echo WC()->cart->get_cart_url() ?>" title="<?php _e( 'View your shopping cart','azera-shop' ); ?>" class="cart-contents">
											<span class="fa fa-shopping-cart"></span>
											<span class="cart-item-number"><?php echo trim( WC()->cart->get_cart_contents_count() ); ?></span>
										</a>
									</div>
								<?php } ?>

							</div>
						<?php } ?>

					</div><!--  -->


					
                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION -->