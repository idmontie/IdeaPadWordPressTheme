<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Idea Pad
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'idea-pad' ); ?></a>
  <?php
    $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
  ?>

  <?php if ( is_front_page() || is_home() ) : ?>
    <?php
      // =================
      // Front Page header
      // =================
    ?>
    <?php if ( isset( $image ) && ! empty( $image ) ) : ?>
      <header id="masthead" class="site-header" role="banner" style="background-image: url( <?php echo $image; ?>)">
    <?php else: ?>
      <header id="masthead" class="site-header" role="banner">
    <?php endif; ?>
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </div><!-- .site-branding -->
    </header><!-- #masthead -->
  <?php elseif ( is_single() ) : ?>
     <?php
      // ==================
      // Single Page header
      // ==================
    ?>
    <?php if ( isset( $image ) && ! empty( $image ) ) : ?>
      <header class="entry-header header-top" role="banner" style="background-image: url( <?php echo $image; ?>)">
    <?php else: ?>
      <header class="entry-header header-top" role="banner">
    <?php endif; ?>
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
  <?php else : ?>
    <?php
      // ===========
      // Page header
      // ===========
    ?>
    <?php if ( isset( $image ) && ! empty( $image ) ) : ?>
      <header class="site-header entry-header header-top" role="banner" style="background-image: url( <?php echo $image; ?>)">
    <?php else: ?>
      <header class="site-header entry-header header-top" role="banner">
    <?php endif; ?>
      <div class="site-branding">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<h2 class="taxonomy-description site-description">', '</h2>' );
      ?>
      </div>
    </header><!-- .entry-header -->
  <?php endif; ?> 
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="content">
      <div class="site-title">
        <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

      <?php get_sidebar(); ?>
    </div>
  </nav><!-- #site-navigation -->

  <div id="content" class="site-content">
