<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Idea Pad
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if( function_exists( 'mc4wp_form' ) ) : ?>
      <div class="signup">
        <div class="signup-inner">
          <h3 class="subscribe"><?php _e( 'Subscribe', 'idea-pad' ); ?></h3>
          <?php mc4wp_form(); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( ! is_home() && ! is_front_page() ) : ?>
      <?php
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags( $post->ID );
        
        if ( $tags ) :
          $tag_ids = array();
          foreach( $tags as $individual_tag ) {
            $tag_ids[] = $individual_tag->term_id;
          }

          $args = array(
            'tag__in' => $tag_ids,
            'post__not_in' => array( $post->ID ),
             // Number of related posts to display.
            'posts_per_page' => 3,
            'ignore_sticky_posts' => 1
          );
        
          $my_query = new wp_query( $args );

          if ( $my_query->have_posts() ) :
        ?>
          <div class="related-articles">
            <div class="related-articles-inner">
              <h3><?php _e( 'Related Articles', 'idea-pad' ); ?></h3>
              <ul>
                <?php
                while( $my_query->have_posts() ) :
                  $my_query->the_post();
                ?>
                  <li><a rel="external" href="<?php the_permalink()?>">
                    <?php the_title(); ?>
                  </a></li>
                <?php
                endwhile;

                $post = $orig_post;
                wp_reset_query();
              ?>
              </ul>
            </div>
          </div><!-- .related-articles -->
        <?php endif; ?>
      <?php endif; ?>
    <?php endif; ?>

    <div class="site-info">
      <?php _e( 'Copyright', 'idea-pad' ); ?> &copy; <script>document.write(new Date().getFullYear())</script>
&middot; <?php _e( 'All Rights Reserved', 'idea-pad' ); ?> &middot; <?php bloginfo( 'name' ); ?>
			<br/>
			<?php printf( __( 'WordPress Theme: %1$s by %2$s.', 'idea-pad' ), 'Idea Pad', '<a href="http://github.com/idmontie" rel="designer">Ivan Montiel and Daniela Howe</a>' ); ?>
      <br/>
      <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'idea-pad' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'idea-pad' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
