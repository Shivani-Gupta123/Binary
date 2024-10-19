<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Welcome Letter Updated Successfully</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Welcome letter</li>
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
            
<div class="card"> 
	<div class="card-body ">		
		<form action="https://demo.neomlmsoftware.com/binary/admin/settings/welcome-letter" role="form"  class="row g-3 needs-validation" method="post" name="compose" id="compose" novalidate="" accept-charset="utf-8">

		<div class="col-md-12">		
			<div class="form-group">
				<div class="controls">
					<div id="editor"><p class="ql-align-center"><br></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center"><strong>{title} </strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center"><strong style="color: rgb(55, 142, 238);">Welcome Letter</strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p><strong style="color: rgb(102, 102, 102);">User Name</strong> <strong style="color: rgb(102, 102, 102);">{username}</strong> <strong style="color: rgb(102, 102, 102);">Name</strong> <strong style="color: rgb(102, 102, 102);">{full_name}</strong> <strong style="color: rgb(102, 102, 102);">Mobile No</strong> <strong style="color: rgb(102, 102, 102);">{phone}</strong> <strong style="color: rgb(102, 102, 102);">Email</strong> <strong style="color: rgb(102, 102, 102);">{email}</strong> <strong style="color: rgb(102, 102, 102);">Password</strong></p><p><strong style="color: rgb(102, 102, 102);">{password}</strong></p><p><strong style="color: rgb(102, 102, 102);">Transaction Password</strong></p><p><strong style="color: rgb(102, 102, 102);">{transaction_password}</strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-justify"><span style="color: rgb(0, 0, 0);">You have made right decision at the right time and chosen the great company who has offered you great avenues of financial freedom that you have been seeking for so long.</span></p><p>&nbsp;</p></div>
					 <textarea  cols="100" rows="50" class="tinymce d-none" name="content" id="content" required><p class="ql-align-center"><br></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center"><strong>{title} </strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center"><strong style="color: rgb(55, 142, 238);">Welcome Letter</strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p><strong style="color: rgb(102, 102, 102);">User Name</strong> <strong style="color: rgb(102, 102, 102);">{username}</strong> <strong style="color: rgb(102, 102, 102);">Name</strong> <strong style="color: rgb(102, 102, 102);">{full_name}</strong> <strong style="color: rgb(102, 102, 102);">Mobile No</strong> <strong style="color: rgb(102, 102, 102);">{phone}</strong> <strong style="color: rgb(102, 102, 102);">Email</strong> <strong style="color: rgb(102, 102, 102);">{email}</strong> <strong style="color: rgb(102, 102, 102);">Password</strong></p><p><strong style="color: rgb(102, 102, 102);">{password}</strong></p><p><strong style="color: rgb(102, 102, 102);">Transaction Password</strong></p><p><strong style="color: rgb(102, 102, 102);">{transaction_password}</strong></p><p class="ql-align-center">&nbsp;</p><p class="ql-align-center">&nbsp;</p><p class="ql-align-justify"><span style="color: rgb(0, 0, 0);">You have made right decision at the right time and chosen the great company who has offered you great avenues of financial freedom that you have been seeking for so long.</span></p><p>&nbsp;</p></textarea> 
				</div>
				<div class="invalid-feedback">This field is required</div>

				
			</div>
		</div> 
		<div class="col-12">
			<button type="submit" class="btn btn-primary" name="update" value="update" id="update">Update</button>
		</div>

		</form>
	</div>
</div>


        </div>


    </div>
</div>

<?php include('footer.php') ?>