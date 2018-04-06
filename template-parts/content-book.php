<?php 
///Advanced Custom Fields
$book_cover			= get_field('book_cover');
$book_title			= get_field('book_title');
$book_desc      	= get_field('book_description');
 ?>
<!-- Book-->

<section id="content-book">
	<div class="container">
		<div class="section-header">
		
		<!-- If user uploaded an image -->
		<div class="row">
			<div class="col-sm-6">
				<h3><?php echo $book_title ?></h3>
				<p><?php echo $book_desc ?></p>
			</div> <!-- col -->		
			<div class="col-sm-6">
				<?php if(!empty($book_cover)) : ?>

			<img src="<?php echo $book_cover['url']; ?>" alt="<?php echo $book_cover['alt']; ?>">

	    		<?php endif; ?>
			</div> <!-- col -->			
		</div>

	</div>

</section>