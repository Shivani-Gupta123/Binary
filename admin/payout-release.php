<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Payout Release</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Payout Release</li>
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
             

<div style="display:none;">
    <span id="base_url">https://demo.neomlmsoftware.com/binary/</span>
    <span id="text_are_you_sure">Are you sure ?</span>
    <span id="text_you_want_delete">Do you Want to Delete</span>
    <span id="text_yes_delete">Delete</span>
    <span id="text_no_cancel_please">No, cancel please</span>
    <span id="text_rejected">Reject</span>
    <span id="text_cancelled">Cancelled</span>
    <span id="text_news_safe">News safe</span>
    <span id="text_yes_approve_it">Approve </span>
    <span id="text_you_want_approve">Do you Want to Approve</span>  
</div>

<div class="row">
    <div class="col-sm-12"> 
        <div class="card">

            <div class="card-body"> 
                <form action="https://demo.neomlmsoftware.com/binary/admin/business/payout-release" method="post" accept-charset="utf-8">

                <div class="form-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="user_name" class="control-label">User Name</label>
                                <select name="user_name" id="user_name" class="form-control user_name_ajax" >
                                                                    </select>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">

                                <label for="from_date">From Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date"  id="from_date" name="from_date" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">

                                <label for="end_date">End Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" id="end_date" name="end_date" value="">
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4"> <br>
                            <button type="submit" class="btn btn-primary" name="submit" value="search">
                                <i class="fa fa-filter"></i> Filter
                            </button>
                            <button type="submit" class="btn btn-warning mr-1" name="submit" value="reset">
                                <i class="fas fa-retweet"></i>  Reset
                            </button> 
                        </div>
                    </div>
                </div>
                </form>
            </div>
            
        </div> 
    </div> 
</div><br>

<div class="row ">
	<div class="col-sm-12"> 
		<div class="card"> 

			<div class="card-header">
				<h5>Payout Release</h5>
				
			</div>

			<div class="card-content">
				<div class="card-body">  
					
					<div class="table-responsive">
						<table class="table color-table primary-table" id="dataTable">
							<thead >
								<tr>
									<th>#</th>
									<th>User Name</th>
									<th>Request Amount</th>
                                    <th>Release Amount</th>
                                    <th>Requested Date</th>
                                    <th>By Using</th>   
                                    <th>Action</th>  
                                    
                                </tr>
                            </thead>
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

<?php include('footer.php') ?>