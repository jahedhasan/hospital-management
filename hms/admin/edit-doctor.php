<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
	header('location:logout.php');
} else{

$did=intval($_GET['id']);// get doctor id
if(isset($_POST['submit'])) {
    $docspecialization = mysqli_real_escape_string($con, $_POST['Doctorspecialization']);
    $docname = mysqli_real_escape_string($con, $_POST['docname']);
    $doctorprofileinfo = mysqli_real_escape_string($con, $_POST['doctorprofileinfo']);
    $practiceDays = mysqli_real_escape_string($con, $_POST['practiceDays']);
    $docfees = mysqli_real_escape_string($con, $_POST['docfees']);
    $doccontactno = mysqli_real_escape_string($con, $_POST['doccontact']);
    $docemail = mysqli_real_escape_string($con, $_POST['docemail']);

    // Retrieve current image path
    $result = mysqli_query($con, "SELECT img FROM doctors WHERE id='$did'");
    $row = mysqli_fetch_assoc($result);
    $current_image = $row['img'];


    $image_uploaded = false;
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"assets/doctorImage/" . $_FILES["image"]["name"]);			
			$location="assets/doctorImage/" . $_FILES["image"]["name"];
			$image_uploaded = true;
    }

    if($image_uploaded) {

    	// Delete the old image file if a new image is uploaded
        if (!empty($current_image) && file_exists($current_image)) {
            unlink($current_image);
        }
        $sql = "UPDATE doctors SET 
                    specilization='$docspecialization', 
                    doctorName='$docname', 
                    doctorprofileinfo='$doctorprofileinfo', 
                    practiceDays='$practiceDays', 
                    docFees='$docfees', 
                    contactno='$doccontactno', 
                    docEmail='$docemail', 
                    img='$location' 
                WHERE id='$did'";
    } else {
        $sql = "UPDATE doctors SET 
                    specilization='$docspecialization', 
                    doctorName='$docname', 
                    doctorprofileinfo='$doctorprofileinfo', 
                    practiceDays='$practiceDays', 
                    docFees='$docfees', 
                    contactno='$doccontactno', 
                    docEmail='$docemail' 
                WHERE id='$did'";
    }

    if(mysqli_query($con, $sql)) {
        $msg = "Doctor Details updated Successfully";
    } else {
        $msg = "Error updating doctor details: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Edit Doctor Details</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
								<h1 class="mainTitle">Admin | Edit Doctor Details</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Edit Doctor Details</span>
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
												<div class="panel-heading">
													<h5 class="panel-title">Edit Doctor info</h5>
												</div>
												<div class="panel-body">
													<?php $sql=mysqli_query($con,"select * from doctors where id='$did'");
													while($data=mysqli_fetch_array($sql))
													{
														?>
														<h4><?php echo htmlentities($data['doctorName']);?>'s Profile</h4>
														<p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creationDate']);?></p>
														<?php if($data['updationDate']){?>
															<p><b>Profile Last Updation Date: </b><?php echo htmlentities($data['updationDate']);?></p>
														<?php } ?>
														<hr />
														<form role="form" name="adddoc" method="post"  onSubmit="return valid();" enctype="multipart/form-data">
															<div class="form-group">
																<label for="DoctorSpecialization">
																	Doctor Specialization
																</label>
																<select name="Doctorspecialization" class="form-control" required="required">
																	<option value="<?php echo htmlentities($data['specilization']);?>">
																		<?php echo htmlentities($data['specilization']);?></option>
																		<?php $ret=mysqli_query($con,"select * from doctorspecilization");
																		while($row=mysqli_fetch_array($ret))
																		{
																			?>
																			<option value="<?php echo htmlentities($row['specilization']);?>">
																				<?php echo htmlentities($row['specilization']);?>
																			</option>
																		<?php } ?>

																	</select>
																</div>

																<div class="form-group">
																	<label for="doctorname">
																		Doctor Name
																	</label>
																	<input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
																</div>


																<div class="form-group">
																	<label for="doctorprofileinfo">
																		Doctor Profile Information
																	</label>
																	<textarea name="doctorprofileinfo" class="form-control"><?php echo htmlentities($data['doctorprofileinfo']);?></textarea>
																</div>
																<div class="form-group">
																	<label for="practiceDays">
																		Practice Days
																	</label>
																	<textarea name="practiceDays" class="form-control"><?php echo htmlentities($data['practiceDays']);?></textarea>
																</div>
																<div class="form-group">
																	<label for="fess">
																		Doctor Consultancy Fees
																	</label>
																	<input type="text" name="docfees" class="form-control" required="required"  value="<?php echo htmlentities($data['docFees']);?>" >
																</div>

																<div class="form-group">
																	<label for="fess">
																		Doctor Contact no
																	</label>
																	<input type="text" name="doccontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
																</div>

																<div class="form-group">
																	<label for="fess">
																		Doctor Email
																	</label>
																	<input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
																</div>
															
																<div class="form-group">
			                                                        <label for="image">Doctor Image (Only JPG, JPEG and PNG files are allowed.)</label>
			                                                        <input type="file" name="image" class="form-control">
			                                                        <?php if (!empty($data['img'])) { ?>
			                                                        <img src="<?php echo htmlentities($data['img']); ?>" alt="Doctor Image" style="width: 100px; height: 100px;">
			                                                        <?php } ?>
			                                                    </div>




															<?php } ?>


															<button type="submit" name="submit" class="btn btn-o btn-primary">
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
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>
<?php } ?>
