<?php

	require_once('functions/function.php');
	needLogged();
	get_header();
	get_sidebar();
	get_breadcum();
	
	$sels="SELECT * FROM web_socialmedia WHERE sm_id='1'";
	$Q=mysqli_query($con,$sels);
	$social=mysqli_fetch_assoc($Q);
	
	if(!empty($_POST)){
		$fb=$_POST['facebook'];
		$twi=$_POST['twitter'];
		$link=$_POST['linkdin'];
		$google=$_POST['google'];
		$behance=$_POST['behance'];
		$youtube=$_POST['youtube'];
		
		$update="UPDATE web_socialmedia SET sm_facebook='$fb',sm_twitter='$twi',sm_linkedin='$link',sm_google='$google',sm_behance='$behance',sm_youtube='$youtube'";
		if(mysqli_query($con,$update)){
			
			header('location: social-media.php');
		}
	}
	
?>

	<div class="col-md-12">
		<form class="form-horizontal" action="" method="post">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					social media
				 </div>
				 <div class="col-md-3 text-right">
					<a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>add</a>
				</div>
				<div class="clearfix"></div>
			</div>
		  <div class="panel-body">
			   <div class="col-md-6" >
					<form class="form" action="" method="post">
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
						  <input type="text" class="form-control" name="facebook" value="<?= $social['sm_facebook'];?>">
						</div>
					  </div>
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
						  <input type="text" class="form-control" name="twitter" value="<?= $social['sm_twitter'];?>">
						</div>
					  </div>
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
						  <input type="text" class="form-control" name="linkdin" value="<?= $social['sm_linkedin'];?>">
						</div>
					  </div>
					</form>
			   </div>
			   <div class="col-md-6">
					<form class="form">
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-google"></i></div>
						  <input type="text" class="form-control" name="google" value="<?= $social['sm_google'];?>">
						</div>
					  </div>
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-behance"></i></div>
						  <input type="text" class="form-control" name="behance" value="<?= $social['sm_behance'];?>">
						</div>
					  </div>
					  <div class="form-group">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-youtube"></i></div>
						  <input type="text" class="form-control" name="youtube" value="<?= $social['sm_youtube'];?>">
						</div>
					  </div>
					</form>
			   </div>
		  </div>
		  <div class="panel-footer text-center">
			<button class="btn btn-sm btn-primary">UPDATE</button>
		  </div>
		</div>
		</form>
	</div><!--col-md-12 end-->
	
<?php
	
	get_footer();
?>