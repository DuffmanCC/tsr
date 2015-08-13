<!-- === START OUR SKILLS SECTION === -->
<section id="skills-section" class="container-fluid">

    <?php  

    // WP_Query arguments
    $args = array (
        'pagename'               => 'what-i-do',
        'post_type'              => 'page',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ):
        while ( $query->have_posts() ):
            $query->the_post(); ?>

    <div class="row">
        <div class="site-title col-xs-12">
            <h1><?php the_title(); ?></h1>                    
        </div>
        <div class="site-content col-md-8 col-md-offset-2">
            <?php the_content(); ?>
        </div>
    </div><!-- .row 1st-->

    <?php

    endwhile; endif;

    // Restore original Post Data
    wp_reset_postdata();

    ?>

    <div class="row">
       
    <?php 

    // Query for the skills post-type
    $args = array(
        'post_type'     => 'skills',
        'tag'           => 'main',
        'order'         => 'ASC'
    );

    $query = new WP_Query( $args );

    if( $query->have_posts() ): while( $query->have_posts()): $query->the_post(); ?>

        <div class="col-sm-6 col-md-3 skill-item">
            <figure class="skill-icon">
                <i class="<?php echo get_post_meta( get_the_ID(), 'text_meta_field_logo', true );?>"></i>
            </figure><!-- .skill-icon -->

            <h3><?php the_title(); ?></h3>

            <div class="skill-description">
                <?php the_content(); ?>
            </div><!-- .skill-description -->
        </div><!-- .skill-item -->

    <?php

    endwhile; endif;

    // Restore original Post Data
    wp_reset_postdata();

    ?>
    </div><!-- .row 2nd-->

    <?php  

    // WP_Query arguments
    $args = array (
        'pagename'               => 'what-i-do-more',
        'post_type'              => 'page',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ):
        while ( $query->have_posts() ):
            $query->the_post(); ?>

    <div class="row">
        <div class="site-title col-xs-12">
            <h2><?php the_title(); ?></h2>                    
        </div>
        <div class="site-content col-md-8 col-md-offset-2">
            <?php the_content(); ?>
        </div>
    </div><!-- .row 3th-->

    <?php

    endwhile; endif;

    // Restore original Post Data
    wp_reset_postdata();

    ?>

    <div class="row">
       
    <?php 

    // Query for the skills post-type
    $args = array(  
        'post_type'     => 'skills',
        'tag'           => 'secondary',
        'order'         => 'ASC'
    );

    $query = new WP_Query( $args );

    if( $query->have_posts() ): while( $query->have_posts()): $query->the_post(); ?>

        <div class="col-sm-6 col-md-3 skill-item">
            <figure class="skill-icon">
                <i class="<?php echo get_post_meta( get_the_ID(), 'text_meta_field_logo', true );?>"></i>
            </figure><!-- .skill-icon -->

            <h3><?php the_title(); ?></h3>

            <div class="skill-description">
                <?php the_content(); ?>
            </div><!-- .skill-description -->
        </div><!-- .skill-item -->

    <?php

    endwhile; endif;

    // Restore original Post Data
    wp_reset_postdata();

    ?>
    </div><!-- .row 4th-->
    
</section>
<!-- === END OUR SKILLS SECTION === -->
