<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Invite a Friend</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Networks</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Invite a friend</li>
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
		<div class="card overflow-hidden mb-0 border-0 shadow-none">
			<div class="card-body text-center py-5">
				<div class="row justify-content-center">
					<div class="col-7 col-md-5"><img class="img-fluid" src="https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/41.png" alt="" style="width:58%;" /></div>
				</div>
				<h3 class="mt-3 fw-normal fs-2 mt-md-4 fs-md-3">Invite a friend, you both get $100 $10.00</h3>
				<p class="lead mb-5">Invite your friends and start working together in seconds. <br class="d-none d-md-block" />Everyone you invite will receive a welcome email.
				</p>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<form action="https://demo.neomlmsoftware.com/binary/admin/network/invite-friend" method="post" accept-charset="utf-8">

						<div class="row gx-2">
							<div class="col-sm mb-2 mb-sm-0">
								<input class="form-control" name="email" id="subscribe-email" type="email" placeholder="Email Address" aria-label="Recipient's username" required />
							</div>
							<div class="col-sm-auto">
								<button class="btn btn-primary d-block w-100 email-button" id="submit" type="submit" name="submit" value="submit">Send Invitation</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="card-footer bg-light text-center pt-4">
				<div class="row justify-content-center">
					<div class="col-11 col-sm-10">
						<h4 class="fw-normal mb-0 fs-1 fs-md-2">More ways to <br class="d-sm-none" />invite your friends</h4>
						<div class="modal-body bg-light p-4">
							<form>
								<input class="form-control form-control-sm invitation-link text-center" id="myInput" value="https://demo.neomlmsoftware.com/binary/referral/admin" />
							</form>
						</div>
						<div class="row gx-2 my-4">
							<div class="col-lg-4">
								<button class="btn btn-falcon-default d-block w-100 mb-2 mb-xl-0"><img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/gmail.png" width="20" alt="" /><span class="fw-medium ms-2"><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1" target="_blank">Invite from Gmail</a></span></button>
							</div>
							<div class="col-lg-4">
								<button class="btn btn-falcon-default d-block w-100 mb-2 mb-xl-0" data-bs-toggle="modal" data-bs-target="#copyLinkModal"><span class="fas fa-link text-700"></span><span class="fw-medium ms-2">Copy Link</span></button>
								<div class="modal fade" id="copyLinkModal" tabindex="-1" role="dialog" aria-labelledby="copyLinkModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content overflow-hidden">
											<div class="modal-header">
												<h5 class="modal-title" id="copyLinkModalLabel">Your personal referral link</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body bg-light p-4">
												<div class="row gx-2">
													<div class="col-sm mb-2 mb-sm-0">
														<input class="form-control form-control-sm invitation-link" id="myInput" value=https://demo.neomlmsoftware.com/binary/referral/admin />
													</div>
													<div class="col-sm-auto">
														<button class="btn btn-falcon-default d-block w-100  " onclick="myFunction()">Copy</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<button class="btn btn-falcon-default d-block w-100 ms-0 mb-xl-0"><span class="fab fa-facebook-square text-facebook" data-fa-transform="grow-2"></span><span class="fw-medium ms-2"><a href="http://www.facebook.com/sharer.php?u=https://demo.neomlmsoftware.com/binary/referral/admin" target="_blank">Share on Facebook</a></span></button>
							</div>
						</div>
						<p class="mb-2 fs--1">Once you’ve invited friends, you can  <a href='https://demo.neomlmsoftware.com/binary/admin/network/referral-tree'>view the status of your referrals</a><br class="d-none d-lg-block d-xxl-none" /> or visit our<a href="https://neomlmsoftware.com/contact/">Help Center </a>if you have any questions. </p>
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