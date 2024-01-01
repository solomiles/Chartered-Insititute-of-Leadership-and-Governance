<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.jpg" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Chartered Institute of Leadership and Governance</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
                <li>
                    <a href="dashboard.html">
                        <div class="parent-icon"><i class="lni lni-home"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="diploma.html">
                        <div class="parent-icon"><i class="lni lni-graduation"></i>
                        </div>
                        <div class="menu-title">Diploma</div>
                    </a>
                </li>
                <li>
                    <a href="membership.html">
                        <div class="parent-icon"><i class="lni lni-users"></i>
                        </div>
                        <div class="menu-title">Membership</div>
                    </a>
                </li>
            </ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
				
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-19.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">cilg-adminstrator</p>
								<p class="designattion mb-0">Super Administrator</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                <div class="row row-cols-1 row-cols-lg-3">
					<div class="col">
						<div class="cards card rounded-4 bg-texture-wave-a">
							<div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="">
									  <h4 class="mb-0 text-white">Users</h4>
									  <p class="mb-0 text-white">Total No of Login Users</p>
								   </div>
								   <div class="fs-2 text-white">
									<i class="lni lni-user"></i>
								   </div>
								</div>
								<div class="progress rounded-4 my-3 bg-light-transparent-2" style="height:5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 60%"></div>
									</div></div>
								
						</div>
					</div>

					<div class="col">
						<div class="cards card rounded-4 bg-texture-wave-b">
							<div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="">
									  <h4 class="mb-0 text-white">100</h4>
									  <p class="mb-0 text-white">Total No of Diploma</p>
								   </div>
								   <div class="fs-2 text-white">
									<i class="lni lni-graduation"></i>
								   </div>
								</div>
								<div class="progress rounded-4 my-3 bg-light-transparent-2" style="height:5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 60%"></div>
									</div>
									</div>
						</div>
					</div>
					<div class="col">
						<div class="cards card rounded-4 bg-texture-wave-c">
							<div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="">
									  <h4 class="mb-0 text-white">356</h4>
									  <p class="mb-0 text-white">Total No of Membership</p>
								   </div>
								   <div class="fs-2 text-white">
									<i class="lni lni-users"></i>
								   </div>
								</div>
								<div class="progress rounded-4 my-3 bg-light-transparent-2" style="height:5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 60%"></div>
								</div>
								
							</div>
						</div>
					</div>
				 </div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024 Chartered Institute of Leadership and Governance. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>