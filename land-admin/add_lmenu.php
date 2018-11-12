<?php

	
	require_once('functions/function.php');
	needLogged();
	
	get_header();
	get_sidebar();
	get_breadcum();
	
	if(!empty($_POST)){
		$name=htmlentities($_POST['left_menu'],ENT_QUOTES);
		$link=htmlentities($_POST['left_link'],ENT_QUOTES);
		$insert="INSERT INTO menu_left(menu_name,menu_link)
		VALUES('$name','$link')";
		if(mysqli_query($con,$insert)){
			
			echo "menu successful!";
		}else{
			echo "menu faild please try again!";
		}
	}
	

?>

		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-9 heading_title">
						all right menu
					 </div>
					 <div class="col-md-3 text-right">
						<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> right menu</a>
					</div>
					<div class="clearfix"></div>
				</div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">menu name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="left_menu">
					</div>
				  </div>
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">menu link</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="left_link">
					</div>
				  </div> 
			  </div>
			  <div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">send</button>
			  </div>
			</div>
			</form>
		</div><!--col-md-12 end-->
<?php
	
	get_footer();
	
?>  
       