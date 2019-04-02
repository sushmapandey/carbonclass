<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">
      <?php esc_html_e( 'Skip to content', 'gutenbergtheme' ); ?></a>
    <header id="masthead" class="site-header">
      <div class="top-header">
        <div class="container">
          <div class="top-header-row">
            <div class="top-header-col">
              <ul>
                <li><a href="mailto:info@diamondbrite.co.in" target="_blank" rel="noopener noreferrer"><i class="icon-msg"></i><span>info@diamondbrite.co.in</span></a></li>
                <li><a href="tel:+91 90087 12345" target="_blank" rel="noopener noreferrer"><i class="icon-phone"></i><span>+91 91760 76767</span></a></li>
              </ul>
            </div>
            <div class="top-header-col">
            <div class=" home-search">
            <form action="<?php echo home_url( '/' ); ?>">
              <input type="search" name="s" placeholder="Search&hellip;" value="<?php echo get_search_query()?>" class="input" />
              <input type="hidden" name="post_type" value="kb_article">
            </form>
          </div><!-- /.container -->
          <div class="__search">
            <i class="icon-search2"></i>
            <i class="fas fa-times"></i>
          </div><!-- /.search-close -->
              <!-- <i class="icon-person"></i> -->
              <i class="icon-cart"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="main-header">
        <div class="container">
          <div class="main-header-row">
            <div class="hamburger-menu">
              <span></span>
              <span></span>
              <span></span>
            </div><!-- eo hamburger-menu -->
          <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
              <?php
            endif;
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description">
                  <?php echo $description; /* WPCS: xss ok. */ ?>
                </p>
                <?php
            endif; ?>
          </div><!-- .site-branding -->
          <nav id="site-navigation" class="cc-navigation">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
            <div class="">
              <a href="" class="btn btn-outline cc-btn">Book Now</a>
            </div>
          </nav><!-- #site-navigation -->
        
          </div>
          
        </div>
      </div>

    </header><!-- #masthead -->