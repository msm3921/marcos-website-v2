<?php 
///Custom Fields
$optin_text 			= get_post_meta(7,'optin_text',true);
$optin_button_text  	= get_post_meta(7,'optin_button_text',true);

 ?>

		<!-- OPT IN SECTION -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-xs-12 col-md-8">
					<p class="lead"> <?php echo $optin_text; ?> </p>
				</div><!-- end col -->
				
				<div class="col-xs-12 col-md-4">
					<button class="btn btn-success btn-lg btn-block" href="#" data-toggle="modal" data-target="#myModal">
						<?php echo $optin_button_text; ?>
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->