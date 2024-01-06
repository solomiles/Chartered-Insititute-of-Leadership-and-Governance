<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.jpg" type="image/jpg" />
	<!--plugins-->
	<link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ url('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
	<title>Chartered Institute of Leadership and Governance</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class=" cards card rounded-4">
							<div class="card-body">
								<div class="border p-4 rounded-4">
									<div class="text-center">
										<img src="{{ url('assets/images/cilg-logo-dark.png') }}" width="200" alt="Chartered-Institute-of-Leadership-and-Leadership">
										<h5 class="mt-3 mb-0">Hi, Administrator</h5>
										<p class="mb-4">Please login to access the page</p>
									</div>
									<!-- Form Error -->
									<div class="alert alert-danger d-none text-center" id="form-error" role="alert">
									</div>

									<!-- Form Success -->
									<div class="alert alert-success d-none text-center" role="alert" id="form-success">
									</div>
									<div class="form-body">
										<form id="login-form" method="POST" class="row g-3">
											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control rounded-5" id="inputEmailAddress" placeholder="Email Address">
												<span class="text-danger error-message" id="email"></span>
											</div>
											<div class="col-12">
												
												<input type="password" name="password" class="form-control rounded-5" id="inputChoosePassword" placeholder="Enter Password">
												<span class="text-danger error-message" id="password"></span>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											
											<div class="col-12">
												<div class="d-grid">
													<!-- <button type="submit" class="btn btn-gradient-info rounded-5"><i class="bx bxs-lock-open"></i>Sign in</button> -->
													<button class="btn btn-primary rounded-5 account-btn" type="submit">
														<i class="bx bxs-lock-open"></i>
														<span id="login-txt">Login</span>
														<div class="spinner-border spinner-border-sm btn-pr" id="login-spinner" role="status"
															style="display: none;">
															<!-- <span class="sr-only">Loading...</span> -->
														</div>
													</button>
													
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ url('assets/js/jquery.min.js') }}"></script>
	<script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!-- Custom JS -->
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
		$(document).ready(() => {

			$('#login-form').submit(el => {
				login(el)
			})
		})
        // Process Login
        function login(el) {
            el.preventDefault();
            spin('login')
            offError(true)


                loginReq(el);

        }

        // Make Login Request
        function loginReq(el) {
            let url = `{{ url('admin/login-in') }}`;
            let data = new FormData(el.target)
			
            goPost(url, data)
                .then(res => {
                    spin('login')
                    success()
                    $('#form-success').text(res.message)

                    setTimeout(() => {
                        location.href = "{{ url('admin/dashboard') }}";
                    }, 3000)
                })
                .catch(err => {
                    spin('login')

                    if (err.status === 400) {
                        errors = err.responseJSON.message;
						
                        if (typeof errors === "object") {
                            for (const [key, value] of Object.entries(errors)) {
                                $('#' + key).html('');
                                [...value].forEach(m => {
                                    $('#' + key).append(`<p>${m}</p>`)
                                })
                            }
                        } else {
                            error()
                            $('#form-error').text(errors)
                        }
                    } else {
                        error()
                        $('#form-error').text("Oops! Something's not right. Try Again")
                    }
                })
        }
		// Display From Error
        function error() {
            $('#form-error').addClass('animate__animated animate__headShake')
            $('#form-error').removeClass('d-none')
        }

        // Display From Success
        function success() {
            $('#form-success').addClass('animate__animated animate__fadeIn')
            $('#form-success').removeClass('d-none')
        }
	</script>
	<!--app JS-->
	<script src="{{ url('assets/js/app.js') }}"></script>
</body>

</html>