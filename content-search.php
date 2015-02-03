<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Idea Pad
 */
?>
<?php
	$title  = get_the_title();
	$search = preg_replace( '/[^A-Za-z0-9 ]/', '', $s );
	$keys   = explode( ' ', $search );
	$title  = preg_replace(
			'/(' . implode( '|', $keys ) . ')/iu',
			'<strong class="search-excerpt">\0</strong>',
			$title
	);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-preview' ); ?>>
	<div class="entry-content">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?> 
		</a>
		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php echo $title; ?>
				</a>
			</h1>
		</header><!-- .entry-header -->
		<a href="<?php echo esc_url( get_permalink() ); ?>">
		<?php
			echo wp_strip_all_tags( get_the_excerpt() );
		?>
		</a>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'idea-pad' ),
				'after'  => '</div>',
			) );
		?>

		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<div class="vcard vcard-small">
					<div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
				 	<span class="written-on"><?php idea_pad_posted_on(); ?></span><br/>
					<span class="author"><?php the_author_posts_link(); ?></span>
					<div style="clear:both"></div>
				</div>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-content -->
	<hr/>
</article><!-- #post-## -->