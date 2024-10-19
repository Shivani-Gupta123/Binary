<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Genealogy Tree</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Networks</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Genealogy tree</li>
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
		<div class="card-body ">
			<form action="https://demo.neomlmsoftware.com/binary/admin/network/genealogy-tree" method="post" accept-charset="utf-8">
 
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2 col-form-label">
						User Name <span class="symbol required"></span>
					</label>
					<div class="col-sm-5">
						<select name="user_id" id="user_id" class="form-control user_name_ajax"  required>
													</select>
						
					</div> 
					<div class="col-sm-4 "> 
						<button class="btn btn-primary" name="view_user_tree" id="view_user_tree" value="view_user_tree" type="submit">Search</button>
					</div>
				</div>
			</div>
			</form>  
		</div>


		<section class="management-view g-0"> 
			<div class="h-lg-100 overflow-hidden"> 
				<div class="row align-items-center">
					<div class="loading-div"></div> 
					<div class="ne-container">
						<div class="ne-wrapper">
							<div class="ne-item" id="tree"></div>
						</div>
					</div> 
				</div>
			</div> 

		</section>
	</div>
</div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>