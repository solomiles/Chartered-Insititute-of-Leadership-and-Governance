@extends('layouts.master')

@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                <h6 class="mb-0 text-uppercase">Diploma</h6>
                <hr>
				<div class="card cards">
					<div class="card-body">
						<div class="table-responsive">
							<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group">      
                                            
														 </div></div><div class="col-sm-12 col-md-6"><div id="example2_filter" class="dataTables_filter">
                                                                </div></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
								<thead>
									<tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="S/N: activate to sort column ascending" style="width: 69px;">S/N</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 108px;">First Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 108px;">Last Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column descending" style="width: 120px;">Email Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Resume: activate to sort column ascending" style="width: 68.05px;">Resume</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Which Programme are you applying for?: activate to sort column descending" style="width: 100px;">Which Programme are <br>you applying for?</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Which country are you applying from?: activate to sort column ascending" style="width: 100px;">Which country are <br>you applying from?</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column descending" style="width: 69px;">Action    </th>
                                        </tr>
                                    </thead>
								<tbody>	
									@foreach($diplomas as $diploma)
                                    	<tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>{{$diploma->firstname}}</td>
                                            <td> {{$diploma->lastname}} </td>
                                            <td>{{$diploma->email}}</td>
                                            <td><a href=" {{ url('diploma/'. $diploma->resume) }}" download="{{$diploma->firstname}}">{{$diploma->resume}}</a></td>
                                            <td>{{$diploma->program}}</td>
                                            <td>{{$diploma->country}}</td>
                                            <td>
												<div class=" btn-group">
													<div class="col-md-4">
														<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal" data-id="{{$diploma->id}}" data-email="{{ $diploma->email }}" data-program="{{ $diploma->program }}"  data-country="{{ $diploma->country }}" data-firstname="{{$diploma->firstname}}" data-lastname="{{$diploma->lastname}}">
															<span class="lni lni-eye"></span>
														</button> 
													</div>
													<span class="col-md-3"></span>
													<div class="col-md-4">
														<button onclick="removeDiploma()" class="btn btn-outline-danger remove-btn">
															<span id="remove-txt" class="lni lni-trash"></span>
                                                            
                                                            <div class="spinner-border spinner-border-sm btn-pr p-1"
                                                                id="remove-spinner" style="display: none;" role="status">
                                                                <!-- <span class="sr-only">Deleting...</span> -->
                                                            </div>
														</button>
													</div>
													
												</div>
											</td>
                                        </tr>
									@endforeach
                                </tbody>
							</table>
                            </div>
                        </div>
						</div>
					</div>
				</div>
			</div>

            <div class="modal fade" id="exampleLargeModal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Diploma Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
							<p>Firstname:  <span class="firstname"></span></p>
							<p>Lastname:  <span class="lastname"></span></p>
							<p>Email:  <span class="email"></span></p>
							<p>Programe:  <span class="program"></span></p>
							<p>Country: <span class="country"></span></p>
						</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
	
		</div>
        <script>
            // Remove Diploma
            function removeDiploma() {
                spin('remove')

                let url = `{{ url('admin/diploma/delete/' . $diploma->id) }}`;

                goGet(url)
                    .then(res => {
                        spin('remove')
                        showAlert(true, res.message)

                        setTimeout(() => {
                            location.reload()
                        }, 2000)
                    })
                    .catch(err => {
                        spin('status')
                        showAlert(false, "Oops! Something's not right. Reload Page")
                    })
            }
        </script>
		<!--end page wrapper -->
@endsection		



	