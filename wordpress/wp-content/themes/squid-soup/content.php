<?php
	get_header(); 
?>
<style>
    #articleContainer {
        width: 100%;
        height: 500px;
        overflow: hidden;
    }
    
    #articleContainer img {
        position: relative;
        width: 100%;
        height: 500px;
/*        top: 0px;*/
        left: 0px;
        z-index: 0;
    }
    
    .articleImageContainer {
        position: absolute;
        top: 0px;
/*        left: -1000;*/
        height: 500px;
        overflow: hidden;
    }
    
    .articleTextContaier {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
        top: 25%;
        color: white;
        z-index: 100;
    }
    
    .articleTitle {
        text-align: center;
    }
    
    .whiteText {
        color: white;
    }
    
    .whiteText:hover {
        color: deeppink;
    }
    
    .pinkText {
        color: deeppink;
    }
    
    .articleAnimationContainer {
        width: 100%;
        position: absolute;
        top: 0;
        padding-top: 125px;;
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class('border-bottom-hover'); ?> itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting">
    <header class="entry-header">
            
    <div class="post-img-wrap">
            
                <div id="articleContainer">
                    <div class="articleAnimationContainer">
                    
                    <!-- Article Content -->
                    <div class="articleTextContaier">
                        
                        <!-- Article Title -->
                        <a class="whiteText" href="<?php the_permalink(); ?>">
                            <h1 class="articleTitle"><?php echo get_the_title(); ?></h1>
                        </a> 
                        
                        <!-- Meta Info -->
                        <p>Posted By
                            <a itemprop="url" class="whiteText" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author(); ?> </a>
                            
                            On 

				            <?php the_time( get_option('date_format') ); ?>
                            
                            In
                            
                            <?php echo the_category( ' ' ); ?>
                            
                            /
                            
                            <?php comments_number( 'No Comments', '1 Comments', '% Comments' ); ?>
                            
                            .
                            
                        </p>
                        
                        <!-- Article Description -->
                        <div itemprop="description">
                            <?php
                            $ismore = @strpos( $post->post_content, '<!--more-->');
                            if($ismore) : the_content( sprintf( esc_html__('Read more %s &#8230;','azera-shop'), '<span class="screen-reader-text">' . esc_html__('about ', 'azera-shop') . esc_html( get_the_title() ) .'</span>' ) );
                            else : the_excerpt();
                                    
                            endif;
                            ?>
                        </div>
                        
                    </div>
                    
                    <!-- Featured Image -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                        <div class="articleImageContainer">
                    
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
                    </a>
                        </div>
                </div>
            
        </div>  
        
    </header>
</article>