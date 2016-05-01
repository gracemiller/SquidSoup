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
<style>
    .socialicon {
        transition: 0.5s ease; 
        height:30px; 
        margin:25px 10px;
    }
    .socialicon:hover {
        cursor: pointer;
        transform: scale(1.2);
    }
    #topnavbg {
        width:100vw; 
        height:80px; 
        background-color:#131313;   
    }
    #socialbar {
        height:80px; 
        display:inline-block; 
        float:right;
        margin:auto; 
        vertical-align:middle;
    }
    #squidlogo {
        height:60px;
        display:inline-block;
        vertical-align:middle;
    }
    @media screen and (max-width: 666pt) {
        #squidlogo {
            display: none;   
        }
        #socialbar {
            float:none;
            text-align:center;
            margin:auto; 
            width:100%;
        }
    }
</style>

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
                <div class="container" style="margin:0px; padding: 0px; width:100vw">
                    
                    <div id="topnavbg">
                        
                        <div style="width:66vw; margin:auto; padding: 0px; text-align:left">
                            
                            
                            <div id="squidlogo">
                                <img src="/squidsoup.png" style="height:60px; margin: 10px 20px">
                            </div>
    
                            
                            <div id="socialbar">
                                <a href="http://www.facebook.com/" target="_blank">
                                    <img src="/facebook.png" class="socialicon">
                                </a>
                                <a href="http://www.twitter.com/" target="_blank">
                                    <img src="/twitter.png" class="socialicon">
                                </a>
                                <a href="http://www.flickr.com/" target="_blank">
                                    <img src="/flickr.png" class="socialicon">
                                </a>
                                <a href="http://www.vimeo.com/" target="_blank">
                                    <img src="/vimeo.png" class="socialicon" style="margin-right:0px">
                                </a>
                            </div>
                            
                            
                        </div>
                        
                    </div>

					<div class="header-container-wrap">

	                    <!-- MENU -->
	                    <div class="header-nav-wrap">
							<div itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="<?php esc_html_e('Primary Menu','azera-shop') ?>" id="menu-primary" class="navbar-collapse collapse">
								<!-- LOGO ON STICKY NAV BAR -->
								<div id="site-header-menu" class="site-header-menu">
									<nav id="site-navigation" class="main-navigation" role="navigation" style="background-color:#272727">
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

					</div><!--  -->

                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION -->