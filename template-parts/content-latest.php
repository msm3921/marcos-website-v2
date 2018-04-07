<?php 
///Advanced Custom Fields
$latest_cover			= get_field('latest_cover');
$latest_title			= get_field('latest_title');
$latest_desc      	    = get_field('latest_description');
 ?>
<!-- latest-->

<section id="content-latest">
	<div>
				<h1>Latest Release</h1>
	</div>
	<div class="container">
		<div class="section-header">
		<!-- If user uploaded an image -->
		<div class="row">
			<div class="latest-cover col-sm-5">
				<?php if(!empty($latest_cover)) : ?>

			<img src="<?php echo $latest_cover['url']; ?>" alt="<?php echo $latest_cover['alt']; ?>">

	    		<?php endif; ?>
			</div> <!-- col -->	
			<div class="latest-info">
					<h3><?php echo $latest_title ?></h3>
					<p><?php echo $latest_desc ?></p>
			</div> <!-- col -->				
		</div> <!-- row -->	

	</div> <!-- section header -->	
	</div> <!-- container -->	
</section>