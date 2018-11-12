<?php

	
	require_once('functions/function.php');
	needLogged();
	
	get_header();
	get_sidebar();
	get_breadcum();
	
	if(!empty($_POST)){
		$name=htmlentities($_POST['about_name'],ENT_QUOTES);
		$sub=htmlentities($_POST['about_sub'],ENT_QUOTES);
		$Web=htmlentities($_POST['Web'],ENT_QUOTES);
		$Web_sub=htmlentities($_POST['Web_sub'],ENT_QUOTES);
		$Misson=htmlentities($_POST['Misson'],ENT_QUOTES);
		$Misson_sub=htmlentities($_POST['Misson_sub'],ENT_QUOTES);
		$responsive=htmlentities($_POST['responsive'],ENT_QUOTES);
		$responsive_sub=htmlentities($_POST['responsive_sub'],ENT_QUOTES);
		$develop=htmlentities($_POST['develop'],ENT_QUOTES);
		$develop_sub=htmlentities($_POST['develop_sub'],ENT_QUOTES);
		$creative=htmlentities($_POST['creative'],ENT_QUOTES);
		$creative_sub=htmlentities($_POST['creative_sub'],ENT_QUOTES);
		$support=htmlentities($_POST['support'],ENT_QUOTES);
		$support_sub=htmlentities($_POST['support_sub'],ENT_QUOTES);
		
		$insert="INSERT INTO about_header (about_name,header_sub,Web_title,Web_subtitle,Misson_title, 	Misson_subtitle,Responsive_title,Responsive_subtitle,Development_title,Development_subtitle,Creative_title,Creative_subtitle,Support_title,Support_subtitle)
		VALUES('$name','$sub','$Web','$Web_sub','$Misson','$Misson_sub','$responsive','$responsive_sub','$develop','$develop_sub','$creative','$creative_sub','$support','$support_sub')";
		if(mysqli_query($con,$insert)){
			
			echo "about header successful!";
		}else{
			echo "about header faild faild please try again!";
		}
	}
	

?>

		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-9 heading_title">
						about header
					 </div>
					 <div class="col-md-3 text-right">
						<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>about header</a>
					</div>
					<div class="clearfix"></div>
				</div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">about name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="about_name">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">about subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="about_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Web title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="Web">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Web subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="Web_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label"> Misson title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="Misson">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label"> Misson subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="Misson_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Responsive title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="responsive">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Responsive subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="responsive_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Development title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="develop">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Development subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="develop_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Creative title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="creative">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Creative subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="creative_sub">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Support title</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="support">
					</div>
				  </div>
			  </div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="" class="col-sm-3 control-label">Support subtitle</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="support_sub">
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
       