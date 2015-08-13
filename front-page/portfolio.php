<!-- === START OUR PORTFOLIO SECTION === -->
<section id="portfolio-section" class="container-fluid">
    <div class="row">
		<?php  

        // WP_Query arguments
        $args = array (
            'pagename'               => 'my-work',
            'post_type'              => 'page',
        );

        // The Query
        $query = new WP_Query( $args );
        $page_ID = $query->queried_object->ID;


        // The Loop
        if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="site-title col-xs-12">
            <h1><?php the_title(); ?></h1>                    
        </div>
        <div class="site-content col-xs-12 col-lg-10 col-lg-offset-1">
            <?php the_content(); ?>
        </div>

        <?php

        endwhile; endif;

        // Restore original Post Data
        wp_reset_postdata();

        ?>
    </div><!-- .row -->
        <?php  

        // WP_Query arguments        
        $args = array (
            'post_type'              => 'works',
            'order'                  => 'ASC'
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
        
        <div class="work col-xs-12">
            <div class="description col-sm-12">
                <h3><?php the_title(); ?></h3>
                <div class="site-content">
                    <?php the_content(); ?>
                </div>           
            </div>
            <div class="link col-xs-12">
                <a href="<?php echo get_post_meta( get_the_ID(), 'text_meta_field_link', true );?>" target="_blank">Go to the site</a>
            </div>       
        </div>

        <?php

        endwhile; endif;

        // Restore original Post Data
        wp_reset_postdata();

        ?>

	
</section>
<!-- === END OUR PORTFOLIO SECTION === -->



