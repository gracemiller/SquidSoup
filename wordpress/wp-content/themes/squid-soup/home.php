<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package azera-shop
 */
	get_header(); 
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div role="main" id="content" class="content-warp">
	<div class="" style="width: 100%;">
		<div id="primary" class="content-area col-md-12 post-list" style="padding: 0;">
            <h1 style="margin-top:0; margin-left:7.5%">Blog</h1>
			<main <?php if(have_posts()) echo 'itemscope itemtype="http://schema.org/Blog"'; ?> id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>
				
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						get_template_part( 'content' ); ?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        
        $.each($('.articleAnimationContainer'), function(i, el){
            console.log($(el).offset().top);
            $(el).css('right', $(window).width());
            $(el).css('width', $(window).width());
    
            if ($(el).offset().top < $(window).height()) {
            
                setTimeout(function(){
                    $(el).animate({
                        'right': 0
                    }, 450, function() {
                        $(el).css("width", "");
                    });
                },500 + ( i * 500 ));
                
            }
    
        });
                
    })
    
    $(document).scroll(function() {
        console.log("scrolling");
        console.log($(window).height() + $(document).scrollTop());
        $.each($('.articleAnimationContainer'), function(i, el){
    
            if ($(el).offset().top < $(window).height() + $(document).scrollTop() - 75) {
                $(el).css('width', $(window).width());
            
                    $(el).animate({
                        'right': 0
                    }, 450, function() {
                        $(el).css("width", "");
                    });
                
            }
    
        });
    })
</script>