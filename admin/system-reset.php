<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">System Reset</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">System Reset</li>
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
 <div class="col-xxl-12 d-flex flex-column align-items-stretched">
<!--       <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-3.png);">
        </div>
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-lg-8">
              <h3>Cleanup !</h3>
              <p class="mt-2">Click the cleanup button to wipe out your entire system.<br>There is no undo. This option only available before the system is live :)</p>
               <div class="col-lg-12 text-end">
               	<form action="https://demo.neomlmsoftware.com/binary/admin/settings/system-reset" method="post" accept-charset="utf-8">

               <button class="btn btn-outline-danger me-1 mb-1" type="submit" name="cleanup" id="cleanup" value="cleanup">Cleanup <i class="far fa-arrow-alt-circle-right"></i></button>
               </form>
              </div>
            </div>
          </div>
        </div>
      </div> -->

     <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(https://demo.neomlmsoftware.com/binary/assets/images/icons/spot-illustrations/corner-2.png);">
	        </div>
	    
	        <div class="card-body position-relative">
	          <div class="row">
	            <div class="col-lg-8">
	              <h3>Clear Cache !</h3>
	              <p class="mt-2">Click clear cache button for wipe cache..!</p>
	              <div class="col-lg-12 text-end">
	              	<form action="https://demo.neomlmsoftware.com/binary/admin/settings/system-reset" method="post" accept-charset="utf-8">

	               <button class="btn btn-outline-warning me-1 mb-1" type="submit" name="clear"  id="clear" value="clear">Clear Cache <i class="far fa-arrow-alt-circle-right"></i></button>
	               </form>
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