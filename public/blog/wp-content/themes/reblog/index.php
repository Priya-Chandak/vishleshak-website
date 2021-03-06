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
 * @package Moral
 */

get_header(); ?>

<section id="services" class="section-bg">
      <div class="container">

        <header class="section-header" style="margin-top: 3%;">
          <h3>BLOGS</h3>
          <p>We are encouraging our team to write their understanding and thoughts.</p>
        </header>
	</div>
	<div id="inner-content-wrapper" style="margin-top: -7%;">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div id="infinite-post-wrap" class="post-archive grid">

					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
							
						endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- #infinite-post-wrap -->
				<?php reblog_posts_pagination(); ?>
			</main><!-- #main -->
		</div><!-- #primary -->
    </div><!-- #inner-content-wrapper-->
<?php
get_footer();
