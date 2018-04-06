<?php

/*
Template Name: Sub Page
*/ 
get_header(); ?>

<?php $sub_description		= get_field('sub_description'); ?>

<div id="subSection">
	
	<p class="text-center"><?php echo $sub_description ?></p>

</div>


<?php get_footer();
