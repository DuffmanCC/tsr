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
 * @package tsr
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="blog-section" class="container-fluid">

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

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'blog' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		        </div><!-- .masonry-grid -->
    
			</section><!-- blog-section -->
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
