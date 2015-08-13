<?php
/**
 * Template part for displaying single posts.
 *
 * @package tsr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-img">
		<?php the_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<div class="entry-meta">
			<span class="calendar">
				<i class="fa fa-calendar"></i><?php the_date(' F j, Y'); ?>
			</span>
			<span class="category">
				<i class="fa fa-folder-open-o"></i> <?php the_category(', ' ); ?>
			</span>
			<span class="comment">
				<i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '%' );?>
			</span>			
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tsr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="footer">
			<?php echo get_the_tag_list('<i class="fa fa-tags"></i> ', ', ');?>
		</div>		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

