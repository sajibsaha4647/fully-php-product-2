 <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="uploads/<?= $_SESSION['photo']?>"/>
                    <h4><?= $_SESSION['name']?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<?php 
						if($_SESSION['role']==1){
					?>
                    <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
						<?php } ?>
					<?php 
						if($_SESSION['role']<=2){
					?>
                    <li><a href="add-banner.php"><i class="fa fa-gamepad"></i> Banner</a></li>
					<?php } ?>
                    <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="add_lmenu.php"><i class="fa fa-cube"></i> left menu</a></li>
                    <li><a href="add_rmenu.php"><i class="fa fa-cube"></i> right menu</a></li>
					<li><a href="add_about_header.php"><i class="fa fa-cube"></i> about header</a></li>
					<li><a href="add_work_menu.php"><i class="fa fa-cube"></i> work menu</a></li>
					<li><a href="add-skillbar.php"><i class="fa fa-cube"></i> skillbar</a></li>
					<li><a href="add_work_gallery.php"><i class="fa fa-cube"></i> work gallery</a></li>
                    <li><a href="social-media.php"><i class="fa fa-cubes"></i> social media</a></li>
                    <li><a href="all-message.php"><i class="fa fa-comments"></i> contact message</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div><!--sidebar end-->