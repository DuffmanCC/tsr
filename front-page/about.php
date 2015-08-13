<!-- === START OUR ABOUT SECTION === -->
<section id="about-section" class="container-fluid">

		<?php  

        // WP_Query arguments
        $args = array (
            'pagename'               => 'who-i-am',
            'post_type'              => 'page',
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="site-title col-xs-12">
            <h1><?php the_title(); ?></h1>                    
        </div>
        <div class="site-content col-md-8 col-md-offset-2">
            <?php the_content(); ?>
        </div>

        <?php

        endwhile; endif;

        // Restore original Post Data
        wp_reset_postdata();

        ?>

	
</section>
<!-- === END OUR ABOUT SECTION === -->