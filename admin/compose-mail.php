<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Compose Mail</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Internal Mail</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Compose</li>
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
        <form action="https://demo.neomlmsoftware.com/binary/admin/mail/compose-mail" class="card needs-validation" id="compose" novalidate="" enctype="multipart/form-data" method="post" accept-charset="utf-8">

        <div class="card-header">
          <h5 class="mb-0">New message</h5>
      </div>
      <div class="card-body p-0">
          <div class="border border-top-0 border-200">
            <div class="form-group">
                <div class="controls">
                    <select name="user_name[]" id="user_name[]" class="form-control user_name_ajax"  required>

                                            </select>
                    <div class="invalid-feedback">Username is required</div>

                    
                </div>
            </div>
        </div>
        <div class="controls">
            <div class="form-group">
                
                    <input class="form-control border-0 rounded-0 outline-none px-card" id="subject" name="subject"type="text" aria-describedby="email-subject" placeholder="Subject"  required />
                    <div class="invalid-feedback">Subject is required</div>

                    
                
            </div>
        </div>
        <div class="controls">
            <div id="editor"></div>
            <textarea class="tinymce d-none" name="content" id="content"   ></textarea>
        </div>
    </div>
    <div class="card-footer">

        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Attachment</label>                     
                    <div class="fileupload fileupload-new " data-provides="fileupload">
                        <div class="fileupload-preview thumbnail border" style="width: 200px; height: 150px;">
                        </div>
                        <div>
                            <span class="btn btn-info me-1 mb-1 btn-file">
                                <span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">change</span>
                                <input type="file"  id="email-attachment" name="attachment" >
                                <input class="d-none" id="email-image" type="file" accept="image/*" />
                            </span>
                            <a href="#" class="btn btn-outline-dark me-1 mb-1 fileupload-exists" data-dismiss="fileupload">remove</a>

                            <span style="color:red;font-size:13px">Max Allowed Size 1000Kb</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br>
        <button class="btn btn-primary btn-sm px-5 me-2" type="submit" name="send" value="send" id="send">Send</button> 

    </div>
    </form>
</div>
</div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>