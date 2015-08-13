<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tsr
 */

?>
		</div><!-- .row -->
	</div><!-- #content .container-fluid -->
	
	<footer id="colophon" class="container-fluid" role="contentinfo">
		<?php if( !dynamic_sidebar( 'Footer left' ) ): ?>
        
        <h3>Insert footer information</h3>

    	<?php endif; ?>

    	<?php if( !dynamic_sidebar( 'Footer right' ) ): ?>
        
        <h3>Insert social icons</h3>

    	<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
