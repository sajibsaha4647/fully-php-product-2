<?php

	
	require_once('functions/function.php');
	needLogged();
	
	get_header();
	get_sidebar();
	get_breadcum();
	
	if(!empty($_POST)){
		$image=$_FILES['pic'];
		$imageName="user-".time().rand(100000,1000000)."-".rand(10000,9999).pathinfo($image['name'],PATHINFO_EXTENSION);
		$work=htmlentities($_POST['work'],ENT_QUOTES);
		$menu=htmlentities($_POST['menuid'],ENT_QUOTES);
		$work_sub=htmlentities($_POST['work_sub'],ENT_QUOTES);
		$insert="INSERT INTO work_gallery (work_image,work_title,manu_id,work_subtitle)
		VALUES('$imageName','$work','$menu','$work_sub')";
		if(mysqli_query($con,$insert)){
			move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
			echo " successful!";
		}else{
			echo " faild please try again!";
		}
	}
	

?>

		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-9 heading_title">
						work gallery
					 </div>
					 <div class="col-md-3 text-right">
						<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>work gallery</a>
					</div>
					<div class="clearfix"></div>
				</div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">image</label>
					<div class="col-sm-8">
					  <input type="file" name="pic">
					</div>
				  </div>
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">work title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="work">
					</div>
				  </div>
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">work subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="work_sub">
					</div>
				  </div>
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">menu id</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="menuid">
					</div>
				  </div>
			  </div>
			  <div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">change</button>
			  </div>
			</div>
			</form>
		</div><!--col-md-12 end-->
<?php
	
	get_footer();
	
?>  
       