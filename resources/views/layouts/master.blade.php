<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ url('assets/images/favicon.jpg') }}" type="image/jpg" />
	<!--plugins-->
	<!-- <link href="{{ url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/> -->
	<link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ url('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/css/header-colors.css') }}" />
	<title>{{ config('app.name') }}</title>
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
                    <a href="dashboard">
                        <div class="parent-icon"><i class="lni lni-home"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="diploma">
                        <div class="parent-icon"><i class="lni lni-graduation"></i>
                        </div>
                        <div class="menu-title">Diploma</div>
                    </a>
                </li>
                <li>
                    <a href="membership">
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
							<img src="{{ url('assets/images/favicon.jpg') }}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">cilg-adminstrator</p>
								<p class="designattion mb-0">Super Administrator</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{url('admin/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->


        @yield('content')

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
	<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ url('assets/js/jquery.min.js') }}"></script>
	<script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ url('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ url('assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
	<script src="{{ url('assets/js/index.js') }}"></script>
	<script src="{{ url('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <!-- <script src="{{ url('assets/js/index.js') }}"></script> -->
	<script src="{{ url('assets/js/app.js') }}"></script>

	<!--app JS-->
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!-- app JS -->
    <script>
        function _(e,el){
            return $(e.relatedTarget).attr(el);
        }
        $("#exampleLargeModal").on("show.bs.modal", function(e) {

            // $(this).find("input[name='id']").val(_(e,"data-id"));
            $(this).find(".firstname").html(_(e,"data-firstname"));
            $(this).find(".lastname").html(_(e,"data-lastname"));
            $(this).find(".email").html(_(e,"data-email"));
            $(this).find(".program").html(_(e,"data-program"));
            $(this).find(".country").html(_(e,"data-country"));
            // $(this).find(".proof").attr("src",_(e,"data-proof"));
            // $(this).find("input[name='amount']").val(_(e,"data-amount"));
        });
        // $.validate({
        //     modules : 'security',
        //     scrollToTopOnError: true,
        //     onSuccess : function($form) {

        //     //return false;
        //     },
        // })
    </script>
</body>

</html>