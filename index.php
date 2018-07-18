<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>

<section id="content-blog">
	<!-- BLOG CONTENT -->
	<div class="container">
		<div class="section-header">
		<div>
				<h3>Did you know...</h3>
				<h4>Facts I've Stumbled Upon While I Research Future Books!</h4>
		</div>
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-12" role="main">
			
			<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>


					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

		    </main> <!-- content -->
		</div> <!-- row -->
		</div> <!-- section header -->	
	</div> <!-- container -->	
</section>	
<?php get_footer(); ?>  
