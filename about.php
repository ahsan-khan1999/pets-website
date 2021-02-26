<?php include('includes/header.php');?>
<?php include('connection.php'); ?>
	
<!-- <?php include('admin/conn.php')?> -->




<section class="about">
	<div class="container">
	<div class="aboutUS">	
			<div class="row">
				<div class="col-lg-12">
					<h2>About Us</h2>
					
					<hr />

				</div>

			</div>
			<div class="row">
				<div class="innerabout">
				<div class="col-lg-6">

					<h3> <?php print_r("$title") ?> <sub class="subtitle"><?php print_r("$subtittle"); ?></sub></h3>
					
					<!-- <hr /> -->
					<p><?php print_r("$description");?></p>
					
					<button type="button" class="btn success"><?php print_r("$button"); ?></button>

				</div>
				<div class="col-lg-6">
					<img class="img-responsive" src="<?php echo("$image"); ?>" alt="AA" />
				</div>
			</div>

			<!-- <div class="row">
				
				</div>
 -->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h4>Our Team</h4>
			</div>


		</div>
		<div class="row">
		<div class="col-lg-4">
		<img src="<?php print_r("$image1");?>" class="img-rounded" alt="No image">
							<h5><?php print_r("$name1");?></h5>
							<p><?php print_r("$description1");?></p>
				
			</div>

			

			<div class="col-lg-4">
				<img src="<?php print_r("$image2");?>" class="img-rounded" alt="No image">
				<h5><?php print_r("$name2");?></h5>
				<p><?php print_r("$description2");?></p>
			</div>
			
			
			<div class="col-lg-4">
				<img src="<?php print_r("$image3");?>" class="img-rounded" alt="No image">
				<h5><?php print_r("$name3");?></h5>
				<p><?php print_r("$description3");?></p>
			</div>
		</div>

<div class="abouext">
	<div class="row">
					<div class="col-lg-3">
						<div class="text-center">
						<img src="https://cdn3.iconfinder.com/data/icons/hands-set-1/84/13-64.png"></div>
						<h5>500+</h5>
						<p>Adopted Count</p>


					</div>
						<div class="col-lg-3">
						<div class="text-center">
						<img src="https://cdn3.iconfinder.com/data/icons/money-and-financial-1/32/donation_support_money_give_volunteer-64.png"></div>
						<h5>10000+</h5>
						<p>Donations</p>


					</div>
						<div class="col-lg-3">
						<div class="text-center">
						<img src="https://cdn4.iconfinder.com/data/icons/budicon-user-solid/25/group-64.png"></div>
						<h5>2000+</h5>
						<p>Clients</p>


					</div>
						<div class="col-lg-3">
						<div class="text-center">
						<img  src="https://cdn0.iconfinder.com/data/icons/back-to-school-basic-black-fill/404/Layer13-64.png" ></div>
						<h5>50+</h5>
						<p>Events</p>


					</div>

				</div>
</div>
</div>
</section>

<?php include('includes/footer.php') ;?>





<!-- Alcohol denat, Aqua, Glicerine, Triethanolamine, Carbomer, Oleum, Aloe Vera, Lavendula, Angustifolia Oil, Linalool, Limonene, Geraniol, Citronellon. -->