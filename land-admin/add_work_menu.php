<?php

	
	require_once('functions/function.php');
	needLogged();
	
	get_header();
	get_sidebar();
	get_breadcum();
	
	if(!empty($_POST)){
		$name=htmlentities($_POST['menu_name'],ENT_QUOTES);
		
		$insert="INSERT INTO work_menu(menu_name)
		VALUES('$name')";
		if(mysqli_query($con,$insert)){
			
			echo " successful!";
		}else{
			echo " faild please try again!";
		}
	}
	

?>

		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-9 heading_title">
						work menue
					 </div>
					 <div class="col-md-3 text-right">
						<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>work menue</a>
					</div>
					<div class="clearfix"></div>
				</div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">menu name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="menu_name">
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
       