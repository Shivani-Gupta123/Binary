<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">My Ticket</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                                        <li class="breadcrumb-item active" aria-current="page">My Tickets</li>
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
             
<input type="hidden" id="logType" value="admin">

<div class="row "> 
	<div class="col-sm-12"> 
		<form action="https://demo.neomlmsoftware.com/binary/admin/support/my-tickets" method="post" accept-charset="utf-8">

		<div class="form-body">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="user_id" class="control-label">username</label>
						<select name="user_name" id="user_name" class="form-control user_name_ajax"  >
													</select>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">

						<label for="ticket_name">Ticket Name</label>
						<div class="col-10">
							<input class="form-control" type="text"  id="ticket_name" name="ticket_name" placeholder="Ticket ID" value="">
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">

						<label for="start_date">Start Date</label>
						<div class="col-10">
							<input class="form-control" type="date"  id="start_date" name="start_date" value="">
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
	
		<div class="col-sm-4">
			<div class="form-group">
				<label>Status</label>
				<select name="status_ids[]" id="status_ids" class="form-control status_arr" multiple  >
										<option value="1"  >Open</option>
										<option value="2"  >Resolved</option>
										<option value="3"  >Deleted</option>
										<option value="4"  >Re-open</option>
										<option value="5"  >Closed</option>
					
				</select>

			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Priority</label>
				<select name="priority_ids[]" id="priority_ids" class="form-control priority_arr" multiple>
										<option value="1" >Low</option>
										<option value="2" >Normal</option>
										<option value="3" >High</option>
										<option value="4" >Emergency</option>
					
				</select>

			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Help Topic</label>
				<select name="topic_ids[]" id="topic_ids" class="form-control topic_arr"  multiple >
										<option value="1" >Operational query</option>
										<option value="2" >Sales Query</option>
										<option value="3" >Support Query</option>
					
				</select>

			</div>
		</div>

		<div class="col-sm-4 mt-4">
			
			<div class="form-group ">
				<button type="submit" class="btn btn-primary" name="search" value="search">
					<i class="fa fa-filter"></i> Filter
				</button>
				<button type="submit" class="btn btn-warning mr-1" name="submit" value="reset">
					<i class="fas fa-redo"></i>  Reset
				</button> 
			</div> 
		</div>
	</div>
</div>

</form>
</div>


</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-content">
				<div class="card-body">
					<h6 class="card-title">My Ticket </h6>
											<div class="table-responsive row">
							<table class="table " id="exportTable">
								<thead>
									<tr>
										<th></th>
										<th class="text-center">#</th>
										<th>User Name</th>
										<th>Ticket ID</th>
										<th>Full Name</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Priority</th>
										<th>Help Topic</th>
										<th>Image</th>
										<th>Last Activity</th>  
									</tr>
								</thead>
								<tbody>
																		<tr>	
										<th colspan="12">

											<h6 class="text-center"> 
												<i class="fa fa-exclamation"></i> No details found 
											</h6>
										</th>
									</tr>
																	</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-sm-4 pt-3">
								<div class="pull-left">


									<div class="dropdown">
										<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											Change Status 
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																						<a href="#" class="dropdown-item change-status" data-val="1">Open</a>
																						<a href="#" class="dropdown-item change-status" data-val="2">Resolved</a>
																						<a href="#" class="dropdown-item change-status" data-val="3">Deleted</a>
																						<a href="#" class="dropdown-item change-status" data-val="4">Re-open</a>
																						<a href="#" class="dropdown-item change-status" data-val="5">Closed</a>
											
										</div>
									</div>

								</div>
							</div>
							<div class="col-sm-4 pt-3">
								<div class="pull-left">



									<div class="dropdown">
										<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Change Priority 
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																						<a href="#" class="dropdown-item change-priority" data-val="1">Low</a>
																						<a href="#" class="dropdown-item change-priority" data-val="2">Normal</a>
																						<a href="#" class="dropdown-item change-priority" data-val="3">High</a>
																						<a href="#" class="dropdown-item change-priority" data-val="4">Emergency</a>
											
										</div>
									</div>
								</div>
							</div> 
						
					</div>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
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