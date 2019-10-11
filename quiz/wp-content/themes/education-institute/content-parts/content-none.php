<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage education-institute
 */
?>
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	    <p>
	       <?php 
	           printf( esc_html__( 'Ready to publish your first post? Get started here.', 'education-institute' ), esc_url( admin_url( 'post-new.php' ) ) ); 
	        ?>
	    </p>
    <?php elseif ( is_search() ) : ?>

	<h4 class="nosearch">
		<?php printf( esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'education-institute' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h4>

	<div class="widget widget_search cc-search">
		 <?php get_search_form(); ?>
	</div>

    <?php else : ?>

	<p>
	  <?php echo(esc_html__( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'education-institute' )); ?>
    </p>
	<?php get_search_form(); ?>

<?php endif; ?>