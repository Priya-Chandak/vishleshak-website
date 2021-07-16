<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0k

    Home
    About Us
    Services
    Products
    Contact Us

Skip to content
Vishleshak

 */

get_header(); ?>
<header id="header">

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
        <a href="http://vishleshak.io/home" class="scrollto">
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
      <li><a href="http://vishleshak.io/blog">Blog</a></li>
      <li><a href="http://vishleshak.io/contact">Contact Us</a></li>
    </ul>
  </nav><!-- .main-nav -->  
</div>
</header>

<main id="main">
<section id="services" class="section-bg">
      <div class="container">
<header class="section-header" style="margin-top: 3%;">
          <h3>BLOGS</h3>
        </header>
</div>


<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination(
					array(
						'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					)
				);

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
</section>

<?php
get_footer();
