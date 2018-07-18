<?php 
///Advanced Custom Fields
$book_cover			= get_field('book_cover');
$book_title			= get_field('book_title');
$book_desc      	= get_field('book_description');
$buy_summary 		= get_field('buy_summary');
$amazon_image 		= get_field('amazon_image');
$amazon_url 		= get_field('amazon_url');
 ?>
<!-- Book-->

<section id="content-book">
	<div class="container">
		<div class="section-header">
		
		<!-- If user uploaded an image -->
		<div class="row">
			<h3><?php echo $book_title ?></h3>
			<div class="col-sm-6 book-img">
				<?php if(!empty($book_cover)) : ?>

			<img src="<?php echo $book_cover['url']; ?>" alt="<?php echo $book_cover['alt']; ?>">

	    		<?php endif; ?>
			</div> <!-- col -->	
			<div class="col-sm-6">
				<p><?php echo $book_desc ?></p>
			</div> <!-- col -->				
		</div>
		<div class="row">
		  <div class="col-sm-12">
				<h3><?php echo $buy_summary ?></h3>
		</div> <!-- buy summary -->	
		<div class="col-sm-12">
			<?php 
  				if (!empty($amazon_image)) {
    			$url = get_field('amazon_url');
    		?>
      	<a href="<?php echo $amazon_url; ?>" target="_blank"><img src="<?php 
          echo $amazon_image['url']; ?>" alt="<?php 
          echo $amazon_image['alt']; ?>" /></a>
   			 <?php 
  			}
			?>
		</div> <!--  amazon -->
		</div> <!--  row -->

	</div>

</section>