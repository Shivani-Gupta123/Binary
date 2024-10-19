<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Upload Efiles</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Tools</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Upload Efiles</li>
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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header border-light">
                <h5>
                    <i class="fa fa-upload fa-lg blue-color" ></i>
                    Upload Efiles
                   
                </h5>
                <br>
                 <a  class="btn btn-primary" href="https://demo.neomlmsoftware.com/binary/admin/tools/view-efiles" >View</a>

                

                <div class="clearfix"></div> 
            </div>
            <div class="card-body">

                <form action="https://demo.neomlmsoftware.com/binary/admin/tools/upload-efiles" id="file_form" name="file_form" class="form-login needs-validation" enctype="multipart/form-data" novalidate="" enctype="multipart/form-data" method="post" accept-charset="utf-8">


                <div class="form-group">
                    <label class="control-label">
                        Efile Title<span class="symbol required"></span>
                    </label>
                    <div class="controls">
                        <input type="text" class="form-control" id="doc_title" name="title" value="" required>
                        <div class="invalid-feedback">Efile Title is required</div>

                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">
                        Efile Description<span class="symbol required"></span>
                    </label>
                    <div class="controls">
                        <div id="editor"></div>
                        <textarea cols="50" rows="5" class="tinymce d-none" name="content" id="content" ></textarea>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Attachment</label><br>                                     
                    <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail" style="height: 180px; max-width: 200px;">
                        <div class="fileupload-preview thumbnail border" style="width: 200px; height: 180px;  ">

                            <img src="" id="image" name="image" alt="" title="" data-placeholder="" width="200" height="180">

                            <input type="hidden" name="image" value="" id="input-image"/>

                        </div>
                    </a>


                </div>




                <br>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" id="efile_upload" name="efile_upload" value="efile_upload">
                        Upload <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>


 
<br class="mobile" />
<br class="mobile" />
<br class="mobile" />
<br class="mobile" />

        </div>


    </div>
</div>

<?php include('footer.php') ?>