<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">News Management</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Tools</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">News Management</li>
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
    <span id="text_you_will_not_recover">You will not recover</span>
    <span id="text_yes_delete_it">Yes, delete it!</span>
    <span id="text_no_cancel_please">No, cancel please</span>
    <span id="text_deleted">Deleted</span>
    <span id="text_news_deleted">News Deleted</span>
    <span id="text_cancelled">Cancelled</span>
    <span id="text_news_safe">News safe</span>
    <span id="text_you_want_edit_news">Edit News</span>
    <span id="text_you_want_delete_news">Delete News</span>
    <span id="text_yes_edit_it">Yes Edit it</span>
    <span id="error_the_fieldid_field_is_required">The Field Is Required</span>
    <span id="error_atleast_number">Atleast Number</span>
    <span id="error_enter_greater_number">Error! Enter Greater Number</span>
</div>
<div class="heading-elements">
 <a href="https://demo.neomlmsoftware.com/binary/admin/tools/add-news/" class="btn btn-outline-info mr-1 mb-1" title=""><i class="fa fa-plus"></i></a>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
        <div class="card-header border-light">
            <h5>
             <i class="fa fa-bars" > 
             </i>
              Available News
         </h5>

         <div class="clearfix"></div> 
     </div>
     <div class="card-body">
                            <div class="alert alert-block alert-warning fade in">
                        <p>
                            <h3 class="text-center"> 
                                <i class="fa fa-exclamation"> No details found</i>
                            </h3>
                        </p>
                    </div>
                                   </div>
            </div>
        </div>
    </div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>