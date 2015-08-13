<!-- === START OUR BLOG SECTION === -->
<section id="blog-section" class="container-fluid">

        <?php  

        // WP_Query arguments
        $args = array (
            'pagename'               => 'my-blog',
            'post_type'              => 'page',
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="row">
            <div class="site-title col-xs-12">
                <h1><?php the_title(); ?></h1>                    
            </div>
            <div class="site-content col-lg-10 col-lg-offset-1">
                <?php the_content(); ?>
            </div>
        </div><!-- .row -->

        <?php

        endwhile; endif;

        // Restore original Post Data
        wp_reset_postdata();

        ?>
        <div class="button-group filter-button-group">
          <button data-filter="*">show all</button>
          <button class="category-css" data-filter=".category-css">CSS</button>
          <button class="category-php" data-filter=".category-php">PHP</button>
          <button class="category-plugins" data-filter=".category-plugins">Plugins</button>
          <button class="category-seo" data-filter=".category-seo">SEO</button>
          <button class="category-wordpress" data-filter=".category-wordpress">WordPress</button>
          <button class="category-workflow" data-filter=".category-workflow">Workflow</button>
        </div>

        <div class="masonry-grid">
        <?php
        //Custom $query
        $args = array(
            'post_type' => 'post', 
            );

        $query = new WP_Query( $args );
        $conteo = 0;

        //the loop
         if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); $conteo= $conteo+1;?>

            <div <?php post_class( 'masonry-item' ); ?>>
                <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
                <div class="title"><?php the_title(); ?></div>
                <div class="excerpt"><?php the_excerpt(); ?></div>
                <div class="date-inner">
                    <a href="<?php the_permalink(); ?>">
                        <div class="date"><?php the_time('l, F j, Y'); ?></div>
                    </a>            
                </div>        
            </div><!-- .masonry-item -->
        
        
         <?php

        endwhile; endif;

        // Restore original Post Data
        wp_reset_postdata();

        ?>
        </div><!-- .masonry-grid -->
	
</section>
<!-- === END OUR BLOG SECTION === -->