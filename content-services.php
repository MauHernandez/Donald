<div id="servicios" class="no-padding services">

	<?php $loop_services = CFS()->get('loop');?>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">

		<?php 

			foreach ($loop_services as $service) { ?>

				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 no-padding service" style="background:url(<?php echo $service['service_img'];?>) no-repeat scroll 0% 0%">

					<img class="" src="<?php echo $service['service_img_hover']; ?>" alt="">

					<div class="serv-title">
						<?php echo $service['service_tittle']; ?>
					</div> 

					<div class="content">
						<?php echo $service['service_text']; ?>
					</div>	
				</div>

			<?php }
			scrolling_effects();
		 ?>

	</div>
</div>