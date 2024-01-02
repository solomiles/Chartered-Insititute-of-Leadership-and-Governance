<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.jpg" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Chartered Institute of Leadership and Governance</title>
</head>

<body>
<!-- wrapper -->
<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card rounded-5 overflow-hidden">
						<div class="row g-0 align-items-center">
							<div class="col-lg-7 border-end">
								<div class="card-body">
									<div class="p-5">
										<div class="text-start">
											<img src="assets/images/cilg-logo-dark.png"  width="300" alt="Chartered-Institute-of-Leadership-and-Leadership">
										</div>
										<h4 class="mt-5 font-weight-bold">Application Portal</h4>
										<p class="text-muted">Apply for any of our professional programme, you can apply for <br> a <strong>Diploma</strong> <span>or</span> as a <strong>Membership.</strong> </p> <br><br>
										<ul class="nav nav-pills mb-3" role="tablist">
											<li class="nav-item" role="presentation">
												<a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true">
													<div class="d-flex align-items-center">
														<div class="tab-icon"><i class="lni lni-graduation font-18 me-1"></i>
														</div>
														<div class="tab-title">Diploma</div>
													</div>
												</a>
											</li>
											<li class="nav-item" role="presentation">
												<a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false" tabindex="-1">
													<div class="d-flex align-items-center">
														<div class="tab-icon"><i class="lni lni-user font-18 me-1"></i>
														</div>
														<div class="tab-title">Membership</div>
													</div>
												</a>
											</li>
										</ul>
									
									<div class="tab-content" id="pills-tabContent">
										
											<div class="tab-pane fade active show" id="primary-pills-home" role="tabpanel">
											<form id="diploma-form" method="POST">
											@csrf
												<div class="mb-3 mt-5">
													<label class="form-label">First Name</label>
													<input type="text" name="firstname" class="form-control rounded-5" placeholder="First Name" />
												</div>
												<div class="mb-4">
													<label class="form-label">Last Name</label>
													<input type="text" name="lastname" class="form-control rounded-5" placeholder="Last Name" />
												</div>
												<div class="mb-4">
													<label class="form-label">Email Address</label>
													<input type="text" name="email" class="form-control rounded-5" placeholder="Email Address" />
												</div>
												<div class="mb-4">
													<label for="formFile" class="form-label">Resume</label>
													<input class="form-control rounded-5" name="resume" type="file" id="formFile">
												</div>

												<div class="mb-4">
													<label for="formFile" class="form-label">What Programme are you applying for?</label>
													<select name="program" class="form-select rounded-5" id="inputSelectCountry" aria-label="Default select example">
															<option selected="">Select Programme</option>
															<option>Diploma</option>
															<option>Advance Diploma</option>
															<option>Executive Diploma</option>
														</select>
												</div>

												<div class="mb-4">
													<label for="formFile" class="form-label">What country are you applying from?</label>
													<select name="country" class="form-select rounded-5" id="inputSelectCountry" aria-label="Default select example">
															<option selected="">Select Country</option>
															<option>United State of America</option>
															<option>Advance Diploma</option>
															<option>Executive Diploma</option>
														</select>
												</div>
												<div class="d-grid gap-3">
													<button type="submit" class="btn btn-gradient-info rounded-5">Submit</button>
													<a href="https://cilgglobal.org/" class="btn btn-white rounded-5"><i class='bx bx-arrow-back mr-1'></i>Back Home</a>
												</div>
											</form>
											</div>
										
										
											<div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
												<div class="tab-pane fade active show" id="primary-pills-home" role="tabpanel">
											<form id="membership-form" method="POST">
													@csrf
												<div class="mb-3 mt-5">
													<label class="form-label">First Name</label>
													<input type="text" name="firstname" class="form-control rounded-5" placeholder="First Name" />
												</div>
												<div class="mb-4">
													<label class="form-label">Last Name</label>
													<input type="text" name="lastname" class="form-control rounded-5" placeholder="Last Name" />
												</div>
												<div class="mb-4">
													<label class="form-label">Email Address</label>
													<input type="text" name="email" class="form-control rounded-5" placeholder="Email Address" />
												</div>
												<div class="mb-4">
													<label for="formFile" class="form-label">Detailed Resume</label>
													<input class="form-control rounded-5" name="resume" type="file" id="formFile">
												</div>

												<div class="mb-4">
													<label for="formFile" class="form-label">Passport Photo</label>
													<input class="form-control rounded-5" name="passport" type="file" id="formFile">
												</div>

												<div class="mb-4">
													<label for="formFile" class="form-label">What country are you applying from?</label>
													<select name="country" class="form-select rounded-5" id="inputSelectCountry" aria-label="Default select example">
															<option selected="">Select Country</option>
															<option>United State of America</option>
															<option>Advance Diploma</option>
															<option>Executive Diploma</option>
														</select>
												</div>
												<div class="d-grid gap-3">
													<button type="submit"  class="btn btn-gradient-info submit-btn rounded-5">
														<span id="member-txt">Submit</span>
														<div class="spinner-border spinner-border-sm btn-pr p-2" id="member-spinner"
															style="display: none;" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</button>
													<a href="https://cilgglobal.org/" class="btn btn-white rounded-5"><i class='bx bx-arrow-back mr-1'></i>Back Home</a>
												</div>
												</form>
											</div>
										
									</div>
								</div>	
							</div>
						</div>
					</div>
							
							
							<div class="col-lg-5">
								<div class="card-body">
									<div class="p-5">
										<h3 class="mt-5 font-weight-bold">Take the first step in achieving your Leadership and Governance goals</h3>
										<p class="text-muted">Looking to become a more skilled, confident and successful leader? Chartered Insititute of Leadership and Governance works closely with individuals, leaders in every sectors.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/lga.js"></script>

	<script>
		 $(document).ready(() => {
			$('#diploma-form').submit(el => {
			diplomaApp(el)
			})

			$('#membership-form').submit(el => {
			memberApp(el)
			})
		});

		function diplomaApp(el) {
			el.preventDefault()

			let url = `{{ url('diploma-form') }}`;
    		let data = new FormData(el.target)
			

			goPost(url, data)
				.then(res => {
					Swal.fire({
					title: "Successful",
					text: "Your application has been received. A member of our team will contact you shortly.",
					icon: "success"
				})
			})
			.catch(err => {
				handleFormError(err);
			})
		}

		function memberApp(el) {
			el.preventDefault()

			let url = `{{ url('membership-form') }}`;
    		let data = new FormData(el.target)
			

			goPost(url, data)
				.then(res => {
					Swal.fire({
					title: "Successful",
					text: "Your application has been received. A member of our team will contact you shortly.",
					icon: "success"
				})
			})
			.catch(err => {
				handleFormError(err);
			})
		}
	</script>

</html>