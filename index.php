<?php

	require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>zhakkash</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<link rel="stylesheet" href="css/responsive.css" media="all" />
	<link rel="icon" href="img/logo-2.png" media="all" />

   
  </head>
  <body>
  
		<!-- start menu 
			<div class="preloader_min">
				<div class="preloader loading">
				  <span class="slice"></span>
				  <span class="slice"></span>
				  <span class="slice"></span>
				  <span class="slice"></span>
				  <span class="slice"></span>
				  <span class="slice"></span>
				</div>
			</div>
		!-->
  
		<div class="scroll_top">
			<i class="fa fa-arrow-up"></i>
		</div>
  
		
	<!-- start menu -->
		<nav class="navbar navbar-expand-lg navbar-expand-md  header_area " style="position:fixed;" id="navbar-example">
			<div class="container">
					<div class="logo">
						<a class="navbar-brand" href="#"><img src="img/logo-2.png" alt="" /></a>
					</div>
				  <div class="logo_phone">
					<a class="navbar-brand" href="#"><img src="img/logo-2.png" alt="" /></a>
				  </div>
				  <a class="navbar-toggler "  data-toggle="collapse" data-target="#header_menu"  aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon icon_bar"><i class="fa fa-bars"></i></span>
				  </a>

				  <div class="collapse navbar-collapse" id="header_menu">
					<ul class="navbar-nav mr-auto nav nav-pills">
					  <?php
					  
						 $sel="SELECT * FROM menu_left ORDER BY left_id DESC LIMIT 0,3";
						$Q=mysqli_query($con,$sel);
						while ($data=mysqli_fetch_assoc($Q)){
					  ?>
					  
						<li class="nav-item">
							<a class="nav-link" href="<?=$data['menu_link '];?>"><?=$data['menu_name'];?></a>
						</li>
					  
					<?php }?>
					
					</ul>
					<ul class="navbar-nav ml-auto">
					 <?php
					  
						 $sel="SELECT * FROM menu_right ORDER BY right_id DESC LIMIT 0,3";
						$Q=mysqli_query($con,$sel);
						while ($data=mysqli_fetch_assoc($Q)){
					  ?>
					  
						<li class="nav-item">
							<a class="nav-link" href="<?=$data['menu_link '];?>"><?=$data['menu_name'];?></a>
						</li>
					  
					<?php }?>
					
					 
					</ul>
				  </div>
			</div>
		</nav>
 <!-- menu end -->
   <!-- start slider -->
	 <section id="slider_area">
		 <i class="fa fa-long-arrow-left prevbtn" aria-hidden="true"></i>
         <i class="fa fa-long-arrow-right  nxtbtn" aria-hidden="true"></i>

        <div class="slider text-center">
		<?php
			
			$sel="SELECT * FROM web_banners ORDER BY ban_id DESC LIMIT 0,3";
			$q=mysqli_query($con,$sel);
			while($data=mysqli_fetch_assoc($q)){
			
		?>
            <div class="slider_item" style="background:url(land-admin/uploads/<?= $data['ban_image'];?>); background-position:center;background-size:cover;">
               <div class="container">
					<div class="carousel-caption">
						<h2><?= $data['ban_title'];?></h2>
						<p><?= $data['ban_sub_title'];?></p>
						<div class="button">
							<a class="learn_btn" href="<?= $data['ban_btn_url'];?>"><?= $data['ban_btn_text'];?></a> 
						</div>
					</div>
			   </div>
            </div>
			<?php } ?>
        </div>
    </section>
   <!-- slider end -->
	
	
    <!-- start about us -->
   
		<div class="about_area" id="about_area">
			<div class="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="about_top_text text-center">
								<?php 
								
									$about="SELECT * FROM about_header ORDER BY about_id DESC LIMIT 0,3";
									$asq=mysqli_query($con,$about);
									$adata=mysqli_fetch_assoc($asq);
								 ?>
									
								<h2><?=$adata['about_name'];?></h2>
								<p><?=$adata['header_sub'];?></p>
							</div>
						</div>
					</div>
					<div class="about_bottom_text">
						<div class="row">
							<div class=" col-md-5 col-lg-5 m-auto">
								<div class="about_left">
									<div class="single_about_left">
										<a href=""><i class="fa fa-globe"></i></a>
										<h2><?=$adata['Web_title'];?></h2>
										<p><?=$adata['Web_subtitle'];?></p>
									</div>
									<div class="single_about_left">
										<a href=""><i class="fa fa-globe"></i></a>
										<h2><?=$adata['Misson_title'];?></h2>
										<p><?=$adata['Misson_subtitle'];?></p>
									</div>
									<div class="single_about_left">
										<a href=""><i class="fa fa-globe"></i></a>
										<h2><?=$adata['Responsive_title'];?></h2>
										<p><?=$adata['Responsive_subtitle'];?></p>
									</div>
								</div>
							</div>
							
								<div class=" col-md-2 col-lg-2">
									<div class="about_middle"></div>
								</div>
								
							<div class=" col-md-5 col-lg-5 m-auto">
								<div class="about_right">
										<div class="single_about_right">
											<a href=""><i class="fa fa-diamond"></i></a>
											<h2><?=$adata['Development_title'];?></h2>
											<p><?=$adata['Development_subtitle'];?></p>
										</div>
										<div class="single_about_right">
											<a href=""><i class="fa fa-diamond"></i></a>
											<h2><?=$adata['Creative_title'];?></h2>
											<p><?=$adata['Creative_subtitle'];?></p>
										</div>
										<div class="single_about_right">
											<a href=""><i class="fa fa-diamond"></i></a>
											<h2><?=$adata['Support_title'];?></h2>
											<p><?=$adata['Support_subtitle'];?></p>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   
   
   
	<!-- end about us  -->
	<!-- start counter area -->
	
	<div class="counter_area text-center" id="counter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="single_counter">
						<div class="counter_icon">
							<a href=""><i class="fa fa-free-code-camp"></i></a>
						</div>
						<span class="counter">500</span>
						<h2>total employee</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="single_counter">
						<div class="counter_icon">
							<a href=""><i class="fa fa-diamond"></i></a>
						</div>
						<span class="counter">2000</span>
						<h2>project</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="single_counter">
						<div class="counter_icon">
							<a href=""><i class="fa fa-reddit-alien"></i></a>
						</div>
						<span class="counter">1500</span>
						<h2>expert team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="single_counter">
						<div class="counter_icon">
							<a href=""><i class="fa fa-users"></i></a>
						</div>
						<span class="counter">5000</span>
						<h2>client</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
   
	<!--  end counter area -->
	<!-- start our work area -->
	<div class="our_work_area" id="our_work">
		<div class="work_area">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="work_top_text">
							<h2>Our work</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipitvoluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="filter_menu ">
				<div class="container">
					<div class="row justify-content-center text-center">
						<ul class="simplefilter">
							<li class="active" data-filter="all">All</li>
							<?php
							
								$selr="SELECT * FROM work_menu";
								$menu=mysqli_query($con,$selr);
								while($wmenu=mysqli_fetch_assoc($menu)){
							
							?>
								<li data-filter="<?=$wmenu['manu_id']?>"><?=$wmenu['menu_name']?></li>
								
							<?php } ?>
						<!---	<li data-filter="2">graphics</li>
							<li data-filter="3">develops</li>
							<li data-filter="4">appes</li>
							<li data-filter="5">photos</li>--->
						</ul>
					 </div>
				</div>
			</div>
			
			<div class="row work_image mx-0 filtr-container">
			
				<?php
				
					$kgal="SELECT * FROM work_gallery ORDER BY work_id DESC LIMIT 0,8";
					$res=mysqli_query($con,$kgal);
					while($kgals=mysqli_fetch_assoc($res)){
					
				?>
			
				<div class="single_image col-lg-3 col-md-3 px-0  filtr-item" data-category="<?=$kgals['manu_id'];?>">
					<img src="land-admin/uploads/<?=$kgals['work_image'];?>" alt="" />
					<div class="overlay">
						<h3><?=$kgals['work_title']?></h3>
						<p><?=$kgals['work_subtitle']?></p>
						<a href="land-admin/uploads/<?=$kgals['work_image'];?>" class="lightBox" ><i class="fa fa-eye"></i></a><a href=""><i class="fa fa-link"></i></a>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div>
   <!-- end our work area  -->
   <!-- start our service area -->
   <div class="our_service_area" id="service_area">
		<div class="our_service">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-lg-12 col-lg-12 col-md-12 col-sm-12">
						<div class="service_top_text text-center">
							<h2> ABOUT US</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
						</div>
						<div class="row bottom_services ">
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
									<i class="fa fa-diamond"></i>
									<h3>web design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
								<i class="fa fa-database"></i>
									<h3>web histing</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
									<i class="fa fa-lightbulb-o"></i>
									<h3>web development</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
									<i class="fa fa-code"></i>
									<h3>graphics design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
									<i class="fa fa-cubes"></i>
									<h3>web design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 plr">
								<div class="single_item_service">
									<i class="fa  fa-snowflake-o"></i>
									<h3>web design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   </div>
   
   <!-- end our service area -->
   
   <!-- start our skill area -->
	<div class="our_skill_area">
		<div class="our_skill">
				<div class="row mx-0">
					<div class="col-md-6">
						<div class="skill_left">
							<div class="left_text">
								<h2>Some Of Our Skills</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 progress_bar_bg">
					
						<div class="skill_right">
							<div class="right_skill_bars">
							
								<ul>
									<li>
										<div class="progressbar-title">
										<?php 
													
											$sel="SELECT * FROM skill_parsent ORDER BY skill_id DESC";
											$QRY=mysqli_query($con,$sel);
											$dataa=mysqli_fetch_assoc($QRY);
										?>
										  <h3><?=$dataa['skill_name']?></h3>
											
										<?php
											
											
											
											
										
										?>
										  <span class="percent" id="html-pourcent"></span>
										</div>
										<div class="bar-container">
										  <span class="progressbar progressred" id="progress-html"></span>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
   
   
   <!-- end our skill area -->
   
   <!-- start our team area -->
	
	<div class="our_team_area" id="team_area">
		<div class="our_team">
			<div class="container">
				<div class="row mx-0">
					<div class="col-lg-12 text-center">
						<div class="team_top_text">
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>						
						</div>
					</div>
				</div>
						<div class="row team">
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/t1.jpg" alt="" />
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/t2.jpg" alt="" />
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/t1.jpg" alt="" />
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/team_4.jpg" alt="" />
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/t1.jpg" alt="" />
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="single_team">
									<img src="img/t3.jpg" alt="" />
								</div>
							</div>
						</div>
					<div class="row mx-0 py-5 justify-content-center">
						<div class="col-lg-10 ">
						<div class="tean_talk ">
							<div class="single_team_talk">
								<h3>HERMAN MILLER</h3>
								<h4>Web designer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.</p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="single_team_talk">
								<h3>sakeba irin</h3>
								<h4>Web Developer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate </p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="single_team_talk">
								<h3>HERMAN MILLER</h3>
								<h4>graphics designer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.</p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="single_team_talk">
								<h3>sakeba aney</h3>
								<h4>Web Developer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate .</p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="single_team_talk">
								<h3>HERMAN MILLER</h3>
								<h4>wordpress Developer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.</p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
							<div class="single_team_talk">
								<h3>sajal sardar </h3>
								<h4>Web Developer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.</p>
								<div class="icon_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>
		</div>
	</div>
   
   <!-- end our team area -->
   
   <!-- start feedback area -->
   
	<div class="feedback_area">
		<div class="feedback py-5">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12" >
						<div class="feedback_top_text">
							<h2>feedback</h2>
						</div>
						<div class="bottom_text">
							<div class="single_bottom_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequuntur odio perspiciatis eos itaque, recusandae repellat assumenda ratione maiores officia eveniet amet fugit repellendus enim culpa distinctio, adipisci atque molestiae?</p>
								<h3>smith, <span>client</span></h3>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="single_bottom_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequuntur odio perspiciatis eos itaque, recusandae repellat assumenda ratione maiores officia eveniet amet fugit repellendus enim culpa distinctio, adipisci atque molestiae?</p>
								<h3>smith, <span>client</span></h3>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   
   <!-- end feedback area -->
   
   
   <!-- start plans area  -->
   
   <div class="plans_area" id="plans_area">
		<div class="plans">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="plan_top_text">
						<h2>OUR PLANS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
						</div>
					</div>
				</div>
				<div class="row bottom_plans text-center">
					<div class="col-md-6 col-lg-3">
						<div class="single_plans">
							<div class="plans_table">
								<h2>STANDARed</h2>
								<h3>$ 10 <span>Per Month</span></h3>
								<p>10 GB Disk Space</p>
								<p>100 GB Monthly Bandwith</p>
								<p>30 Email Accounts</p>
								<p>Unlimited Subdomains</p>
								<p>24/7 Support</p>
								<a href="#">buy now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="single_plans">
							<div class="plans_table">
								<h2>business</h2>
								<h3>$ 20 <span>Per Month</span></h3>
								<p>10 GB Disk Space</p>
								<p>100 GB Monthly Bandwith</p>
								<p>30 Email Accounts</p>
								<p>Unlimited Subdomains</p>
								<p>24/7 Support</p>
								<a href="#">buy now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="single_plans">
							<div class="plans_table">
								<h2>premium</h2>
								<h3>$ 50 <span>Per Month</span></h3>
								<p>10 GB Disk Space</p>
								<p>100 GB Monthly Bandwith</p>
								<p>30 Email Accounts</p>
								<p>Unlimited Subdomains</p>
								<p>24/7 Support</p>
								<a href="#">buy now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="single_plans">
							<div class="plans_table">
								<h2>ultimate</h2>
								<h3>$ 100 <span>Per Month</span></h3>
								<p>10 GB Disk Space</p>
								<p>100 GB Monthly Bandwith</p>
								<p>30 Email Accounts</p>
								<p>Unlimited Subdomains</p>
								<p>24/7 Support</p>
								<a href="#">buy now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   </div>
   
   <!-- start plans area -->
   <!-- start video area -->
	<div class="video_area">
		<div class="video  text-center">
			<div class="container">
				<div class="row">
					<div class="video_icon ">
						<i data-toggle="modal" data-target=".bs-example-modal-lg" class="fa fa-youtube-play"></i>
					</div>
				</div>
				<!-- video modal -->
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						 
						<div class="modal-content ">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">my dream</h4>
							 </div>
						 <div class="modal-body video_modal">
							<iframe src="https://www.youtube.com/embed/2gox9hrXel4" ></iframe>
						  </div>
						</div>
					</div>
				</div>
			<!-- video modal -->
			</div>
		</div>
	</div>
   <!-- end video area -->
   <!-- start blog area -->
		<div class="our_blog_area" id="blog_area">
			<div class="our_blog">
				<div class="container">
					<div class="row">
						<div class="blog_top_text text-center">
							<h2>OUR Blog</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
						</div>
					</div>
					<div class="row blog_slide">
							<div class="col-lg-4 col-md-6 blog">
								<div class="single_blog">
									<a href="#"><img src="img/blog-1.jpg" alt=""></a>
									<h2>blog post title here</h2>
									<h3>by <span>admin</span> December 30, 2016. at 11:00 AM</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
									<a class="more" href="#">read more..</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 blog">
								<div class="single_blog">
									<a href="#"><img src="img/blog-1.jpg" alt=""></a>
									<h2>blog post title here</h2>
									<h3>by <span>admin</span> December 30, 2016. at 11:00 AM</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
									<a class="more" href="#">read more..</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 blog">
								<div class="single_blog">
									<a href="#"><img src="img/blog-3.jpg" alt=""></a>
									<h2>blog post title here</h2>
									<h3>by <span>admin</span> December 30, 2016. at 11:00 AM</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
									<a class="more" href="#">read more..</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 blog">
								<div class="single_blog">
									<a href="#"><img src="img/blog-3.jpg" alt=""></a>
									<h2>blog post title here</h2>
									<h3>by <span>admin</span> December 30, 2016. at 11:00 AM</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
									<a class="more" href="#">read more..</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	
    <!-- end blog area -->
	
    <!-- start partner area -->
		<div class="our_partner_area">
			<div class="partner_area">
				<div class="container">
					<div class="row partner_slider mx-0">
						<div class="col-md-2">
							<img src="img/index.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/ind2ex.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/ind3ex.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/ind2ex.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/ind3ex.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/index.png" alt="" />
						</div>
						<div class="col-md-2">
							<img src="img/ind2ex.png" alt="" />
						</div>
						
					</div>
				</div>
			</div>
		</div>
    <!-- start partner area -->
	
	
    <!-- start contact area -->
	
		<div class="our_contact_area" id="our_contact_area">
			<div class="contact_area">
				<div class="contact_area">
					<div class="container">
					<div class="row contact1_text mx-0">
						<div class="col-lg-12 px-0">
							<div class="contact_top_text text-center">
								<h2>contact us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
							</div>
						</div>
					</div>
					</div>
					<div class="row our_contact mx-0">
						<div class="col-lg-6 px-0 mapppp">
							<div class="contact_left">
								<div id="map" class="map_part"></div>
							</div>
						</div>
						<div class="col-lg-6 px-0">
							<div class="right_right">
							<div class="contact_right text-center">
								<h2>get in touch</h2>
								
								<?php
										if(!empty($_POST)){
											$name=htmlentities($_POST['name'],ENT_QUOTES);
											$email=htmlentities($_POST['email'],ENT_QUOTES);
											$sub=htmlentities($_POST['submess'],ENT_QUOTES);
											$mess=htmlentities($_POST['mess'],ENT_QUOTES);
											
											if(!empty($name)){
												$insert="INSERT INTO  web_contactus(conus_name,conus_email,conus_sub,conus_mess)VALUES('$name','$email','$sub','$mess')";
												if(mysqli_query($con,$insert)){
													echo "message send successful!";
												}else{
													echo"message send faild!";
												}
											}else{
												echo "enter your name!";
											}
										}
									?>
								
								
								<form action="" method="post">
									<div class="row mx-0">
										<div class="col-md-6 name">
											<div class="form-group">
												<input type="text" class="form-control"  name="name" placeholder="name" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control email"  name="email" placeholder="email"/>
											</div>
										</div>
									</div>
								  <div class="form-group">
									<input type="text" class="form-control" name="submess" placeholder="SUBJECT"/>
								  </div>
								  <div class="form-group">
									<textarea class="form-control area_text" name="mess" cols="30" rows="10" placeholder="MESSAGE"></textarea>
								  </div>
								  <button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	
	
    <!-- end contact area -->
	
    <!-- start footer area -->
	
		<footer>
			<div class="footer_area py-5">
				<div class="footer text-center">
					<div class="container">
						<div class="row footer_text">
							
							<div class="col-lg-12">
								<div class="footer_logo">
									<a class="" href=""><img src="img/logo-2.png" alt="" /></a>
								</div>
							</div>
								
						</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="footer_left">
									<p><i class="fa fa-home"></i>
									Momtaz Plaza (4th Floor)
									House#7, Road#4, Dhanmondi
									Dhaka-1205. Bangladesh</p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="footer_mid">
										<p><i class="fa fa-volume-control-phone"></i>+880 1624666000</p> 
										<p><i class="fa fa-volume-control-phone"></i>+880 1624888444</p>	
									</div>
								</div>
								<div class="col-lg-4  ">
									<div class="footer_right">
										<a href=""><i class="fa fa-envelope"></i>cit.info@gamil.com</a>
									</div>
								</div>
							</div>
						<div class="row">
							<div class="col-lg-12">
							<?php 
							
								$sels="SELECT * FROM web_socialmedia WHERE sm_id='1'";
								$Q=mysqli_query($con,$sels);
								$social=mysqli_fetch_assoc($Q);
								
							?>
								<div class="footer_icon">
									<a href="<?= $social['sm_facebook'];?>"><i class="fa fa-facebook"></i></a>
									<a href="<?= $social['sm_twitter'];?>"><i class="fa fa-twitter"></i></a>
									<a href="<?= $social['sm_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
									<a href="<?= $social['sm_google'];?>"><i class="fa fa-google"></i></a>
									<a href="<?= $social['sm_behance'];?>"><i class="fa fa-behance"></i></a>
									<a href="<?= $social['sm_behance'];?>"><i class="fa fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	</footer>
	
    <!-- end footer area -->
   
   
   <script src="js/jquery-1.12.4.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdq3B2pNW6tzShvaVQ1TDmon1dBSw0KtY"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/controls.js"></script>
   <script src="js/jquery.filterizr.min.js"></script>
   <script  src="js/script.js" ></script>
   
   
   <script>
		$('body').scrollspy({ target: '#navbar-example' })
   </script>
  
   
   
   
   
  </body>
</html>