<?php
/* Template Name: Books Page */	

get_header();

?>

	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
					
	<?php endwhile; // end of the loop ?>
					
		<?php $loop = new WP_Query( array( 'post_type' => 'book', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>					
						
		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						
			<?php get_template_part ('template-parts/content','book'); ?>
						
	<?php endwhile; ?>
		
	
<?php get_footer(); ?>


