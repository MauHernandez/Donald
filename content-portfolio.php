<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 preporttext">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 borde"></div>
	<?php echo CFS()->get('portfolio_text');?>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 borde"></div>
</div>

<img class="brandtag" src="<?php echo get_stylesheet_directory_uri();?>/images/ido.png" alt="">

<div id="portafolio" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="port" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 center-div portfolio">

		<?php $galeria = CFS()->get('item');  
				pop_up();
				shuffle($galeria);
			if ( sizeof($galeria) > 3 ) {

				for ($i=0; $i < 3; $i++) { ?>

					<a class="pic-link"  id="img-<?php echo $i ?>" href="#pic-<?php echo $i?>" data-id="<?php echo $i?>">
						<?php if ($i == 0 ) { ?>
							<div class="pic no-padding col-xs-6 col-lg-10 col-md-10 ddiez" style="background: url(<?php echo $galeria[$i]['imagen'];?>)">
						<?php } if ($i == 2) { ?>
							<div class="pic no-padding col-xs-6 col-lg-8 col-md-8 docho" style="background: url(<?php echo $galeria[$i]['imagen'];?>)">
						<?php } if ($i == 1) { ?>
							<div class="pic no-padding col-xs-6 col-lg-4 col-md-4 dcuatro" style="background: url(<?php echo $galeria[$i]['imagen'];?>)">
						<?php } ?>
						<div class="pichover">
							<img class="vertical-center" src="<?php echo get_stylesheet_directory_uri();?>/images/hoverpic.png" alt="">
						</div>
					</div>
					</a>
					  <div id="pic-<?php echo $i?>" class="overlay">
					    <div class="popup">
					      <a class="close" href="#img-<?php echo $i ?>">&times;</a>
					        <div class="content">
					          	<img src="<?php echo $galeria[$i]['imagen'];?>" alt="">
					          	<div class="pop-up-caption">
					          		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 borde"></div>
								        <?php echo $galeria[$i]['caption']; ?>
							        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 borde"></div>
					          	</div>
					      </div>
					    </div>
					  </div>
				<?php } ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 caption-gallery">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 borde"></div>
						<?php echo CFS()->get('gal_des'); ?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 borde"></div>
				</div>
					
				<div id="my-thumbs-list" class="mThumbnailScroller" data-mts-axis="x" data-mts-type="click-50" data-mts-theme="buttons-in">
					  <ul>

				<?php for ($i=3; $i < sizeof($galeria); $i++) { ?>
						    <li>
						    	<a class="pic-link" id="img-<?php echo $i ?>" href="#pic-<?php echo $i?>" data-id="<?php echo $i ?>">
						    		<img src="<?php echo $galeria[$i]['imagen'];?>" />
						    		<div class="pichoverbar">
										<img class="vertical-center" src="<?php echo get_stylesheet_directory_uri();?>/images/hoverpic.png" alt="">
									</div>
							    </a>
							</li>

						    <div id="pic-<?php echo $i?>" class="overlay">
							    <div class="popup">
							      <a class="close" href="#img-<?php echo $i ?>">&times;</a>
							        <div class="content">

							            <img src="<?php echo $galeria[$i]['imagen'];?>" alt="">
							          	<div class="pop-up-caption">
							          		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 borde"></div>
										        <?php echo $galeria[$i]['caption']; ?>
									        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 borde"></div>
							          	</div>
							        	
							      </div>
							    </div>
							</div>
				<?php } ?>
					  </ul>
				</div>
			<?php } ?>
				
	</div><!-- Portfolio  --> 
</div>