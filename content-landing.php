<?php 
	get_template_part('content', 'intro');
	get_template_part('content', 'donald');
 ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg-for-port">
	<div class="info-portfolio" style="background: transparent url(<?php echo CFS()->get('portfolio_image')?>) no-repeat scroll 50% 0%">

		<?php 
			 get_template_part('content', 'portfolio'); 
		?>

		<div style="clear:both"></div>
		
		 <?php 

		 	  get_template_part('content', 'services'); 
		 	  get_template_part('content', 'contact');
		 	  get_template_part('content', 'finals' );
		 ?>


	</div> <!-- info Portfolio  -->
</div>
