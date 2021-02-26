<?php include('includes/header.php') ;?>
<?php include('connection.php');?>
<section class="event">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Upcoming Events</h2>
					
				</div>

			</div>

			<div class="row">
				<!-- <div class="event2"> -->
				<div id="event2" class="col-lg-4">
					<img src="<?php print_r("$image_event1");?>" class="img-responsive">
					<div class="col-lg-3">
						<h2><sub>Aug</sub> <?php print_r("$date_event1");?></h2>
<!-- <sub class="subtitle"> -->
					</div>
					<div class="col-lg-9">
						<h5><?php print_r("$title_event1");?></h5>
						<!-- <p>VIRTUALLY TOGETHER IN 2021</p> -->
						<p style="font-size: 13px; font-weight: 800"><?php print_r("$subtitle_event1");?></p>
					</div>

				</div>

					<div id="event3" class="col-lg-4">
					<img src="<?php print_r("$image_event2");?>" class="img-responsive">
					<div class="col-lg-3">
						<h2><sub>Sep</sub> <?php print_r("$date_event2");?></h2>
<!-- <sub class="subtitle"> -->
					</div>
					<div class="col-lg-9">
						<h5><?php print_r("$title_event2");?></h5>
						<!-- <p>VIRTUALLY TOGETHER IN 2021</p> -->
						<p style="font-size: 13px; font-weight: 800"><?php print_r("$subtitle_event2");?></p>
					</div>



				</div>
	<div id="event4" class="col-lg-4">
					<img src="<?php print_r("$image_event3");?>" class="img-responsive">
					<div class="col-lg-3">
						<h2><sub>Dec</sub> <?php print_r("$date_event3");?></h2>
<!-- <sub class="subtitle"> -->
					</div>
					<div class="col-lg-9">
						<h5><?php print_r("$title_event3");?></h5>
						<!-- <p>VIRTUALLY TOGETHER IN 2021</p> -->
						<p style="font-size: 13px; font-weight: 800"><?php print_r("$subtitle_event3");?></p>
					</div>

					

				</div>





			</div>
				<!-- <div class="col-lg-4">
					<img src="">									
					<div class="col-lg-3"></div>
					<div class="col-lg-9"></div>
				</div>
				<div class="col-lg-4">
					<img src="">				
					<div class="col-lg-3"></div>
					<div class="col-lg-9"></div>
				</div> -->

			</div>
		</div>


	</section>
	<?php include('includes/footer.php') ;?>