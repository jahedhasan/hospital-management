
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
    $name=$_POST['fullname'];
    $email=$_POST['emailid'];
    $mobileno=$_POST['mobileno'];
    $dscrption=$_POST['description'];
    $query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
    echo "<script>alert('Your information succesfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Feni Medinova Hospital </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="newassets/css/style.css">
</head>

<body>

 <header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Feni <strong>MEDINOVA</strong> Hospital </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">Department</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="hms/admin">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header> 

<!-- ################# Header Starts Here#######################--->
     <!--  <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;"><img src="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-8 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </header>    -->
    <!-- ################# Slider Starts Here#######################--->
    <div class="slider-detail mt-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/h1.jpeg" alt="First slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Feni Medinova Specialized Hospital </h5>
                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/H2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">we provide quality service</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/H3.jpg" alt="Third slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">we provide quality service</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/H4.jpg" alt="Fourth slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">we provide quality service</h5>
                    </div>
                </div>    
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area" style="margin-top:15px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>CALL FOR DOCTOR APPOINTMENT</h3>
              <a class="sus-btn" href="tel:01842101211"><i class="fa fa-phone" ></i> 01842-101211</a> 
              <a class="sus-btn" href="tel:01842101211"><i class="fa fa-phone" ></i> 01842-101211</a>
          </div>
      </div>
  </div>
</div>
</div><!-- End Suscribe Section -->
<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="newassets/image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Feni Medinova Hospital is one of the best private medical service centers in Feni.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!--  ************************* Logins ************************** -->

   <!--   <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

<h2 style="font-size: 38px;font-family:times new roman; text-align: center; margin-bottom: 20px;"><b>Logins</b></h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/new-user.jpg" height="200px" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click  Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/d1.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/a1.jpg" height="200px" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>   -->

    <!-- ################# Our Departments Starts Here#######################--->
<!--     
CCU
HDU 
NICU 
dialysis 
MRI
Pathology 
Dental Unit 
OT
Digital LAB 
Pharmacy 
X-ray -->

<section id="services" class="key-features department" style="margin-top: -50px">
    <div class="container">
        <h1 class="heading"> our <span>Departments</span> </h1>
        <!-- <div class="inner-title">
            <h2>Our Departments</h2>
            <p>Explore some of our key features below</p>
        </div> -->

        <div class="row">
            <!-- Existing key features -->
            <div class="col-lg-4 col-md-6">
                <div class="single-key">
                    <i class="fas"><img src="assets/icon/icu.png" height="45px" width="45px" /></i>
                    <h5>CCU</h5>
                    <p>Specialized care for heart-related issues.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-key">
                    <i class="fas fa-heartbeat"></i>
                    <h5>HDU</h5>
                    <p>Comprehensive orthopedic services for bone health.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-key">
                 <i class="fa"><img src="assets/icon/monitor.png" height="45px" width="45px" /></i>
                 <h5>NICU</h5>
                 <p>Expert care for neurological disorders.</p>
             </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-key">
                <!-- <i class="fas fa-pills"></i> -->
                <i class="fas"><img src="assets/icon/dialysis.png" height="45px" width="45px" /></i>
                <h5>Dialysis</h5>
                <p>Innovative pharmaceutical developments.</p>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="single-key">
                <i class="fas fa-medkit"></i>
                <h5>MRI</h5>
                <p>Providing top-notch medical treatments for your well-being.</p>
            </div>
        </div>

        <!-- Additional key features -->
        <div class="col-lg-4 col-md-6">
            <div class="single-key">
                <i class="fas fa-microscope"></i>
                <h5>Pathology</h5>
                <p>Exploring genetic solutions for personalized healthcare.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="single-key">
                <i class="fas fa-tooth"></i>
                <h5>Dental Unit</h5>
                <p>Comprehensive dental care for a healthy smile.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="single-key">
             <i class="fas fa-procedures"></i>
             <h5>OT</h5>
             <p>Advancing healthcare through cutting-edge research.</p>
         </div>
     </div>

     <div class="col-lg-4 col-md-6">
        <div class="single-key">
         <i class="fas fa-vial"></i>
         <h5>Digital LAB</h5>
         <p>Advancing healthcare through cutting-edge research.</p>
     </div>
 </div>
 <div class="col-lg-4 col-md-6">
    <div class="single-key">
     <i class="fas fa-x-ray"></i>
     <h5>X-ray</h5>
     <p>Advancing healthcare through cutting-edge research.</p>
 </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="single-key">
     <i class="fas fa-pills"></i>

     <h5>Pharmacy</h5>
     <p>Advancing healthcare through cutting-edge research.</p>
 </div>
</div>
</div>
</div>
</section>


<!-- doctors section starts  -->


