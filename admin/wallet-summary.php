<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Summary</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Reports</li>
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
	<div class="col-md-12">
		 <div class="card">


			<div class="card-header">
				<h5>Summary</h5>
			</div>

			<div class="card-body">  
				<form action="https://demo.neomlmsoftware.com/binary/admin/report/wallet-summary" id="trans_form" name="trans_form" class="form-login" method="post" accept-charset="utf-8">

				
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							
							<select name="user_name" id="user_name" class="form-control user_name_ajax" >
															</select>

						</div>
					</div>

					<!--/span-->
					<div class="col-md-5">
						<div class="form-group"> 


							<select class="form-control" name="category" id="category">
								
																<option value="1" >Referral Bonus</option>
																<option value="3" >Rank Bonus</option>
																<option value="4" >Fund Transfer</option>
																<option value="5" >Level Bonus</option>
																<option value="6" >Add Fund</option>
																<option value="7" >Deduct Fund</option>
																<option value="11" >Wallet Withdrawal</option>
																<option value="9" >Payout Request</option>
																<option value="10" >Payout Delete</option>
																<option value="12" >Binary Bonus</option>
								
							</select>
							

						</div> 
					</div>
					<div class="col-sm-3">
						<button class="btn btn-primary pull-right" type="submit" id="view_details" name="view_details" value="add_amount">
							Search <i class="fa fa-arrow-circle-right"></i>
						</button>  
					</div>
				</div>
				<br>
				
				
				</form> 
			</div>
		</div>
 	</div>
<br>


	<div class="col-sm-12"> 
		<div class="card"> 

			<div class="card-header">
				<h5>Summary</h5>
				
			</div>

			<div class="card-content">
				<div class="card-body">  
									</div>
			</div>
		</div>
	</div> 
</div>


	
        </div>


    </div>
</div>

<?php include('footer.php') ?>