<style>
    #header1 {
        text-align: center;
        margin-bottom: 10px;
        color: white;
        display: inline-block;
    }
    
    #headerContainer {
        width: 100%;
        height: 250px;
        position: relative;
        overflow: hidden;
    }
    
    #headerContainerImage {
        position: relative;
        width: 100%;
        top: 0px;
        left: 0px;
        z-index: -1;
    }
    
    #headerImageContainer {
        position: absolute;
        top: 0px;
        left: 0px;
        height: 250px;
        overflow: hidden;
    }
    
    #headerTextContaier {
        position: relative;
/*        padding-top: 20px;*/
        top: 0px;
    }
    
    #navContainer {
        position: relative;
        z-index: 20;
    }
    
     #rightNavArrow {
         position: relative;
         width: 50px;
         display: inline-block;
         float: right;
         height: 0px;
    }
            
     #leftNavArrow {
         position: relative;
         width: 50px;
         display: inline-block;
         height: 0px;
    }
    
     #leftNavArrow:hover {
         opacity: 0.5;
    }
    
     #rightNavArrow:hover {
         opacity: 0.5;
    }
    
    .navArrows {
        height: 100px;
        width: 5%;
        display: inline-block;
        vertical-align: top;
        z-index: 10;
        transition: all 0.3s;
    }
    
    .navArrows:hover {
        opacity: 0.5;
        
    }
    
    #title {
        display: inline-block;
        width: 89%;
        height: 100px;
        vertical-align: middle;
        text-align: center;
        position: relative;
        z-index: 10;
        color: white;
    }
    
    #titleNoArrows {
/*        display: inline-block;*/
        width: 100%;
/*        height: 100px;*/
/*        vertical-align: middle;*/
        text-align: center;
        position: relative;
        z-index: 10;
        color: white;
    }
    
    
</style>

 
<article id="post-<?php the_ID(); ?>" <?php post_class('content-single-page'); ?>>

	<header class="entry-header single-header">
        
       
        
        <div id="headerContainer">
        <div id="parralax">
            <div id="headerTextContaier">
                
                <?php 
     
                    $categories = get_the_category();
 
                    if ( ! empty( $categories ) ) {
                        
                        if (esc_html( $categories[0]->name ) == "Projects") { ?>
                            <div id="navContainer">
                                <?php previous_post_link( '%link', '<img class="navArrows" src="images/leftarrow.png">', TRUE ); ?>
                                
                                <?php the_title( '<h1 itemprop="headline" id="title">', '</h1>' ); ?>
                                
                                <?php next_post_link( '%link', '<img class="navArrows" src="images/rightarrow.png">', TRUE ); ?>
    
    
                            </div> <?php   
                        } else {
                            the_title( '<h1 itemprop="headline" id="titleNoArrows">', '</h1>' );
                        }   
                    } 
                ?>
                
            </div>
            
            
            <div id="headerImageContainer">
                <?php 
                            if ( has_post_thumbnail() ) {
                            
                                $image_id = get_post_thumbnail_id();
                                $image_url_big = wp_get_attachment_image_src($image_id,'headerImage', true);
                                $image_url_mobile = wp_get_attachment_image_src($image_id,'headerImage', true);
                        ?>  
                                <picture itemscope itemprop="image">
                                    <source media="(max-width: 600px)" srcset="<?php echo esc_url($image_url_mobile[0]); ?>">
                                    <img id="headerImage" src="<?php echo esc_url($image_url_big[0]); ?>" alt="<?php     the_title_attribute(); ?>">
                                </picture>
                        <?php
        	                 } 
                        ?>
            </div>
        </div>    
    </div>
        
        
		
<!--		<div class="colored-line-left"></div>-->
		<div class="clearfix"></div>

		<div class="entry-meta single-entry-meta">
			<span class="author-link" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
				<span itemprop="name" class="post-author author vcard">
					<i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" itemprop="url" rel="author"><?php the_author(); ?></a>
				</span>
        	</span>
            
			<time class="post-time posted-on published" datetime="<?php the_time('c'); ?>" itemprop="datePublished">
				<i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time( get_option('date_format') ); ?>
			</time>
			<a href="<?php comments_link(); ?>" class="post-comments">
				<i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number( esc_html__('No comments','azera-shop'), esc_html__('One comment','azera-shop'), esc_html__('% comments','azera-shop') ); ?>
			</a>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div itemprop="text" class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azera-shop' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php azera_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
        
        $(window).on('load', function() {
            var howFarScrolled = "";
            
            $("#headerTextContaier").css("padding-top", ($("#headerContainer").height()/2) - ($("#headerTextContaier").height()/2));
//            $("#headerContainer").css("height", $("#headerImage").height());
//            $("#headerImageContainer").css("height", $("#headerImage").height());
            
            $(window).scroll(function() {
                howFarScrolled = $(document).scrollTop();
                
                $("#headerImage").css("top", howFarScrolled / 2);
                $("#headerTextContaier").css("top", howFarScrolled / 3);
            });
        });
        
        $(document).ready(function() {
            $(window).resize(function() {
                console.log("resizing");
                $("#headerTextContaier").css("padding-top", ($("#headerImage").height()/2) - ($("#headerTextContaier").height()/2));
                $("#headerContainer").css("height", $("#headerImage").height());
                $("#headerImageContainer").css("height", $("#headerImage").height());
            })
        })
    
    </script>