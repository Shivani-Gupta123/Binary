<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Fund Transfer</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Fund transfer</li>
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
		<div class="card">
			<div class="card-header">

				<h5 class="mb-0" data-anchor="data-anchor">Fund Transfer</h5>

			</div>
			<div class="card-body ">

				<form action="https://demo.neomlmsoftware.com/binary/admin/business/fund-transfer" role="form"  class="row g-3 needs-validation" method="post" name="compose" id="compose" novalidate="" accept-charset="utf-8">



				<div class="col-md-6">
					<label class="form-label"> From User </label>
					<select class="form-control user_name_ajax" name="from_user" id="from_user">
											</select>
					
				</div>
				<div class="col-md-6">
					<label class="form-label">To User </label>
					<select class="form-control user_name_ajax" name="to_user" id="to_user">
						
											</select>
					
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label" for="validationCustomUsername">Amount</label>

						<div class="controls">
							<input type="number" class="form-control" name="amount" value="" autocomplete="off" required> 
							<div class="invalid-feedback">Enter an amount</div>
							

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label" for="validationCustomUsername">Security Password</label>

						<div class="controls">
							<input type="password" class="form-control" name="security_pin" value="" autocomplete="off" required> 
							<div class="invalid-feedback">Security password is required</div>

							
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="form-label">Transaction note</label>
						<div class="controls">
							<input class="form-control"  name="trans_note" type="text" value="" autocomplete="off" required />
							<div class="invalid-feedback">Transaction note</div>

							
						</div>
					</div>
				</div>



				<div class="col-12">
					<button type="submit" class="btn btn-primary" name="send" value="send" id="send">Send<i class="fa fa-arrow-circle-right"></i></button>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>

        </div>


    </div>
</div>

<?php include('footer.php') ?>