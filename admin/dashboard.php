<?php include('header.php') ?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        
        
        <div class="row">
              

		<!-- Page Header -->
		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<div>
				<h4 class="mb-0">Hi, welcome back!</h4>
				<p class="mb-0 text-muted">Sales monitoring dashboard template.</p>
			</div>
			
		</div>
		<!-- End Page Header -->

		<!-- row -->

		<div class="col-lg-12 col-xxl-12">
			<div class="card bg-100 bg-warning-gradient shadow-none border">
				<div class="card-body position-relative">
					<div class="row g-2 align-items-sm-center">
						<div class="col-auto">
							<img src="https://demo.neomlmsoftware.com/binary/assets//images/icons/index.png" alt="" height="55" />
						</div>
						<div class="col"> 
							<div class="row align-items-center ">
								<label class="text-fixed-white">Referral Link</label>
								<div class="col-sm-9 text-primary">
									<p class="text-fixed-white" id="post-shortlink">https://demo.neomlmsoftware.com/binary/referral/admin</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3 ">                   
							<div class="row align-items-center">
								<button class="btn btn-primary col-sm-6" id="copy-button" onclick="copyReferral('#post-shortlink')" data-clipboard-target="#post-shortlink" class="card-icon">Copy <i class="fa fa-copy"></i></button>
								<a href="https://demo.neomlmsoftware.com/binary/referral/admin" class="btn btn-link col-sm-6 text-white">Go <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card overflow-hidden sales-card bg-primary-gradient">
					<div class="px-3 pt-3  pb-2 pt-0">
						<div >
							<h6 class="mb-3 fs-12 text-fixed-white">TOTAL USERS</h6>
						</div>
						<div class="pb-0 mt-0">
							<div class="d-flex">
								<div >
									<h4 class="fs-20 fw-bold mb-1 text-fixed-white">63</h4>
									<p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
								</div>

																<span class="float-end my-auto ms-auto">
									<i class="fas fa-arrow-circle-down text-fixed-white"></i>
									<span class="text-fixed-white op-7"> --1</span>
								</span>

								
							</div>
						</div>
					</div>
					<div id="compositeline"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card overflow-hidden sales-card bg-danger-gradient">
					<div class="px-3 pt-3  pb-2 pt-0">
						<div >
							<h6 class="mb-3 fs-12 text-fixed-white">TODAY EARNINGS</h6>
						</div>
						<div class="pb-0 mt-0"> 
							
							<div class="d-flex">
								<div >
									<h4 class="fs-20 fw-bold mb-1 text-fixed-white">$0.00</h4>
									<p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
								</div>
																<span class="float-end my-auto ms-auto">
									<i class="fas fa-arrow-circle-down text-fixed-white"></i>
									<span class="text-fixed-white op-7"> 0%</span>
								</span>
								 


							</div>
							
						</div>
					</div>
					<div id="compositeline2"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card overflow-hidden sales-card bg-success-gradient">
					<div class="px-3 pt-3  pb-2 pt-0">
						<div >
							<h6 class="mb-3 fs-12 text-fixed-white">TOTAL EARNINGS</h6>
						</div>
						<div class="pb-0 mt-0"> 
							
							<div class="d-flex">
								<div>
									<h4 class="fs-20 fw-bold mb-1 text-fixed-white">$1,220.00</h4>
									<p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
								</div>
																<span class="float-end my-auto ms-auto">
									<i class="fas fa-arrow-circle-up text-fixed-white"></i>
									<span class="text-fixed-white op-7"> 200%</span>
								</span>
								 

							</div>
							
						</div>
					</div>
					<div id="compositeline3"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
				<div class="card overflow-hidden sales-card bg-warning-gradient">
					<div class="px-3 pt-3  pb-2 pt-0">
						<div >
							<h6 class="mb-3 fs-12 text-fixed-white">PACKAGE SOLD</h6>


						</div>
						<div class="pb-0 mt-0">
							<div class="d-flex">
								<div >
									<h4 class="fs-20 fw-bold mb-1 text-fixed-white">$6,200.00</h4>
									<p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
								</div>
																<span class="float-end my-auto ms-auto">
									<i class="fas fa-arrow-circle-down text-fixed-white"></i>
									<span class="text-fixed-white op-7">$0.00</span>
								</span>
															</div>
						</div>
					</div>
					<div id="compositeline4"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-6 col-xl-6">
			<div class="card card-img-holder">
				<div class="card-body list-icons p-0">
					<div class="clearfix px-4 pt-3">
						<div class="float-end  mt-2">
							<span class="text-primary ">
								<i class="far fa-clock fs-5"></i>
							</span>
						</div>
						<div class="float-start">
							<p class="card-text text-muted mb-1">Local Time</p>
							<h4><span id="local-time"></span></h4>
						</div>
					</div>
					<div class="card-footer p-0">
						<p class="text-muted mb-0 px-4 p-3"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-6 col-xl-6">
			<div class="card card-img-holder">
				<div class="card-body list-icons p-0">
					<div class="clearfix px-4 pt-3">
						<div class="float-end  mt-2">
							<span class="text-primary ">
								<i class="far fa-clock fs-5"></i>
							</span>
						</div>
						<div class="float-start">
							<p class="card-text text-muted mb-1">Server Time</p>
							<h4><span id="server-time"></span></h4>
							
						</div>
					</div>
					<div class="card-footer p-0">
						<p class="text-muted mb-0 px-4 p-3"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xl-7">
				<div class="card">
					<div class="card-header pb-0">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mb-0">Order status</h4>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
								class="fe fe-more-horizontal"></i></a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="javascript:void(0);">Action</a>
									<a class="dropdown-item" href="javascript:void(0);">Another
									Action</a>
									<a class="dropdown-item" href="javascript:void(0);">Something Else
									Here</a>
								</div>
							</div>
							<p class="fs-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
						</div>
						<div class="card-body">
							<div class="total-revenue">
								<div>
									<h4>600</h4>
									<label><span class="bg-primary"></span>Referral</label>
								</div>
								<div>
									<h4>620</h4>
									<label><span class="bg-danger"></span>Binary</label>
								</div>
								<div>
									<h4>3639</h4>
									<label><span class="bg-warning"></span>Level</label>
								</div>
							</div>
							<div id="Sales-bar" class="sales-bar mt-4"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-xl-5">
					<div class="card card-dashboard-map-one" style="padding-bottom: 45px;">
						<h4 class="card-title">Active Inactive Users</h4>
						<p class="fs-12 text-muted"></p>
						<canvas id="bonus-doughnut" class="chartjs-chart"></canvas>
					</div>
				</div>
			</div>
			<!-- row closed -->

			<!-- row opened -->
			<div class="row">
				<div class="col-xl-4 col-md-12 col-lg-12">
					<div class="card overflow-hidden">
						<div class="card-header pb-1">
							<h3 class="card-title mb-2">Recent Customers</h3>
							<p class="fs-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
						</div>
						
						<div class="card-body p-0 customers mt-1">

							<div class="list-group list-lg-group list-group-flush">
																
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=95664">95664</a></h5>
													<p class="mb-0 fs-13 text-muted">stanley
																												<span class="text-success ms-2 d-inline-block">Free</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark1" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
								
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=NEO31512">NEO31512</a></h5>
													<p class="mb-0 fs-13 text-muted">JnDJy
																												<span class="text-success ms-2 d-inline-block">Paid</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark2" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
								
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=NEO91910">NEO91910</a></h5>
													<p class="mb-0 fs-13 text-muted">FVgdV
																												<span class="text-success ms-2 d-inline-block">Paid</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark3" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
								
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=NEO61866">NEO61866</a></h5>
													<p class="mb-0 fs-13 text-muted">QnPfK
																												<span class="text-success ms-2 d-inline-block">Paid</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark4" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
								
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=NEO87289">NEO87289</a></h5>
													<p class="mb-0 fs-13 text-muted">PHtKR
																												<span class="text-success ms-2 d-inline-block">Paid</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark5" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
								
								<div class="list-group-item list-group-item-action">
									<div class="d-flex">
										<img class="avatar avatar-md rounded-circle my-auto me-3" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="Image description">


										<div class="flex-grow-1">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 fs-15"><a href="https://demo.neomlmsoftware.com/binary/admin/member/profile/?user_name=NEO90070">NEO90070</a></h5>
													<p class="mb-0 fs-13 text-muted">pJyIC
																												<span class="text-success ms-2 d-inline-block">Paid</span>
																											</p>

												</div>
												
												<div class="ms-auto w-45 fs-16 mt-2">

													<div id="spark6" class="w-100"></div>
												</div>
												
											</div>
										</div>


									</div>
								</div>
									
							</div>
							
						</div>
						
						

					</div>
				</div>
				<div class="col-xl-4 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header pb-1">
							<h3 class="card-title mb-2"> Package Activity</h3>
							<p class="fs-12 mb-0 text-muted">Package activities are the tactics that salespeople use to achieve their goals and objective</p>
						</div>


						

						<div class="product-timeline card-body pt-2 mt-1" style="padding-bottom:70px;">
							
							<ul class="timeline-1 mb-0">
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">UtQTN</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">JEDgM</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">LSyqw</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">gtLDy</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">pJyIC</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
																
								<li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i><span class="fw-medium mb-4 fs-14">PHtKR</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 months ago</a>
									<p class="mb-0 text-muted fs-12">Package 3 </p>
								</li>
								
							</ul>
							
						</div>



					</div>
				</div>
				<div class="col-xl-4 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header pb-0" style="padding-bottom:25px;">
							<h3 class="card-title mb-2">Payout Activity</h3>
							<p class="fs-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
						</div>
						<div class="card-body sales-info  pt-0" >
							<div id="chart" class="ht-150"></div>
							<div class="row sales-infomation pb-0 mb-0 mx-auto w-100" style="padding-top:10px;">
								<div class="col-md-6 col">
									<p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Released</p>
									<h3 class="mb-1">0</h3>
									<div class="d-flex">
										<!-- <p class="text-muted ">Last 6 months</p> -->
									</div>
								</div>
								<div class="col-md-6 col">
									<p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Pending</p>
									<h3 class="mb-1">0</h3>
									<div class="d-flex">
										<!-- <p class="text-muted">Last 6 months</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card ">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="d-flex align-items-center pb-2">
										<p class="mb-0">Total Users</p>
									</div>
									<h4 class="fw-bold mb-2">63</h4>
									<div class="progress progress-style progress-sm">
										<div class="progress-bar bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
									</div>
								</div>
								<div class="col-md-6 mt-4 mt-md-0">
									<div class="d-flex align-items-center pb-2">
										<p class="mb-0">Active Users</p>
									</div>
									<h4 class="fw-bold mb-2">63</h4>
									<div class="progress progress-style progress-sm">
										<div class="progress-bar bg-danger-gradient" style="width: 100%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- row close -->

			<!-- row opened -->
			<div class="row">
				<div class="col-md-12 col-lg-4 col-xl-4">
					<div class="card top-countries-card h-100"> <!-- Added h-100 class for equal height -->
						<div class="card-header p-0">
							<h6 class="card-title fs-13 mb-2">Top Countries</h6>
							<span class="d-block mg-b-10 text-muted fs-12 mb-2">Sales performance revenue based by country</span>
						</div>
						<div class="list-group border" style="padding-bottom: 40px;">
														<div class="list-group-item border-top-0" id="br-t-0">
								<p>Hungary</p><span>63</span>
							</div>
														<div class="list-group-item border-top-0" id="br-t-0">
								<p>Albania</p><span>1</span>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-8 col-xl-8">
					<div class="card card-table h-100"> <!-- Added h-100 class for equal height -->
						<div class="card-header p-0 d-flex justify-content-between">
							<h4 class="card-title mb-1">Your Most Recent Earnings</h4>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i class="fe fe-more-horizontal"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0);">Action</a>
								<a class="dropdown-item" href="javascript:void(0);">Another Action</a>
								<a class="dropdown-item" href="javascript:void(0);">Something Else Here</a>
							</div>
						</div>
						<span class="fs-12 text-muted mb-3">These are your most recent earnings for the past few dates.</span>
						<div class="table-responsive country-table">
							<table class="table table-striped table-bordered mb-0 text-nowrap">
								<thead>
									<tr>
										<th class="wd-lg-25p">Date</th>
										<th class="wd-lg-25p">From User</th>
										<th class="wd-lg-25p">Category</th>
										<th class="wd-lg-25p">Earnings</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- /row -->

		
	
	
        </div>


    </div>
</div>

<?php include('footer.php') ?>