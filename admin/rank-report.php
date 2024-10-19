<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Rank Report</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Reports</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Rank Report</li>
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
            

<div class="row "> 
	<div class="col-sm-12"> 
		<div class="card">

			<div class="card-body">
				<form action="https://demo.neomlmsoftware.com/binary/admin/report/rank-report" method="post" accept-charset="utf-8">

				<div class="form-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="rank" class="control-label">Rank</label>
								<select name="rank" id="rank" class="form-control" >
																		<option value="all" selected>All</option>
																		<option value="1" >Star member</option>
																											<option value="2" >Bronze Star</option>
																											<option value="3" >GoldStar</option>
																											<option value="4" >Gold Superstar</option>
																											<option value="5" >Diamond Superstar</option>
																											<option value="6" >Green</option>
																		
								</select>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="user_id" class="control-label">Username</label>
								<select name="user_id" id="user_id" class="form-control user_name_ajax" >
																	</select>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">

								<label for="from_date">From Date</label>
								<div class="col-10">
									<input class="form-control" type="text"  id="from_date" name="from_date" value="2024-09-19">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">

								<label for="end_date">End Date</label>
								<div class="col-10">
									<input class="form-control" type="text" id="end_date" name="end_date" value="2024-10-19">
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="padding-top:20px;">
							<button type="submit" class="btn btn-primary" name="submit" value="search">
								<i class="fa fa-filter"></i> Filter
							</button>
							<button type="submit" class="btn btn-warning mr-1" name="submit" value="reset">
								<i class="fa fa-refresh"></i>  Reset
							</button> 
						</div>
					</div>
					<br>
					
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
				<h5>Rank Report</h5>	
			</div>
			<div class="card-content">
				<div class="card-body">  
					
					<div class="table-responsive">
						<table class="table color-table primary-table" id="exportTable">
							<thead >
								<tr>
									<th>#</th>
									
									<th>Username</th>
									<th>Full Name</th>
									<th>Previous Rank</th>  
									<th>Current Rank</th>  
									<th>Date</th>  
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