<?php
/**
 * @package Bootstrap to WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_time(); ?></time>
			
			<i class="fa fa-folder"></i> <?php the_category(', ') ?>
			<!-- <i class="fa fa-tags"></i> <?php the_tags(); ?> -->
			
			<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i> ', ''  ); ?>
		</div><!-- post-details -->
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div class="post-excerpt">
		<?php if ( is_single() ) : ?>
			<div class="post-body">
			    <?php the_content(); ?>
			</div><!-- post-content -->
			<?php else : ?>
			<!-- if you want this to be excerpt class 
			is post excerpt & php tho_excerpt -->
			<div class="post-body">
			    <?php the_content(); ?>
			</div><!-- post-content -->
		<?php endif; ?>
	</div><!-- post-excerpt -->
	
</article><!-- #post-## -->
