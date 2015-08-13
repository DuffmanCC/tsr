
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
        
  