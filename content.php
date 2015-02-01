<?php
/**
 * @package Idea Pad
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-preview' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				'',
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'idea-pad' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="vcard">
				<div class="avatar"><?php echo get_avatar( get_the_author_id() ); ?></div>
			 	<p class="author"><?php the_author_posts_link(); ?></p>
				<?php idea_pad_posted_on(); ?>
				<div style="clear:both"></div>
			</div>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</footer><!-- .entry-footer -->
	<hr/>
</article><!-- #post-## -->