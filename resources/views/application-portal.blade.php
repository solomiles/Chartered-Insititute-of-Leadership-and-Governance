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
														<option selected>Select Country</option>
														<option value="Afghanistan">Afghanistan</option>
														<option value="Albania">Albania</option>
														<option value="Algeria">Algeria</option>
														<option value="American Samoa">American Samoa</option>
														<option value="Andorra">Andorra</option>
														<option value="Angola">Angola</option>
														<option value="Anguilla">Anguilla</option>
														<option value="Antartica">Antarctica</option>
														<option value="Antigua and Barbuda">Antigua and Barbuda</option>
														<option value="Argentina">Argentina</option>
														<option value="Armenia">Armenia</option>
														<option value="Aruba">Aruba</option>
														<option value="Australia">Australia</option>
														<option value="Austria">Austria</option>
														<option value="Azerbaijan">Azerbaijan</option>
														<option value="Bahamas">Bahamas</option>
														<option value="Bahrain">Bahrain</option>
														<option value="Bangladesh">Bangladesh</option>
														<option value="Barbados">Barbados</option>
														<option value="Belarus">Belarus</option>
														<option value="Belgium">Belgium</option>
														<option value="Belize">Belize</option>
														<option value="Benin">Benin</option>
														<option value="Bermuda">Bermuda</option>
														<option value="Bhutan">Bhutan</option>
														<option value="Bolivia">Bolivia</option>
														<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
														<option value="Botswana">Botswana</option>
														<option value="Bouvet Island">Bouvet Island</option>
														<option value="Brazil">Brazil</option>
														<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
														<option value="Brunei Darussalam">Brunei Darussalam</option>
														<option value="Bulgaria">Bulgaria</option>
														<option value="Burkina Faso">Burkina Faso</option>
														<option value="Burundi">Burundi</option>
														<option value="Cambodia">Cambodia</option>
														<option value="Cameroon">Cameroon</option>
														<option value="Canada">Canada</option>
														<option value="Cape Verde">Cape Verde</option>
														<option value="Cayman Islands">Cayman Islands</option>
														<option value="Central African Republic">Central African Republic</option>
														<option value="Chad">Chad</option>
														<option value="Chile">Chile</option>
														<option value="China">China</option>
														<option value="Christmas Island">Christmas Island</option>
														<option value="Cocos Islands">Cocos (Keeling) Islands</option>
														<option value="Colombia">Colombia</option>
														<option value="Comoros">Comoros</option>
														<option value="Congo">Congo</option>
														<option value="Congo">Congo, the Democratic Republic of the</option>
														<option value="Cook Islands">Cook Islands</option>
														<option value="Costa Rica">Costa Rica</option>
														<option value="Cota D'Ivoire">Cote d'Ivoire</option>
														<option value="Croatia">Croatia (Hrvatska)</option>
														<option value="Cuba">Cuba</option>
														<option value="Cyprus">Cyprus</option>
														<option value="Czech Republic">Czech Republic</option>
														<option value="Denmark">Denmark</option>
														<option value="Djibouti">Djibouti</option>
														<option value="Dominica">Dominica</option>
														<option value="Dominican Republic">Dominican Republic</option>
														<option value="East Timor">East Timor</option>
														<option value="Ecuador">Ecuador</option>
														<option value="Egypt">Egypt</option>
														<option value="El Salvador">El Salvador</option>
														<option value="Equatorial Guinea">Equatorial Guinea</option>
														<option value="Eritrea">Eritrea</option>
														<option value="Estonia">Estonia</option>
														<option value="Ethiopia">Ethiopia</option>
														<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
														<option value="Faroe Islands">Faroe Islands</option>
														<option value="Fiji">Fiji</option>
														<option value="Finland">Finland</option>
														<option value="France">France</option>
														<option value="France Metropolitan">France, Metropolitan</option>
														<option value="French Guiana">French Guiana</option>
														<option value="French Polynesia">French Polynesia</option>
														<option value="French Southern Territories">French Southern Territories</option>
														<option value="Gabon">Gabon</option>
														<option value="Gambia">Gambia</option>
														<option value="Georgia">Georgia</option>
														<option value="Germany">Germany</option>
														<option value="Ghana">Ghana</option>
														<option value="Gibraltar">Gibraltar</option>
														<option value="Greece">Greece</option>
														<option value="Greenland">Greenland</option>
														<option value="Grenada">Grenada</option>
														<option value="Guadeloupe">Guadeloupe</option>
														<option value="Guam">Guam</option>
														<option value="Guatemala">Guatemala</option>
														<option value="Guinea">Guinea</option>
														<option value="Guinea-Bissau">Guinea-Bissau</option>
														<option value="Guyana">Guyana</option>
														<option value="Haiti">Haiti</option>
														<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
														<option value="Holy See">Holy See (Vatican City State)</option>
														<option value="Honduras">Honduras</option>
														<option value="Hong Kong">Hong Kong</option>
														<option value="Hungary">Hungary</option>
														<option value="Iceland">Iceland</option>
														<option value="India">India</option>
														<option value="Indonesia">Indonesia</option>
														<option value="Iran">Iran (Islamic Republic of)</option>
														<option value="Iraq">Iraq</option>
														<option value="Ireland">Ireland</option>
														<option value="Israel">Israel</option>
														<option value="Italy">Italy</option>
														<option value="Jamaica">Jamaica</option>
														<option value="Japan">Japan</option>
														<option value="Jordan">Jordan</option>
														<option value="Kazakhstan">Kazakhstan</option>
														<option value="Kenya">Kenya</option>
														<option value="Kiribati">Kiribati</option>
														<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
														<option value="Korea">Korea, Republic of</option>
														<option value="Kuwait">Kuwait</option>
														<option value="Kyrgyzstan">Kyrgyzstan</option>
														<option value="Lao">Lao People's Democratic Republic</option>
														<option value="Latvia">Latvia</option>
														<option value="Lebanon" >Lebanon</option>
														<option value="Lesotho">Lesotho</option>
														<option value="Liberia">Liberia</option>
														<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
														<option value="Liechtenstein">Liechtenstein</option>
														<option value="Lithuania">Lithuania</option>
														<option value="Luxembourg">Luxembourg</option>
														<option value="Macau">Macau</option>
														<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
														<option value="Madagascar">Madagascar</option>
														<option value="Malawi">Malawi</option>
														<option value="Malaysia">Malaysia</option>
														<option value="Maldives">Maldives</option>
														<option value="Mali">Mali</option>
														<option value="Malta">Malta</option>
														<option value="Marshall Islands">Marshall Islands</option>
														<option value="Martinique">Martinique</option>
														<option value="Mauritania">Mauritania</option>
														<option value="Mauritius">Mauritius</option>
														<option value="Mayotte">Mayotte</option>
														<option value="Mexico">Mexico</option>
														<option value="Micronesia">Micronesia, Federated States of</option>
														<option value="Moldova">Moldova, Republic of</option>
														<option value="Monaco">Monaco</option>
														<option value="Mongolia">Mongolia</option>
														<option value="Montserrat">Montserrat</option>
														<option value="Morocco">Morocco</option>
														<option value="Mozambique">Mozambique</option>
														<option value="Myanmar">Myanmar</option>
														<option value="Namibia">Namibia</option>
														<option value="Nauru">Nauru</option>
														<option value="Nepal">Nepal</option>
														<option value="Netherlands">Netherlands</option>
														<option value="Netherlands Antilles">Netherlands Antilles</option>
														<option value="New Caledonia">New Caledonia</option>
														<option value="New Zealand">New Zealand</option>
														<option value="Nicaragua">Nicaragua</option>
														<option value="Niger">Niger</option>
														<option value="Nigeria">Nigeria</option>
														<option value="Niue">Niue</option>
														<option value="Norfolk Island">Norfolk Island</option>
														<option value="Northern Mariana Islands">Northern Mariana Islands</option>
														<option value="Norway">Norway</option>
														<option value="Oman">Oman</option>
														<option value="Pakistan">Pakistan</option>
														<option value="Palau">Palau</option>
														<option value="Panama">Panama</option>
														<option value="Papua New Guinea">Papua New Guinea</option>
														<option value="Paraguay">Paraguay</option>
														<option value="Peru">Peru</option>
														<option value="Philippines">Philippines</option>
														<option value="Pitcairn">Pitcairn</option>
														<option value="Poland">Poland</option>
														<option value="Portugal">Portugal</option>
														<option value="Puerto Rico">Puerto Rico</option>
														<option value="Qatar">Qatar</option>
														<option value="Reunion">Reunion</option>
														<option value="Romania">Romania</option>
														<option value="Russia">Russian Federation</option>
														<option value="Rwanda">Rwanda</option>
														<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
														<option value="Saint LUCIA">Saint LUCIA</option>
														<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
														<option value="Samoa">Samoa</option>
														<option value="San Marino">San Marino</option>
														<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
														<option value="Saudi Arabia">Saudi Arabia</option>
														<option value="Senegal">Senegal</option>
														<option value="Seychelles">Seychelles</option>
														<option value="Sierra">Sierra Leone</option>
														<option value="Singapore">Singapore</option>
														<option value="Slovakia">Slovakia (Slovak Republic)</option>
														<option value="Slovenia">Slovenia</option>
														<option value="Solomon Islands">Solomon Islands</option>
														<option value="Somalia">Somalia</option>
														<option value="South Africa">South Africa</option>
														<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
														<option value="Span">Spain</option>
														<option value="SriLanka">Sri Lanka</option>
														<option value="St. Helena">St. Helena</option>
														<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
														<option value="Sudan">Sudan</option>
														<option value="Suriname">Suriname</option>
														<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
														<option value="Swaziland">Swaziland</option>
														<option value="Sweden">Sweden</option>
														<option value="Switzerland">Switzerland</option>
														<option value="Syria">Syrian Arab Republic</option>
														<option value="Taiwan">Taiwan, Province of China</option>
														<option value="Tajikistan">Tajikistan</option>
														<option value="Tanzania">Tanzania, United Republic of</option>
														<option value="Thailand">Thailand</option>
														<option value="Togo">Togo</option>
														<option value="Tokelau">Tokelau</option>
														<option value="Tonga">Tonga</option>
														<option value="Trinidad and Tobago">Trinidad and Tobago</option>
														<option value="Tunisia">Tunisia</option>
														<option value="Turkey">Turkey</option>
														<option value="Turkmenistan">Turkmenistan</option>
														<option value="Turks and Caicos">Turks and Caicos Islands</option>
														<option value="Tuvalu">Tuvalu</option>
														<option value="Uganda">Uganda</option>
														<option value="Ukraine">Ukraine</option>
														<option value="United Arab Emirates">United Arab Emirates</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="United States">United States</option>
														<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
														<option value="Uruguay">Uruguay</option>
														<option value="Uzbekistan">Uzbekistan</option>
														<option value="Vanuatu">Vanuatu</option>
														<option value="Venezuela">Venezuela</option>
														<option value="Vietnam">Viet Nam</option>
														<option value="Virgin Islands (British)">Virgin Islands (British)</option>
														<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
														<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
														<option value="Western Sahara">Western Sahara</option>
														<option value="Yemen">Yemen</option>
														<option value="Serbia">Serbia</option>
														<option value="Zambia">Zambia</option>
														<option value="Zimbabwe">Zimbabwe</option>
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
														<option selected>Select Country</option>
														<option value="Afghanistan">Afghanistan</option>
														<option value="Albania">Albania</option>
														<option value="Algeria">Algeria</option>
														<option value="American Samoa">American Samoa</option>
														<option value="Andorra">Andorra</option>
														<option value="Angola">Angola</option>
														<option value="Anguilla">Anguilla</option>
														<option value="Antartica">Antarctica</option>
														<option value="Antigua and Barbuda">Antigua and Barbuda</option>
														<option value="Argentina">Argentina</option>
														<option value="Armenia">Armenia</option>
														<option value="Aruba">Aruba</option>
														<option value="Australia">Australia</option>
														<option value="Austria">Austria</option>
														<option value="Azerbaijan">Azerbaijan</option>
														<option value="Bahamas">Bahamas</option>
														<option value="Bahrain">Bahrain</option>
														<option value="Bangladesh">Bangladesh</option>
														<option value="Barbados">Barbados</option>
														<option value="Belarus">Belarus</option>
														<option value="Belgium">Belgium</option>
														<option value="Belize">Belize</option>
														<option value="Benin">Benin</option>
														<option value="Bermuda">Bermuda</option>
														<option value="Bhutan">Bhutan</option>
														<option value="Bolivia">Bolivia</option>
														<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
														<option value="Botswana">Botswana</option>
														<option value="Bouvet Island">Bouvet Island</option>
														<option value="Brazil">Brazil</option>
														<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
														<option value="Brunei Darussalam">Brunei Darussalam</option>
														<option value="Bulgaria">Bulgaria</option>
														<option value="Burkina Faso">Burkina Faso</option>
														<option value="Burundi">Burundi</option>
														<option value="Cambodia">Cambodia</option>
														<option value="Cameroon">Cameroon</option>
														<option value="Canada">Canada</option>
														<option value="Cape Verde">Cape Verde</option>
														<option value="Cayman Islands">Cayman Islands</option>
														<option value="Central African Republic">Central African Republic</option>
														<option value="Chad">Chad</option>
														<option value="Chile">Chile</option>
														<option value="China">China</option>
														<option value="Christmas Island">Christmas Island</option>
														<option value="Cocos Islands">Cocos (Keeling) Islands</option>
														<option value="Colombia">Colombia</option>
														<option value="Comoros">Comoros</option>
														<option value="Congo">Congo</option>
														<option value="Congo">Congo, the Democratic Republic of the</option>
														<option value="Cook Islands">Cook Islands</option>
														<option value="Costa Rica">Costa Rica</option>
														<option value="Cota D'Ivoire">Cote d'Ivoire</option>
														<option value="Croatia">Croatia (Hrvatska)</option>
														<option value="Cuba">Cuba</option>
														<option value="Cyprus">Cyprus</option>
														<option value="Czech Republic">Czech Republic</option>
														<option value="Denmark">Denmark</option>
														<option value="Djibouti">Djibouti</option>
														<option value="Dominica">Dominica</option>
														<option value="Dominican Republic">Dominican Republic</option>
														<option value="East Timor">East Timor</option>
														<option value="Ecuador">Ecuador</option>
														<option value="Egypt">Egypt</option>
														<option value="El Salvador">El Salvador</option>
														<option value="Equatorial Guinea">Equatorial Guinea</option>
														<option value="Eritrea">Eritrea</option>
														<option value="Estonia">Estonia</option>
														<option value="Ethiopia">Ethiopia</option>
														<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
														<option value="Faroe Islands">Faroe Islands</option>
														<option value="Fiji">Fiji</option>
														<option value="Finland">Finland</option>
														<option value="France">France</option>
														<option value="France Metropolitan">France, Metropolitan</option>
														<option value="French Guiana">French Guiana</option>
														<option value="French Polynesia">French Polynesia</option>
														<option value="French Southern Territories">French Southern Territories</option>
														<option value="Gabon">Gabon</option>
														<option value="Gambia">Gambia</option>
														<option value="Georgia">Georgia</option>
														<option value="Germany">Germany</option>
														<option value="Ghana">Ghana</option>
														<option value="Gibraltar">Gibraltar</option>
														<option value="Greece">Greece</option>
														<option value="Greenland">Greenland</option>
														<option value="Grenada">Grenada</option>
														<option value="Guadeloupe">Guadeloupe</option>
														<option value="Guam">Guam</option>
														<option value="Guatemala">Guatemala</option>
														<option value="Guinea">Guinea</option>
														<option value="Guinea-Bissau">Guinea-Bissau</option>
														<option value="Guyana">Guyana</option>
														<option value="Haiti">Haiti</option>
														<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
														<option value="Holy See">Holy See (Vatican City State)</option>
														<option value="Honduras">Honduras</option>
														<option value="Hong Kong">Hong Kong</option>
														<option value="Hungary">Hungary</option>
														<option value="Iceland">Iceland</option>
														<option value="India">India</option>
														<option value="Indonesia">Indonesia</option>
														<option value="Iran">Iran (Islamic Republic of)</option>
														<option value="Iraq">Iraq</option>
														<option value="Ireland">Ireland</option>
														<option value="Israel">Israel</option>
														<option value="Italy">Italy</option>
														<option value="Jamaica">Jamaica</option>
														<option value="Japan">Japan</option>
														<option value="Jordan">Jordan</option>
														<option value="Kazakhstan">Kazakhstan</option>
														<option value="Kenya">Kenya</option>
														<option value="Kiribati">Kiribati</option>
														<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
														<option value="Korea">Korea, Republic of</option>
														<option value="Kuwait">Kuwait</option>
														<option value="Kyrgyzstan">Kyrgyzstan</option>
														<option value="Lao">Lao People's Democratic Republic</option>
														<option value="Latvia">Latvia</option>
														<option value="Lebanon">Lebanon</option>
														<option value="Lesotho">Lesotho</option>
														<option value="Liberia">Liberia</option>
														<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
														<option value="Liechtenstein">Liechtenstein</option>
														<option value="Lithuania">Lithuania</option>
														<option value="Luxembourg">Luxembourg</option>
														<option value="Macau">Macau</option>
														<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
														<option value="Madagascar">Madagascar</option>
														<option value="Malawi">Malawi</option>
														<option value="Malaysia">Malaysia</option>
														<option value="Maldives">Maldives</option>
														<option value="Mali">Mali</option>
														<option value="Malta">Malta</option>
														<option value="Marshall Islands">Marshall Islands</option>
														<option value="Martinique">Martinique</option>
														<option value="Mauritania">Mauritania</option>
														<option value="Mauritius">Mauritius</option>
														<option value="Mayotte">Mayotte</option>
														<option value="Mexico">Mexico</option>
														<option value="Micronesia">Micronesia, Federated States of</option>
														<option value="Moldova">Moldova, Republic of</option>
														<option value="Monaco">Monaco</option>
														<option value="Mongolia">Mongolia</option>
														<option value="Montserrat">Montserrat</option>
														<option value="Morocco">Morocco</option>
														<option value="Mozambique">Mozambique</option>
														<option value="Myanmar">Myanmar</option>
														<option value="Namibia">Namibia</option>
														<option value="Nauru">Nauru</option>
														<option value="Nepal">Nepal</option>
														<option value="Netherlands">Netherlands</option>
														<option value="Netherlands Antilles">Netherlands Antilles</option>
														<option value="New Caledonia">New Caledonia</option>
														<option value="New Zealand">New Zealand</option>
														<option value="Nicaragua">Nicaragua</option>
														<option value="Niger">Niger</option>
														<option value="Nigeria">Nigeria</option>
														<option value="Niue">Niue</option>
														<option value="Norfolk Island">Norfolk Island</option>
														<option value="Northern Mariana Islands">Northern Mariana Islands</option>
														<option value="Norway">Norway</option>
														<option value="Oman">Oman</option>
														<option value="Pakistan">Pakistan</option>
														<option value="Palau">Palau</option>
														<option value="Panama">Panama</option>
														<option value="Papua New Guinea">Papua New Guinea</option>
														<option value="Paraguay">Paraguay</option>
														<option value="Peru">Peru</option>
														<option value="Philippines">Philippines</option>
														<option value="Pitcairn">Pitcairn</option>
														<option value="Poland">Poland</option>
														<option value="Portugal">Portugal</option>
														<option value="Puerto Rico">Puerto Rico</option>
														<option value="Qatar">Qatar</option>
														<option value="Reunion">Reunion</option>
														<option value="Romania">Romania</option>
														<option value="Russia">Russian Federation</option>
														<option value="Rwanda">Rwanda</option>
														<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
														<option value="Saint LUCIA">Saint LUCIA</option>
														<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
														<option value="Samoa">Samoa</option>
														<option value="San Marino">San Marino</option>
														<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
														<option value="Saudi Arabia">Saudi Arabia</option>
														<option value="Senegal">Senegal</option>
														<option value="Seychelles">Seychelles</option>
														<option value="Sierra">Sierra Leone</option>
														<option value="Singapore">Singapore</option>
														<option value="Slovakia">Slovakia (Slovak Republic)</option>
														<option value="Slovenia">Slovenia</option>
														<option value="Solomon Islands">Solomon Islands</option>
														<option value="Somalia">Somalia</option>
														<option value="South Africa">South Africa</option>
														<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
														<option value="Span">Spain</option>
														<option value="SriLanka">Sri Lanka</option>
														<option value="St. Helena">St. Helena</option>
														<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
														<option value="Sudan">Sudan</option>
														<option value="Suriname">Suriname</option>
														<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
														<option value="Swaziland">Swaziland</option>
														<option value="Sweden">Sweden</option>
														<option value="Switzerland">Switzerland</option>
														<option value="Syria">Syrian Arab Republic</option>
														<option value="Taiwan">Taiwan, Province of China</option>
														<option value="Tajikistan">Tajikistan</option>
														<option value="Tanzania">Tanzania, United Republic of</option>
														<option value="Thailand">Thailand</option>
														<option value="Togo">Togo</option>
														<option value="Tokelau">Tokelau</option>
														<option value="Tonga">Tonga</option>
														<option value="Trinidad and Tobago">Trinidad and Tobago</option>
														<option value="Tunisia">Tunisia</option>
														<option value="Turkey">Turkey</option>
														<option value="Turkmenistan">Turkmenistan</option>
														<option value="Turks and Caicos">Turks and Caicos Islands</option>
														<option value="Tuvalu">Tuvalu</option>
														<option value="Uganda">Uganda</option>
														<option value="Ukraine">Ukraine</option>
														<option value="United Arab Emirates">United Arab Emirates</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="United States">United States</option>
														<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
														<option value="Uruguay">Uruguay</option>
														<option value="Uzbekistan">Uzbekistan</option>
														<option value="Vanuatu">Vanuatu</option>
														<option value="Venezuela">Venezuela</option>
														<option value="Vietnam">Viet Nam</option>
														<option value="Virgin Islands (British)">Virgin Islands (British)</option>
														<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
														<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
														<option value="Western Sahara">Western Sahara</option>
														<option value="Yemen">Yemen</option>
														<option value="Serbia">Serbia</option>
														<option value="Zambia">Zambia</option>
														<option value="Zimbabwe">Zimbabwe</option>
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
				setTimeout(() => {
				location.reload();
				}, 3000);
			})
			.catch(err => {
				Swal.fire({
					title: "Oops...",
					text: "Something went wrong, try again later.",
					icon: "error"
				})
				handleFormError(err);
				setTimeout(() => {
				location.reload();
				}, 3000);
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
				setTimeout(() => {
				location.reload();
				}, 3000);
			})
			.catch(err => {
				handleFormError(err);
				setTimeout(() => {
				location.reload();
				}, 3000);
			})
		}
	</script>

</html>