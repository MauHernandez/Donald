
<div id="donald" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 donald">
	<?php  $loop = CFS()->get('facts_donald'); 
		effects_donald();
	?>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 facts">
		<?php for ($i=0; $i < 3 ; $i++) { ?>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 fact">
				<div class="fori vertical-center">
					<i id="<?php echo $i?>" class="fa fa-circle "></i>
				</div>
				<?php echo $loop[$i]['info_facts']; ?>
			</div>
		<?php } ?>
	</div>

	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pic" style="background: url(<?php echo CFS()->get('img_donald_fondo')?>) no-repeat scroll 0% 0%">
		<div class="vertical-center donaldbio">
			<img class="picsobre" src="<?php echo CFS()->get('img_donald'); ?>" alt="Donald Fotografo">
		</div>
	</div>

	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 facts" >
		<?php for ($i=3; $i < 6 ; $i++) { ?>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 fact">
				<div class="fori vertical-center">
					<i id="<?php echo $i?>" class="fa fa-circle "></i>
				</div>
				<?php echo $loop[$i]['info_facts']; ?>
			</div>
		<?php } ?>
	</div>
	
	<div id="background-shade">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 center-div">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 border top-border"></div>
		</div>
		<div class="relieve">
			<div class="bg" style="background: transparent url(<?php echo CFS()->get('relieve_img')?>)  no-repeat scroll 0% 0% / 101% auto">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 info">
					<?php echo CFS()->get('relieve_text');?>
				</div>
			</div>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 center-div">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 border bottom-border"></div>
		</div>
	</div>

	

</div> 