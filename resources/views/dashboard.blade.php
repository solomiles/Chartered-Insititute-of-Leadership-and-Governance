@extends('layouts.master')

	
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
									  <h4 class="mb-0 text-white">{{$total_diploma}}</h4>
									  <p class="mb-0 text-white">Total No of Diploma</p>
								   </div>
								   <div class="fs-2 text-white">
									<i class="lni lni-graduation"></i>
								   </div>
								</div>
								<div class="progress rounded-4 my-3 bg-light-transparent-2" style="height:5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: {{$total_diploma}}%"></div>
									</div>
									</div>
						</div>
					</div>
					<div class="col">
						<div class="cards card rounded-4 bg-texture-wave-c">
							<div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                   <div class="">
									  <h4 class="mb-0 text-white">{{$total_membership}}</h4>
									  <p class="mb-0 text-white">Total No of Membership</p>
								   </div>
								   <div class="fs-2 text-white">
									<i class="lni lni-users"></i>
								   </div>
								</div>
								<div class="progress rounded-4 my-3 bg-light-transparent-2" style="height:5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: {{$total_membership}}%"></div>
								</div>
								
							</div>
						</div>
					</div>
				 </div>
			</div>
		</div>
		<!--end page wrapper -->
		