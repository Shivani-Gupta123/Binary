<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Wallet summary</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Wallet summary</li>
                                            </ol>
                </nav>
            </div>

            <div class="d-flex my-xl-auto right-content align-items-center">
                <div class="pe-1 mb-xl-0">
                    <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="pe-1 mb-xl-0">
                    <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
                </div>
                <div class="pe-1 mb-xl-0">
                    <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
                </div>
                <div class="mb-xl-0">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                            14 Aug 2019
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
                            <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row">
             
<div class="row">
	<div class="col-sm-12">
		<div class="row g-0">
			<div class="col-lg-7 pe-lg-3 mb-3">
				<div class="card h-lg-100">
					<div class="card-header">
						<div class="row flex-between-center">
							<div class="col-auto">
								<h6 class="mb-0">Total Debit</h6>
							</div>
							<div class="card-body d-flex flex-column justify-content-between">
								<div class="row align-items-center">
									<div class="col-md-5 col-xxl-12 mb-xxl-1">
										<div class="position-relative">
										<canvas id="wallet-summary-pie" class="chartjs-chart"></canvas>
										</div>
									</div>
									<div class="col-xxl-12 col-md-7">
										<div class="d-flex flex-between-center border-bottom py-2 pt-md-0 pt-xxl-3">
											<div class="d-flex"><span class="fas fa-circle text-primary me-2"></span>
												<h6 class="text-500 mb-0">Credit</h6>
											</div>
											<h6 class="text-700 mb-0">$500,000,000,000,179.00</h6>
										</div>
										<div class="d-flex flex-between-center border-bottom py-2">
											<div class="d-flex"><span class="fas fa-circle text-info me-2"></span>
												<h6 class="text-500 mb-0">Debit </h6>
											</div>
											<h6 class="text-700 mb-0">$5,000,220.00</h6>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
			<div class="col-lg-5 col-md-4">
				<div class="card bg-info-gradient">
					<div class="card-body">
						<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="card-body text-fixed-white">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fa fa-wallet fs-2"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-fixed-white">Total Wallet</span>
												<h3 class="text-fixed-white mb-0">$499,999,994,999,959.00</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card-header">
	<h5>Credit Summary</h5>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="row g-3 mb-3">
			<div class="col-sm-6 col-md-4 ">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-1.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Referral Bonus<span class="badge badge-soft-warning rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-2.png);">
					</div>
					<!--/.bg-holder-->

					<div class="card-body position-relative">
						<h6>Level Bonus<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{ "endValue":159,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-3.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Fund Added<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{ "endValue":500000000000000,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-2.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Rank Bonus<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-1.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Binary Bonus<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{ "endValue":20,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card-header">
	<h5>Debit Summary</h5>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="row g-3 mb-3">
			<div class="col-sm-6 col-md-4 ">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-3.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Wallet Withdrawal<span class="badge badge-soft-warning rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-1.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Ewallet Register<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-2.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Fund Deducted<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-1.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Fund Transfer/Received<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{ "endValue":-5000220,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-2.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Payout Delete<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 ">
				<div class="card overflow-hidden" style="min-width: 12rem">
					<div class="bg-holder bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-3.png);">
					</div>
					<div class="card-body position-relative">
						<h6>Payout Requests<span class="badge badge-soft-warning rounded-pill ms-2"></span></h6>
						<div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{ "endValue":0,"decimalPlaces":2,"prefix":"$" }'>0</div><a class="fw-semi-bold fs--1 text-nowrap" href="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>