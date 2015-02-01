<?php
/**
 * @package Idea Pad
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-single' ); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'idea-pad' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php idea_pad_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php idea_pad_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
