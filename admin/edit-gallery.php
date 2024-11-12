<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0) || $_SESSION['role'] != 'admin') {
	header('location:logout.php');
} else{

$sid=intval($_GET['id']);// get gallery id
if(isset($_POST['submit'])) {
   
    $image = mysqli_real_escape_string($con, $_POST['image']);
    
    // Retrieve current image path
    $result = mysqli_query($con, "SELECT image FROM gallery WHERE id='$sid'");
    $row = mysqli_fetch_assoc($result);
    $current_image = $row['image'];


    $image_uploaded = false;
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/images/gallery/" . $_FILES["image"]["name"]);			
			$location="assets/images/gallery/" . $_FILES["image"]["name"];
			$image_uploaded = true;
    }

    if($image_uploaded) {

    	// Delete the old image file if a new image is uploaded

        if (!empty($current_image) && file_exists("../".$current_image)) {
        	unlink("../" . $current_image);
           
        }
        $sql = "UPDATE gallery SET 
                   
                    image='$location'
                WHERE id='$sid'";
    } 

    if(mysqli_query($con, $sql)) {
        $msg = "Gallery Updated Successfully";
    } else {
        $msg = "Error updating gallery details: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Edit gallery Details</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/x-icon" href="../assets/favicon/favicon-16x16.png">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


</head>
<body>
	<div id="app">		
		<?php include('include/sidebar.php');?>
		<div class="app-content">

			<?php include('include/header.php');?>
			<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->

			<!-- end: TOP NAVBAR -->
			<div class="main-content" >
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Edit gallery Details</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Edit Gallery Details</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 style="color: green; font-size:18px; ">
									<?php if($msg) { echo htmlentities($msg);}?> </h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												
												<div class="panel-body">
													<?php $sql=mysqli_query($con,"select * from gallery where id='$sid'");
													while($data=mysqli_fetch_array($sql))
													{
														?>
														<h3>Gallery Image <?php echo htmlentities($data['id']);?></h3>
														
														<hr />
														<form role="form" name="adddoc" method="post"  onSubmit="return valid();" enctype="multipart/form-data">
															
																
															
															
																<div class="form-group">
			                                                        <label for="image">Image (Please provide only <span style="color: red">365x365 px</span>)</label>
			                                                        <input type="file" id="image" name="image" class="form-control">
			                                                        <?php if (!empty($data['image'])) { ?>
			                                                        <img src="../<?php echo htmlentities($data['image']); ?>" alt="medinova gallery Image" style="width: 150px; height: 80px;">
			                                                        <?php } ?>
			                                                    </div>




															<?php } ?>


															<button type="submit" name="submit"  class="btn btn-o btn-primary" id="updateButton" disabled>
																Update
															</button>
														</form>

														
													</div>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="panel panel-white">


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: BASIC EXAMPLE -->

					
					


					
					<!-- end: SELECT BOXES -->

				</div>
			</div>
		</div>
		<!-- start: FOOTER -->
		<?php include('include/footer.php');?>
		<!-- end: FOOTER -->
		
		<!-- start: SETTINGS -->
		<?php include('include/setting.php');?>
	
		<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="assets/js/main.js"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="assets/js/form-elements.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
		// Disable Update button until a file is selected
			document.getElementById('image').addEventListener('change', function() {
				var updateButton = document.getElementById('updateButton');
				if (this.files.length > 0) {
					updateButton.disabled = false;
				} else {
					updateButton.disabled = true;
				}
			});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>
<?php } ?>
