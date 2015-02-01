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
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'idea-pad' ); ?></a>

  <?php if ( is_front_page() || is_home() ) : ?>
    <?php
      $image = '';
      $image = get_post_meta( get_the_ID(), 'hero-image' );
      if ( isset( $image ) && ! empty( $image ) ) {
        $image = $image[0];
      }
    ?>
    <?php if ( isset( $image ) && ! empty( $image ) ) : ?>
      <header id="masthead" class="site-header" role="banner" style="background-image: url( <?php echo image; ?>)">
    <?php else: ?>
      <header id="masthead" class="site-header" role="banner">
    <?php endif; ?>
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </div><!-- .site-branding -->
    </header><!-- #masthead -->

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <div class="content">
        <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

        <?php get_sidebar(); ?>
      </div>
    </nav><!-- #site-navigation -->
  <?php endif; ?>

  <div id="content" class="site-content">
