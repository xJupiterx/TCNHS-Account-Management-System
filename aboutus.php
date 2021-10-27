<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Login</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
	<style>
		body{
			background:  url('background/background4.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			align-items: center;
			justify-content: center;
        }
	</style>
</head>

<body>
<div id="app">
	<div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
				<center>	
					<div class="sidebar-header">
						<img src="assets/images/icon.png" alt="" srcset="">
						<br>
						<a style="font-size:18px;">Tagaytay City National High School</a>
					</div>
				</center>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>



                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="alert-triangle" width="20"></i>
                                <span>Prevention</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="aboutus.php" class='sidebar-link'>
                                <i data-feather="info" width="20"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="mail" width="20"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
		<div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, <?php echo $_SESSION['lastname']; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <div class="col-md-12">
					<center><div class="card"">
						<div class="card-body" style='position:relative; height:220px'>
                            <h1 style="position: relative; top: 30px; left: 70px; color: #8c0707"><strong><center>Fire Alarm System</center></strong><h1>
                            <div style="position: relative; right: 160px; bottom:40px">
                                <img src="assets/images/icon.png" alt="" srcset="" style="width:140px;height:145px;">
                            </div>
                            <div class='row'>
                                <h2 class='col-md-6' style="position: relative; bottom: 110px; left: 220px; color: #5e5c5c"><strong><center>TCNHS</center></strong><h2>
                                <h6 class='col-md-6' style="position: relative; bottom: 120px; left: 440px; color: #3acf61;"><strong><center>Est. 1956</center></strong><h6>
                            </div>
						</div>
					</div></center>
				</div>
                <div class="page-title">
                    <h3 style='position:relative; left:20px'>About</h3>
                </div>
                <div class="col-md-12">
					<div class="card ">
						<div class="card-header" style="background-color: #3acf61">
							<h4 style="color: white"><strong><center>About Us</center></strong></h4>
						 </div>
						<div class="card-body">
							<br>
							<h4>
                            Tagaytay City National High School-Integrated Senior High School located at Mayor's Drive Mendez Crossing East Tagaytay City, Cavite. Tagaytay City National High School-Integrated Senior High School is a public secondary school in Tagaytay City, recognized by the Department of Education (DepEd). Established in 1956, Tagaytay City National High School-Integrated Senior High School
                            </h4>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>