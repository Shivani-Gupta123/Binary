<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Plan Management</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Configurations</li>
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
		<div class="col-xl-12 pe-xl-12">
			<div class="card lg-12">
				<div class="card-header">
					<div class="row flex-between-end">
						<div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
							<h5 class="mb-0" data-anchor="data-anchor">Plan Management</h5>
						</div>
					</div>
				</div>
				<div class="card-body ">
					<div class="tab-content">
						<div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-f1a0c56a-40c8-47fa-a0c0-3da978a3a908" id="dom-f1a0c56a-40c8-47fa-a0c0-3da978a3a908">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Plan Settings</a></li>
								<li class="nav-item"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Configuration</a></li>
								<li class="nav-item"><a class="nav-link" id="level-tab" data-bs-toggle="tab" href="#tab-level" role="tab" aria-controls="tab-level" aria-selected="false">Level Commission</a></li>
							</ul>
							<div class="tab-content border-x border-bottom p-3" id="myTabContent">
								<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab"><div class="table-responsive">
									<div class="table-responsive">		
										<form action="https://demo.neomlmsoftware.com/binary/admin/settings/plan-management" role="form" class="needs-validation" novalidate="" method="post" accept-charset="utf-8">
 
										<table class="table">
											<thead>
												<tr>
													<th class="text-center">#</th>
													<th>Name</th>
													<th>Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center" >1</td>
													<td >Minimum Withdrawal Amount</td>
													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" class="form-control" min="0" name="min_withdraw_amt" value="50" step="0.01" autocomplete="off" required onchange="validateInput(this)" />
																<div class="invalid-feedback">Minimum withdraw amount is required</div>

																	
															</div>
														</div>	
													</td>					
												</tr> 

												<tr>
													<td class="text-center" >2</td>
													<td >Maximum Withdrawal Amount</td>
													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number"step="0.01"min="0" class="form-control" name="max_withdraw_amt"  value="500" autocomplete="off" required />
																<div class="invalid-feedback">Maximum withdraw amount is required</div>
																	
															</div>
														</div>	
													</td>					
												</tr>   

												<tr>
													<td class="text-center" >3</td>
													<td >Signup Amount</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" step="0.01" min="0"class="form-control" name="signup_amount" value="50" autocomplete="off" required/>
																<div class="invalid-feedback">Signup amount is required</div>
																
															</div>
														</div>
													</td>					
												</tr>  
												
												<tr>
													<td class="text-center" >4</td>
													<td >Referral Amount</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" step="0.01" min="0"class="form-control" name="referral_amount" value="10" autocomplete="off" required/>
																<div class="invalid-feedback">Referral Amount</div>
																
															</div>
														</div>
													</td>
												</tr>
												
												<tr>
													<td class="text-center" >5</td>
													<td >Transaction Fee</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" class="form-control" min="0" name="transaction_fee" step="0.01"value="7" autocomplete="off" required />
																<div class="invalid-feedback">Transaction Fee is required</div>
																
															</div>
														</div>
													</td>
												</tr>  
												<td></td>
												<td></td> 
												<td class="td-actions text-right pull-right">
													<input type="submit" name="referral" class="btn btn-info btn-round" value="Update" > 
												</td>
											</tbody>
										</table>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="table-responsive">
										<form action="https://demo.neomlmsoftware.com/binary/admin/settings/plan-management" role="form" class="needs-validation" novalidate="" method="post" accept-charset="utf-8">
 
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th class="text-center">#</th>
													<th>Name</th>
													<th>Value</th>
												</tr>
											</thead>
											<tbody>

												
												 
												<tr>
													<td class="text-center" >1</td>
													<td >Tree Level</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" class="form-control" name="tree_level" min="0"value="3"  autocomplete="off" required />
																<div class="invalid-feedback">Tree level is required</div>
																
															</div>
														</div>
													</td>					
												</tr>  

												<tr>
													<td class="text-center" >2</td>
													<td >User Name Maximum Length</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" class="form-control" min="0" name="user_name_max_len" value="6" autocomplete="off" required />
																<div class="invalid-feedback">User name maximum length is required</div>
																
															</div>
														</div>
													</td>
												</tr>  

												
												<tr>
													<td class="text-center" >3</td>
													<td >Phone Number  Length</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" class="form-control" min="0" name="phone_number_length" value="10" autocomplete="off" data-validation-required-message="Phone Number Minimum Length is required"/>
																
															</div>
														</div>
													</td>							
												</tr> 

												


												<tr>
													<td class="text-center" >4</td>
													<td >Matrix Bonus</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="number" min="0" step="0.01"class="form-control" name="matrix_bonus" value="50" autocomplete="off" required />
																<div class="invalid-feedback">Matrix Bonus is required</div>
																
															</div>
														</div>
													</td>							
												</tr> 


												 <tr>
													<td class="text-center" >5</td>
													<td >Common Password</td>

													<td >
														<div class="form-group">
															<div class="controls">
																<input type="text" min="0" step="0.01"class="form-control" name="common_password" value="123456" autocomplete="off" required />
																<div class="invalid-feedback">Common Password</div>
																
															</div>
														</div>
													</td>							
												</tr>  
												<tr> 
													
													
													
													<td colspan="3" class="td-actions text-center">
														<input type="submit" name="Configuration" class="btn btn-info btn-round" value="Update" > 
													</td>
												</tr>
												</form>	 

											</tbody>
										</table>
									</div>
								</div>
							</div>




							<div class="tab-pane fade" id="tab-level" role="tabpanel" aria-labelledby="level-tab">
								<div class="table-responsive">
									<form action="https://demo.neomlmsoftware.com/binary/admin/settings/plan-management" method="post" accept-charset="utf-8">

									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th class="text-center">#</th>
													<th>Name</th>
													<th>Value</th>
												</tr>
											</thead>
											<tbody>
																								
																								<tr>
													<td class="text-center" >1</td>
													<td >Level-1</td>

													<td>
														<div class="form-group">
															<div class="controls">
																<input type="number" step="0.01" min="0"class="form-control" name="1" value="30"  autocomplete="off" required />
																<div class="invalid-feedback">Tree level is required</div>
																
															</div>
														</div>
													</td>					
												</tr> 
																								<tr>
													<td class="text-center" >2</td>
													<td >Level-2</td>

													<td>
														<div class="form-group">
															<div class="controls">
																<input type="number" step="0.01" min="0"class="form-control" name="2" value="30"  autocomplete="off" required />
																<div class="invalid-feedback">Tree level is required</div>
																
															</div>
														</div>
													</td>					
												</tr> 
												 


												<tr> 
													
													<td></td>
													<td colspan="3" class="td-actions text-center">
														<input type="submit" name="level" class="btn btn-info btn-round" value="Update" > 
													</td>
												</tr>
												</form>	 

											</tbody>
										</table>
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
</div>

<?php include('footer.php') ?>