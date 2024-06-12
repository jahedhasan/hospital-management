
<?php
include_once('admin/include/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['specialization'])) {
        $specialization = $_POST['specialization'];
        $query = mysqli_query($con, "SELECT * FROM doctors WHERE specilization='$specialization'");

        $doctors = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $doctors[] = $row;
        }

        echo json_encode($doctors);
        exit;
    }
}

if(isset($_POST['submit']))
{
    $name=$_POST['fullname'];
    $mobileno=$_POST['mobileno'];
    $specilization=$_POST['Doctorspecialization'];
    $doctorname=$_POST['doctor'];
    $appdate=$_POST['appdate'];
    $dscrption=$_POST['description'];
    $query=mysqli_query($con,"insert into tblappointment(doctorSpecialization,doctorname,fullname,contactno,appointmentDate,message) values('$specilization','$doctorname','$name','$mobileno','$appdate','$dscrption')");
    if($query)
    {
        echo "<script>alert('Your appointment successfully booked');</script>";
        header("Location: index.php");
        exit;
    }

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Feni Medinova Specialized Hospital Has Been Providing World Class Medical Services In Feni District With Modern Medical Equipment Under The Supervision Of Experienced Doctors For Almost 10 Years Including  Emergency Services, NICU, HDU, CCU, Dialysis, MRI, Digital Diagonstic And 24 Hours OT. Feni Medinova Specialized Hospital Is Always At Your Side With All Healthcare Services.">
    <meta name="keywords" content="Hospital, Medical, Services, Ambulance,Medinova, Feni Medinova, Best Private Hospital, Feni Town, Feni hospital, Feni Sadar, SSk road, Medinova hospital, Best services">
    
    <title> Feni Medinova Specialized Hospital | Best Private Medical Hospital in Feni.</title>
    
     <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Best Hospital Services in Feni Town - Feni Medinova Specialized Hospital">
    <meta property="og:description" content="Feni Medinova Specialized Hospital Has Been Providing World Class Medical Services In Feni District With Modern Medical Equipment Under The Supervision Of Experienced Doctors For Almost 10 Years Including  Emergency Services, NICU, HDU, CCU, Dialysis, MRI, Digital Diagonstic And 24 Hours OT.">
    <meta property="og:image" content="assets/images/opengraph.jpg">
    <meta property="og:url" content="http://fenimedinova.com/">
    <link rel="icon" type="image/x-icon" href="assets/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="newassets/css/style.css">
</head>

<body id="home">

 <header class="header">

    <a href="#home" class="logo"> <img  height="40" width="40" src="./assets/images/medinova-logo.png"/>Feni <strong>MEDINOVA</strong> Specialized Hospital </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">Department</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="./admin">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header> 

        <!-- ################# Slider Starts Here#######################-->
<div class="slider-detail" style="margin-top: 77px">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <?php
            // Fetch all slider data
            $slidercontent = mysqli_query($con, "SELECT * FROM slider");
            $sliderCount = mysqli_num_rows($slidercontent);
            for ($i = 0; $i < $sliderCount; $i++) {
                $activeClass = $i == 0 ? 'class="active"' : '';
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" ' . $activeClass . '></li>';
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            // Initialize a counter to set the active class on the first item
            $isActive = true;
            while ($sliderData = mysqli_fetch_array($slidercontent)) {
                $activeClass = $isActive ? ' active' : '';
                echo '<div class="carousel-item' . $activeClass . '">';
                echo '<img class="d-block w-100" src="' . $sliderData['image'] . '" alt="' . $sliderData['slidertext'] . '">';
                echo '<div class="carousel-cover"></div>';
                echo '<div class="carousel-caption vdg-cur d-none d-md-block">';
                echo '<h5 class="animated bounceInDown">' . $sliderData['slidertext'] . '</h5>';
                echo '</div>';
                echo '</div>';
                $isActive = false;
            }
            ?>
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

              <?php
              $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
              while ($row=mysqli_fetch_array($ret)) {
                ?>
                <a class="sus-btn" href="tel:<?php echo $row['MobileNumber1'] ;?>"> <i class="fas fa-phone"> </i>&emsp;<?php  echo $row['MobileNumber1'];?> </a>


                <a class="sus-btn" href="tel:<?php echo $row['MobileNumber2'] ;?>"> <i class="fas fa-phone"> </i>&emsp;<?php  echo $row['MobileNumber2'];?> </a>
            <?php } ?> 
        </div>
    </div>
</div>
</div>
</div><!-- End Suscribe Section -->
<!-- about section starts  -->

<section class="about" id="about">
    <div class="container">
       
    
        <div class="row">
    
            <div class="image">
                <img src="newassets/image/about-img.svg" alt="">
            </div>
    
            <div class="content text-center ">
                <p style="font-size: 20px;font-weight: 600;">take the world's best quality treatment</p>
                <?php
                $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
                while ($row=mysqli_fetch_array($ret)) {
                    ?>
    
                    <!-- <p><?php  echo $row['PageDescription'];?>.</p> -->
    
                    <p><?php  echo $row['PageDescription'];?> </p>
                <?php } ?>
                <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
            </div>
    
        </div>
        
    </div>

        

</section>


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




<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <?php

        $query = $con->query("SELECT * FROM `doctors`") or die(mysqli_errno());
        while($fetch = $query->fetch_array())
        {




            ?>
            <div class="box">
                
                <img src="<?php echo "./admin/".$fetch['img']; ?>" alt="<?php echo htmlentities($fetch['doctorName']); ?>" style="width: 180px; height: 180px;">
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

        <h4>Patient Visiting Schedule:</h4>
        <span><?php echo $fetch['practiceDays']?></span>

        <div class="mt-5">
            <a href="#appointment" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
        </div>
        
    </div>
    <?php
}
?>



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


            <h3>make appointment</h3>
            <input type="text"name="fullname" placeholder="Patient name" class="box" required>
            <input type="text"name="mobileno" placeholder="Patient number" class="box" required>
            <select  name="Doctorspecialization" id="Doctorspecialization" class="box" required>
                <option value="">Select Specialization</option>
                <?php $ret=mysqli_query($con,"select * from doctorspecilization");
                while($row=mysqli_fetch_array($ret))
                {
                    ?>
                    <option value="<?php echo htmlentities($row['specilization']);?>">
                        <?php echo htmlentities($row['specilization']);?>
                    </option>
                <?php } ?>

            </select>
            
            <select name="doctor" id="doctor" class="box" required>
                <option value="">Select Doctor</option>
            </select>
            <input type="date"name="appdate"  class="box">
            <textarea rows="2" id="description" placeholder="Enter Your Message Or Additional Information" class="box" name="description" required="" ></textarea>
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->





    
    
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
                <div class="col-sm-4 col-md-4  item"><a href="assets/images/gallery/gallery_10.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/images/gallery/gallery_07.jpg"></a></div>
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
            <a href="#services"> <i class="fas fa-chevron-right"></i> Department </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <h3>follow us</h3>
            <a href="https://www.facebook.com/medinovahospital.feni" target="_blank"> <i class="fab fa-facebook"></i> facebook </a>
        </div>

        <div class="box">
            <h3>our department</h3>
            <a href="#services"> <i class="fas fa-chevron-right"></i> CCU, HDU, NICU </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> dialysis</a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> MRI, X-ray </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> pathology </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> dental unit </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> OT </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> digital lab </a>
        </div>

        <div class="box">
            <?php
            $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
            while ($row=mysqli_fetch_array($ret)) {
                ?>
                <h3>Contact info</h3>
                <h4>for appointment</h4>
                <a href="tel:<?php echo $row['MobileNumber1'] ;?>"> <i class="fas fa-phone"></i><?php  echo $row['MobileNumber1'];?> </a>
                <a href="tel:<?php echo $row['MobileNumber2'] ;?>"> <i class="fas fa-phone"></i><?php  echo $row['MobileNumber2'];?> </a>
                <h4>for admission</h4>
                <a href="tel:<?php echo $row['Admissionmobnum1'] ;?>"> <i class="fas fa-phone"></i><?php  echo $row['Admissionmobnum1'];?> </a>
                <a href="tel:<?php echo $row['Admissionmobnum2'] ;?>"> <i class="fas fa-phone"></i><?php  echo $row['Admissionmobnum2'];?> </a>
                <a href="mailto:<?php echo $row['Email'];?>"> <i class="fas fa-envelope"></i><?php echo $row['Email']; ?> </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i><?php echo $row['PageDescription']; ?> </a>

            <?php } ?> 
        </div>

        <div class="box">
            
            <h3>Location on google Maps</h3>
            
                 <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.3824208759365!2d91.39127457350703!3d23.00972681681084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753683a8b8555d5%3A0xf5751b9b06225e07!2sFeni%20Medinova%20Specialized%20Hospital!5e0!3m2!1sen!2sbd!4v1718002782254!5m2!1sen!2sbd" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- End Map -->
            
        </div>

    </div>

    <div class="credit">
     Feni Medinova Specialized Hospital | all rights reserved .<br>

     <h5>developed by <span><a href="https://www.facebook.com/jahed.hasann" target="_blank">JAHED HASAN</a></span></h5>
    </div>

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
<script>
    $(document).ready(function() {
        $('#Doctorspecialization').change(function() {
            var specialization = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo $_SERVER['PHP_SELF'];?>',
                data: { specialization: specialization },
                success: function(response) {
                    var doctors = JSON.parse(response);
                    $('#doctor').empty();
                    $('#doctor').append('<option value="">Select Doctor</option>');
                    $.each(doctors, function(index, doctor) {
                        $('#doctor').append('<option value="' + doctor.doctorName + '">' + doctor.doctorName + '</option>');
                    });
                }
            });
        });
    });
</script>

</html>