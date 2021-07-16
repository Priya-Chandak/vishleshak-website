<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moral
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <meta charset="utf-8">
  <title>Vishleshak - A Software Development and Data Company</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Vishleshak" name="keywords">
  <meta content="Software Development" name="keywords">
  <meta content="Data" name="keywords">
  <meta content="Data Analysis" name="keywords">
  <meta content="App Development" name="keywords">
  <meta content="Mobile App Development" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<main id="main">	
	
<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'reblog' ); ?></a>
    
    <div class="menu-overlay"></div>

    <header id="header" class="site-header" role="banner">
		
		<!-- 
<div id="topbar">
  <div class="container">
    <div class="social-links">
      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
</div>
-->

<div class="container">

  <div class="logo float-left">
    <!-- Uncomment below if you prefer to use an image logo -->
    <h1 class="text-light">
        <a href="#intro" class="scrollto">
            <span>Vishleshak</span>
        </a>
    </h1>
  </div>

  <nav class="main-nav float-right d-none d-lg-block">
    <ul>
      <li><a href="http://vishleshak.io/home">Home</a></li>
      <li><a href="http://vishleshak.io/about-us">About Us</a></li>
      <li><a href="http://vishleshak.io/services">Services</a></li>
      <li><a href="http://vishleshak.io/products">Products</a></li>
      <li><a href="http://vishleshak.io/blog">Blogs</a></li>
      <li><a href="http://vishleshak.io/contact">Contact Us</a></li>
    </ul>
  </nav><!-- .main-nav -->
 	
</div>
        <div class="wrapper">
			
			
            <div id="site-menu">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-label"><?php esc_html_e( 'Menu', 'reblog' ); ?></span>
                    <svg viewBox="0 0 129 129" class="icon-menu">
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
                    </svg>
                </button><!-- .menu-toggle -->

                <div class="site-branding">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div><!-- .site-logo -->
                    <?php endif; ?>

                    <div id="site-identity">
                        <?php
                        if ( is_front_page() ) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                        endif;

                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                        endif; ?>
                    </div><!-- .site-branding-text -->
                </div><!-- .site-branding -->

                <?php 
                $social_icons = '';
                if ( has_nav_menu( 'social' ) ) :
                    $social_icons = '<div class="social-icons">'.
                    wp_nav_menu( array(
                        'theme_location' => 'social',
                        'container' => false,
                        'menu_class' => '',
                        'menu_id' => '',
                        'echo' => false,
                        'depth' => 1,
                        'link_before' => '<span class="screen-reader-text">',
                        'link_after' => '</span>',
                    ) ) .
                    '</div><!-- .social-icons -->';
                endif;

                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'menu nav-menu',
                        'container'      => 'nav',
                        'container_class' => 'main-navigation',
                        'container_id' => 'site-navigation',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s <li class="social-menu-item">' . $social_icons . '</li></ul>',
                    ) );
                else: 
                    if ( current_user_can( 'edit_theme_options' ) ) : ?>
                        <nav class="main-navigation" id="site-navigation">
                            <ul id="primary-menu" class="menu nav-menu">
                                <li><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php echo esc_html__( 'Add a menu', 'reblog' );?></a></li>
                            </ul>
                        </nav>
                    <?php endif; 
                endif; ?>

                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <div class="social-icons">
                        <?php  
                            wp_nav_menu( array(
                                'theme_location' => 'social',
                                'container' => false,
                                'menu_class' => 'menu',
                                'echo' => true,
                                'depth' => 1,
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>',
                            ) );
                        ?>
                    </div><!-- .social-icons -->
                <?php endif; 

                $search_enable = get_theme_mod( 'reblog_show_search', true );
                if ( $search_enable ) :
                ?>
                    <div class="search-menu">
                        <a href="#">
                            <span class="screen-reader-text"><?php esc_html_e( 'search', 'reblog' ); ?></span>
                            <?php 
                            echo reblog_get_svg( array( 'icon' => 'search' ) );
                            echo reblog_get_svg( array( 'icon' => 'close' ) );
                            ?>
                        </a>
                        <div id="search" class="hidden-small">
                            <?php get_search_form(); ?>
                        </div><!-- #search -->
                    </div><!-- .search-menu -->
                <?php endif; ?>
            </div><!-- #site-menu -->

            <div id="social-navigation">
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <div class="social-icons">
                        <?php  
                            wp_nav_menu( array(
                                'theme_location' => 'social',
                                'container' => false,
                                'menu_class' => 'menu',
                                'echo' => true,
                                'depth' => 1,
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>',
                            ) );
                        ?>
                    </div><!-- .social-icons -->
                <?php endif; 

                $search_enable = get_theme_mod( 'reblog_show_search', true );
                if ( $search_enable ) :
                ?>
                    <div id="search-menu">
                        <a href="#">
                            <span class="screen-reader-text"><?php esc_html_e( 'search', 'reblog' ); ?></span>
                            <?php 
                            echo reblog_get_svg( array( 'icon' => 'search' ) );
                            echo reblog_get_svg( array( 'icon' => 'close' ) );
                            ?>
                        </a>
                        <?php get_search_form(); ?>
                    </div><!-- #search-menu -->
                <?php endif; ?>
            </div><!-- #social-navigation -->
        </div><!-- .wrapper -->
    </header><!-- #masthead -->

	<div id="content" class="site-content">
