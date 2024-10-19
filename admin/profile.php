<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Profile Settings</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                
<main class="main" id="top">


	
	<div class="row row-sm">
		<div class="col-xl-4">
			<div class="card mb-4">
				<div class="card-body">
					<div class="ps-0">
						<div class="main-profile-overview">
							<div class="main-img-user profile-user user-profile">
								<img alt="" src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png"><a
								class="fe fe-camera profile-edit text-primary" href="JavaScript:void(0);"></a>
							</div>
							<div class="d-flex justify-content-between mb-4">
								<div>
									<h5 class="main-profile-name">admin</h5>
									<p class="main-profile-name-text text-muted">Matrix Neo</p>
								</div>
							</div>
							<h6 class="fs-14">Bio</h6>
							<div class="main-profile-bio">
								pleasure rationally encounter but because pursue consequences that are
								extremely painful.occur in which toil and pain can procure him some great
								pleasure.. <a href="javascript:void(0);" class="text-primary">More</a>
							</div><!-- main-profile-bio -->
							<div class="row">
								<div class="col-md-4 col mb20">
									<h5 class="fs-17">947</h5>
									<h6 class="text-small text-muted fs-14 mb-0">Followers</h6>
								</div>
								<div class="col-md-4 col mb20">
									<h5 class="fs-17">583</h5>
									<h6 class="text-small text-muted fs-14 mb-0">Tweets</h6>
								</div>
								<div class="col-md-4 col mb20">
									<h5 class="fs-17">48</h5>
									<h6 class="text-small text-muted fs-14 mb-0">Posts</h6>
								</div>
							</div>
							<hr class="border-0">
							<label class="main-content-label fs-13 mb-4">Social</label>
							<div class="main-profile-social-list">
								<div class="media">
									<div class="media-icon bg-primary-transparent text-primary">
										<i class="icon ion-logo-facebook"></i>
									</div>
									<div class="media-body">
										<span>Facebook</span> <a href="javascript:void(0);" class="text-primary">http://facebook.com</a>
									</div>
								</div>
								<div class="media">
									<div class="media-icon bg-success-transparent text-success">
										<i class="icon ion-logo-twitter"></i>
									</div>
									<div class="media-body">
										<span>Twitter</span> <a href="javascript:void(0);" class="text-primary">https://www.linkedin.com/</a>
									</div>
								</div>
								<div class="media">
									<div class="media-icon bg-info-transparent text-info">
										<i class="icon ion-logo-linkedin"></i>
									</div>
									<div class="media-body">
										<span>Linkedin</span> <a href="javascript:void(0);" class="text-primary">https://www.linkedin.com/</a>
									</div>
								</div>
								<div class="media">
									<div class="media-icon bg-danger-transparent text-danger">
										<i class="icon ion-logo-instagram"></i>
									</div>
									<div class="media-body">
										<span>Instagram</span> <a href="javascript:void(0);" class="text-primary">https://www.instagram.com/</a>
									</div>
								</div>
							</div>
							<hr class="border-0">
							<h6 class="fs-14">Profile</h6>
							<div class="skill-bar mb-4 clearfix mt-3">
								<span>Completion Percentage(90.91%)</span>
								<div class="progress mt-2">
									<div class="progress-bar bg-primary-gradient" role="progressbar"
									aria-valuenow="90.91" aria-valuemin="0" aria-valuemax="100"
									style="width:90.91%" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							
						</div><!-- main-profile-overview -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
					
						<div class="row row-sm">
							<div class="col-sm-12 col-xl-12 col-lg-12 col-md-12 mb-2">	
								<form action="https://demo.neomlmsoftware.com/binary/admin/member/profile" id="user_wise" name="user_wise" method="post"  accept-charset="utf-8">

								<div class="row row-search">
									<div class="col-md-11">
										<select name="user_id" id="user_id" class="form-control user_name_ajax"  required>
																						<option value="16" selected>admin</option>
																					</select>
									</div>
									<div class="col-md-1">
										<button type="submit" class="profile-search btn btn-primary px-3"><i class="fa fa-eye m-auto px-1" id="togglePassword"></i></button>
									</div>
								</div>
								</form>
							</div>
							<div class="card"> 
								<div class="card-body">
									<div class="tabs-menu ">
										<!-- Tabs -->
										<ul class="nav nav-tabs profile navtab-custom panel-tabs">
											<li class="">
												<a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs"><i
													class="las la-user-circle fs-16 me-1"></i></span> <span
													class="hidden-xs">PROFILE </span> </a>
												</li>
												<li class="">
													<a href="#gallery" data-bs-toggle="tab" aria-expanded="false"> <span
														class="visible-xs"><i class="las la-images fs-15 me-1"></i></span>
														<span class="hidden-xs">PASSWORD</span> </a>
													</li>
													<li class="">
														<a href="#friends01" data-bs-toggle="tab" aria-expanded="false"> <span
															class="visible-xs"><i class="las la-life-ring fs-16 me-1"></i></span>
															<span class="hidden-xs">SECURITY PIN</span> </a>
														</li>
																												</ul>
													</div>
													<div class="tab-content border border-top-0 p-4 br-dark">

														<div class="tab-pane border-0 p-0 active" id="home">
															
															<div class="card-body ">
																<form action="https://demo.neomlmsoftware.com/binary/admin/member/profile?user_name=admin" role="form"  class="row g-3 needs-validation" method="post" name="compose" id="compose" novalidate="" enctype="multipart/form-data" accept-charset="utf-8">


																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="first-name">First Name</label>
																		<div class="controls">
																			<input class="form-control" id="first_name" name="first_name" type="text" required="" value="Matrix" />
																			<div class="invalid-feedback">Firstname is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="second-name">Last Name</label>
																		<div class="controls">
																			<input class="form-control" id="second_name" name="second_name" type="text" required="" value="Neo" />
																			<div class="invalid-feedback">Last name is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="email">Email</label>
																		<div class="controls">
																			<input class="form-control" id="email" name="email" type="text" required="" value="admin@neomlm.com" />
																			<div class="invalid-feedback">Email is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="mobile">Mobile</label>
																		<div class="controls">
																			<div class="input-group"><span class="input-group-text">+36</span> 
																				<input class="form-control" id="mobile"  name="mobile" type="number" required="" value="5589654789"minlength="" maxlength=""
																				oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   required=""/>
																				<div class="invalid-feedback">Mobile is required</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-12">
																	<div class="form-group">
																		<label class="form-label" for="address">Address</label>
																		<div class="controls">
																			<textarea class="form-control" id="address" name="address" cols="30" rows="5" required="" >Neo MLM Software</textarea>
																			<div class="invalid-feedback">Address is required</div>
																			
																		</div>
																	</div>
																</div> 
																<div class="col-lg-6">
																	<label class="form-label" for="Country">Country</label>

																	<select class="country_ajax  form-control" name="country" id="country" >
																																				<option value="99" selected>Hungary</option>
																																			</select>
																	<div class="invalid-feedback">Country is required</div>
																	
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="state">State</label>
																		<div class="controls">
																			<select name="state" id="state" class="form-control state_ajax"  >
																																								<option value="19" selected>Kerala</option>
																																							</select>
																			<div class="invalid-feedback">State is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="city">City</label>
																		<div class="controls">
																			<input class="form-control" id="city"  name="city" type="text" required="" value="Cochin" />
																			<div class="invalid-feedback">City is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label class="form-label" for="zip_code">ZipCode</label>
																		<div class="controls">
																			<input class="form-control" id="zip_code"  name="zip_code" type="number" required="" value="123456" />
																			<div class="invalid-feedback">ZipCode is required</div>
																			
																		</div>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="row">

																		<div class="col-sm-6">
																			<label class="form-label">User Photo</label>                     
																			<div class="fileupload fileupload-new " data-provides="fileupload">
																				<div class="fileupload-preview thumbnail border" style="width: 200px; height: 150px;"><!-- <img src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt=""> -->
																					<img src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="">
																				</div>
																				<div>
																					<span class="btn btn-info me-1 mb-1 btn-file">
																						<span class="fileupload-new">Select image</span>
																						<span class="fileupload-exists">Change</span>
																						<input type="file" name="userfile">
																					</span>
																					<a href="#" class="btn btn-outline-dark me-1 mb-1 fileupload-exists" data-dismiss="fileupload">Remove</a>
																				</div>
																			</div>
																		</div>
																		<div class="col-sm-6">

																			<div class="col-lg-12">
																				<div class="form-group">
																					<label class="form-label" for="state">Facebook</label>
																					<div class="controls">
																						<input class="form-control" maxlength='52' id="facebook"  name="facebook" type="text"  value="http://facebook.com"/>
																						
																						
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-12">
																				<div class="form-group">
																					<label class="form-label" for="state">Twitter</label>
																					<div class="controls">
																						<input class="form-control"  maxlength='52' id="twitter"  name="twitter" type="text"  value="https://www.linkedin.com/"/>
																						
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-12">
																				<div class="form-group">
																					<label class="form-label" for="state">Linked In</label>
																					<div class="controls">
																						<input class="form-control" id="linked_in"  name="linked_in" type="text" value="https://www.linkedin.com/"/>
																						
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-12">
																				<div class="form-group">
																					<label class="form-label" for="state">Instagram</label>
																					<div class="controls">
																						<input class="form-control" id="instagram"  name="instagram" type="text" value="https://www.instagram.com/"/>
																						
																					</div>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="col-12 d-flex justify-content-end">
																	<button class="btn btn-primary" name="profile_update" value="profile_update" type="submit">Update</button>
																</div>
																</form>
															</div>


														</div>
														<div class="tab-pane border-0 p-0" id="gallery">
                                        

                                        <div class="card-body ">
                                        	<form action="https://demo.neomlmsoftware.com/binary/admin/member/profile?user_name=admin" role="form"  class="row g-3 needs-validation" method="post" name="psw" id="psw" novalidate="" accept-charset="utf-8">


                                        	<div class="mb-3">
                                        		<div class="form-group">
                                        			<label class="form-label" for="new-password">New Password</label>
                                        			<div class="controls">
                                        				<input class="form-control" id="new-password" type="password" name="new_password" required/>
                                        				<div class="invalid-feedback">This field is required</div>
                                        				
                                        			</div>
                                        		</div>
                                        	</div>
                                        	<div class="mb-3">
                                        		<div class="form-group">
                                        			<label class="form-label" for="confirm-password">Confirm Password</label>
                                        			<div class="controls">
                                        				<input class="form-control" id="confirm-password" type="password" name="confirm_password" required/>
                                        				<div class="invalid-feedback">This field is required</div>
                                        				
                                        			</div>
                                        		</div>
                                        	</div>
                                        	<button class="btn btn-primary d-block w-100" type="submit" name="psw_update" value="psw_update">Update Password </button>
                                        	</form>
                                        </div>


                                    </div>
                                    <div class="tab-pane border-0 p-0" id="friends01" role="tabpanel">
                                    	
                                    	<div class="card-body">
                                    		<form action="https://demo.neomlmsoftware.com/binary/admin/member/profile?user_name=admin" role="form"  class="row g-3 needs-validation" method="post" name="pin" id="pin" novalidate="" accept-charset="utf-8">



                                    		<div class="form-group">
                                    			<label class="form-label" for="new-password">New Security Pin</label>
                                    			<div class="controls">
                                    				<input class="form-control" id="new_pin" type="password" name="new_pin" required/>
                                    				<div class="invalid-feedback">This field is required</div>
                                    				
                                    			</div>
                                    		</div>

                                    		<div class="form-group">
                                    			<label class="form-label" for="confirm-password">Confirm Security Pin</label>
                                    			<div class="controls">
                                    				<input class="form-control" id="confirm_pin" type="password" name="confirm_pin" required />
                                    				<div class="invalid-feedback">This field is required</div>
                                    				
                                    			</div>
                                    		</div> 
                                    		<button class="btn btn-primary d-block w-100" type="submit" name="spin_update" value="spin_update">Update Security Pin</button>
                                    		</form>
                                    	</div>


                                    </div>
                                    <div class="tab-pane border-0 p-0" id="settings">
										

											<form action="https://demo.neomlmsoftware.com/binary/admin/member/profile?user_name=admin" role="form"  class="row g-3 needs-validation" method="post" name="inact" id="inact" novalidate="" accept-charset="utf-8">

											<div class="card-body ">
																								<input class="btn btn-warning  w-100" type="submit" name="inactive" value="Deactivate" id="inactive" >
																							</div>
											</form>

										</div>
									</div>
								</div>
							</div> 



						</div>
					</div>

					<div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
						<div class="modal-dialog mt-6" role="document">
							<div class="modal-content border-0">
								<div class="modal-header px-5 position-relative modal-shape-header bg-shape">
									<div class="position-relative z-index-1 light">
										<h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
										<p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
									</div>
									<button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body py-4 px-5">
									<form>
										<div class="mb-3">
											<label class="form-label" for="modal-auth-name">Name</label>
											<input class="form-control" type="text" name=""autocomplete="" id="modal-auth-name" />
										</div>
										<div class="mb-3">
											<label class="form-label" for="modal-auth-email">Email address</label>
											<input class="form-control" type="email" name="" autocomplete="" id="modal-auth-email" />
										</div>
										<div class="row gx-2">
											<div class="  col-sm-6">
												<label class="form-label" for="modal-auth-password">Password</label>
												<input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
											</div>
											<div class=" col-sm-6">
												<label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
												<input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
											</div>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
											<label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
										</div>
										<div class="mb-3">
											<button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
										</div>
									</form>
									<div class="position-relative mt-5">
										<hr class="bg-300" />
										<div class="divider-content-center">or register with</div>
									</div>
									<div class="row g-2 mt-2">
										<div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google</a></div>
										<div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Facebook</a></div>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</main>
				<div class="modal fade" id="empModal"  role="dialog" >
					<div class="modal-dialog mt-6" role="document">
						<div class="modal-content border-0">
							<div class="modal-header px-5 position-relative modal-shape-header bg-shape">
								<div class="position-relative z-index-1 light">
									<h4 class="mb-0 text-white" id="authentication-modal-label">Referral link</h4>

								</div>
								<button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">	
								<div class="row">
									<div class="col-sm-6">
										<img src="https://demo.neomlmsoftware.com/binary/assets//images/qrcode/admin.png" alt="" height="154px" width="154px"  class="img-thumbnail"/>
									</div>
									<div class="col-sm-6 pt-4">
										<div class="col-sm-12 mb-3"> 
											<button class="btn btn-primary col-12" id="copy-button" onclick="copyReferral('#post-shortlink')" data-clipboard-target="#post-shortlink" class="card-icon">Copy <i class="fa fa-copy"></i></button>
										</div>
										<div class="col-sm-12">
											<a href="https://demo.neomlmsoftware.com/binary/referral/admin" class="btn btn-secondary col-12 " target="_blank">Open New Tab <i class="fas fa-external-link-alt"></i> </a>
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

<?php include('footer.php') ?>