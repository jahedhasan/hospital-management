<?php $userRole = $_SESSION['role']; ?>
<div class="sidebar app-aside" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>

			<!-- start: MAIN NAVIGATION MENU -->
			<div class="navbar-title">
				<span>Main Navigation</span>
			</div>
			<ul class="main-navigation-menu">
				<li>
					<a href="dashboard.php">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-home"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Dashboard </span>
							</div>
						</div>
					</a>
				</li>
				<?php if ($userRole == 'admin') { ?>
				<li>
					<a href="notice.php">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-announcement"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Notice </span>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-user"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Doctors </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="doctor-specilization.php">
								<span class="title"> Doctor Specialization </span>
							</a>
						</li>
						<li>
							<a href="add-doctor.php">
								<span class="title"> Add Doctor</span>
							</a>
						</li>
						<li>
							<a href="Manage-doctors.php">
								<span class="title"> Manage Doctors </span>
							</a>
						</li>

					</ul>
				</li>
				<?php } ?>

				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-files"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Contact us Queries / Appointment </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="unread-queries.php">
								<span class="title"> Unread Query </span>
							</a>
						</li>

						<li>
							<a href="read-query.php">
								<span class="title"> Read Query </span>
							</a>
						</li>

					</ul>
				</li>



				
				<!--- Pages---->
				<?php if ($userRole == 'admin') { ?>
				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-file"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Pages </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="about-us.php">
								<span class="title">About Us </span>
							</a>
						</li>
						<li>
							<a href="contact.php">
								<span class="title">Cotnact Us </span>
							</a>
						</li>
						<li>
							<a href="slider.php">
								<span class="title">Slider </span>
							</a>
						</li>
						<li>
							<a href="gallery.php">
								<span class="title">Gallery </span>
							</a>
						</li>
					</ul>
				</li>

				<?php } ?>


				<li>
					<a href="patient-search.php">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-search"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Patient Search </span>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-files"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Reports </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="between-dates-reports.php">
								<span class="title">B/w dates reports </span>
							</a>
						</li>
					</ul>
				</li>


			</ul>
			<!-- end: CORE FEATURES -->

		</nav>
	</div>
</div>