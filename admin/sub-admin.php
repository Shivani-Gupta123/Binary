<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Sub Admin</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Sub Admin</li>
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
            

<div class="heading-elements">
	<a href="https://demo.neomlmsoftware.com/binary/admin/settings/edit-employee/"  class="btn btn-outline-info mr-1 mb-1" title=""><i class="fa fa-plus"></i></a>
</div>
<div class="row"> 
	<div class="col-md-12">
		<div class="card"> 
			<div class="card-header">
				<h5>Employee Details</h5>
			</div> 
			<div class="card-content collapse show">
				<div class="card-body">  
					<div class="table-responsive"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th>Emp Code</th> 
									<th>Details</th>
									<th>Join Date</th>
									<th>Status</th>
									<th>Action</th> 
								</tr>
							</thead>
							<tbody> 
								
							</tbody>
						</table>
					</div> 
				</div>
			</div>
			<div class="d-flex justify-content-center">  
				<ul class="pagination start-links"></ul> 
			</div>
		</div>
	</div>  
</div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>