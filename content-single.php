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
			<p><?php the_tags(); ?></p>
			<hr />
			<div class="vcard">
				<div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
			 	<span class="written-on"><?php idea_pad_posted_on(); ?></span><br/>
				<span class="author"><?php the_author_posts_link(); ?></span>
				<div style="clear:both"></div>
			</div>
			<hr />
		</div><!-- .entry-meta -->

		<?php idea_pad_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