<!--        <div class="panel-body" style = "background-color:;">
                <?php
                   // $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
                   // while($fetch = $query->fetch_array())
                {
                ?>
                   <div id = "position" style="overflow:hidden">
                       <div>
                       <img src = "admin/<?php //echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
                       <img src = "admin/<?php //echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
                       </div>
                    
                    
                    <center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php// echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
                    <center><input type = "checkbox" value = "<?php// echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
                    <center><span style="margin-top:4px;"><?php// echo $fetch['year_level']?></span></center>
                </div>

                <?php
                    }
                ?>

            </div> -->


            <section class="doctors" id="doctors">

                <h1 class="heading"> our <span>doctors</span> </h1>

                <div class="box-container">

                    <?php

                    $query = $con->query("SELECT * FROM `doctors`") or die(mysqli_errno());
                    while($fetch = $query->fetch_array())
                    {




                        ?>
                        <div class="box">
                            <!-- <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px"> -->
                            <img src="<?php echo "./hms/admin/".$fetch['img']; ?>" alt="<?php echo htmlentities($fetch['doctorName']); ?>" style="width: 180px; height: 180px;">
                            <h3><?php echo $fetch['doctorName']?></h3>
                            <span><?php echo $fetch['specilization']?></span><br><br>
                            <h5>
                <?php $lines = explode("\n", $fetch['doctorprofileinfo']); // or use PHP PHP_EOL constant
                if ( !empty($lines) ) {
                  echo '<ul>';
                  foreach ( $lines as $line ) {
                    echo '<li>'. trim( $line ) .'</li>';
                }
                echo '</ul>';
            }  ?>

        </h5><br>

        <h4>Practice Days:</h4>
        <span><?php echo $fetch['practiceDays']?></span>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>

        </div>
    </div>
    <?php
}
?>


<div class="box">
    <img src="newassets/image/doc-2.jpg" alt="">
    <h3>win coder</h3>
    <span>expert doctor</span>
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
</div>


</div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="newassets/image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
            if(isset($message)) {
                foreach($message as $message) {
                    echo'<p class ="message">'.$message.'</p>';
                }
            }
            ?>

            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->







<!--  ************************* About Us Starts Here ************************** -->
<!--         
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
<?php
//$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
//while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  //echo $row['PageDescription'];?>.</p><?php //} ?>
            </div>
        </div>
    </section>     -->
    
    
    <!--  ************************* Gallery Starts Here ************************** -->
    <div class="photo-gallery" >
        <div class="container center">
            <h1 class="heading py-5">Our <span>Gallery</span>  </h1>   
            <div class="row photos">
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_01.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_01.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_02.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_02.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_03.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_03.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_04.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_04.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_05.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_05.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_06.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_06.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_08.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_08.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_09.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_09.jpg"></a></div>
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_10.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_10.jpg"></a></div>
            </div>
        </div>
    </div>

    <!-- ######## Gallery End ####### -->
    <!--  ************************* Contact Us Starts Here ************************** -->
<!--      <style>
    #contact_us {
        background-color: #f8f8f8;
        padding: 50px 0;
    }

    .contact-us-single {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
    }

    .cop-ck {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        width: 100%;
        padding: 12px;
        margin: 12px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-family: 'Open Sans', sans-serif;
    }

    h2 {
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 28px;
    }

    label {
        font-weight: bold;
        margin-bottom: 10px;
        display: block;
        font-size: 16px;
    }

    textarea {
        width: 100%;
        padding: 12px;
        margin: 12px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 6px;
        resize: vertical;
        font-family: 'Open Sans', sans-serif;
    }

    button {
        background-color: #28a745;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
    }

    button:hover {
        background-color: #218838;
    }
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

<section id="contact_us" class="contact-us-single">
    <div class="row no-margin">
        <div class="col-sm-12 cop-ck">
            <form method="post" id="contactForm">
                <h2>Contact Form</h2>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label for="fullname">Enter Name:</label></div>
                    <div class="col-sm-8"><input type="text" id="fullname" placeholder="Enter Name" name="fullname" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label for="emailid">Email Address:</label></div>
                    <div class="col-sm-8"><input type="email" id="emailid" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label for="mobileno">Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="tel" id="mobileno" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label for="description">Enter Message:</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" id="description" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                    </div>
                </div>
                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> -->
<!-- ################# Footer Starts Here#######################--->
<!--     <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
    <h2 style="color: white; font-family: 'Times New Roman', Times, serif;">Useful Links</h2>
    <ul class="list-unstyled link-list">
        <li><a ui-sref="about" href="#about_us">About us</a><i class="fa fa-angle-right"></i></li>
        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
    </ul>
</div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2 style="font-family: 'Times New Roman', Times, serif; color: white; text-decoration: underline;"><b>Contact Us</b></h2>
					<address class="md-margin-bottom-40">

<?php
// $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
// while ($row=mysqli_fetch_array($ret)) {
?>
                        <?php  //echo $row['PageDescription'];?> <br>
                        Phone: <?php  //echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  //echo $row['Email'];?>" class=""><?php  //echo $row['Email'];?></a><br>
                        Timing: <?php  //echo $row['OpenningTime'];?>
                    </address>
         <?php //} ?> 
               </div>
            </div>
        </div>        
    </footer>
   <div class="copy" style="text-align: right; font-family: 'Times New Roman', Times, serif;">
    <div class="container">
       <b> Hospital Management System | It's Me </b>            
    </div>
</div>
--> 

<!-- footer section starts  -->

<section class="footer-design">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>JAHED HASAN</span> | all rights reserved </div>

</section>
<!-- footer section ends -->
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
<script src="newassets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</html>