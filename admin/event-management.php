<?php include('header.php') ?>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
         
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Event Management</h5>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        
                                                <li class="breadcrumb-item active" aria-current="page">Tools</li>
                                                                        <li class="breadcrumb-item active" aria-current="page">Event Management</li>
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
    <span id="text_yes_edit_it">Yes Edit it</span>
    <span id="error_the_fieldid_field_is_required">The Field Is Required</span>
    <span id="error_atleast_number">Atleast Number</span>
    <span id="error_enter_greater_number">Error! Enter Greater Number</span>
</div>
<div class="heading-elements">
   <a href="https://demo.neomlmsoftware.com/binary/admin/tools/add-event/" class="btn btn-outline-info mr-1 mb-1" title=""><i class="fa fa-plus"></i></a>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="card-header ">
                <h6 class="card-title">
                    <i class="fa fa-bars" > 
                    </i>
                    View Events
                    
                </h6> 
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-hover" id="sample-table-1">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th >Subject</th>
                                
                                <th class="hidden-xs">Start Date</th>
                                <th >End Date</th>
                                <th >Location</th>
                                <th >Address</th>
                                <th >Image</th>
                                <th class="center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                            

                            <tr>
                                <td class="center">1</td>
                                <td >User Signup is started</td>
                                
                                <td class="hidden-xs" >2024-07-17</td>
                                <td >2024-07-26</td>
                                <td >Dubai</td>
                                <td >B2 Builiding, Business Park, Duabi</td>

                                <td class="hidden-xs"><img src="https://demo.neomlmsoftware.com/binary/assets//images/profile/bg.jpg" width="75" height="75"></td>
                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                          
                                          <a href="javascript:edit_events(2)"  data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                          <a  href="javascript:inactivate_events(2)" data-placement="top" title="Delete"><i class="fas fa-trash text-danger"></i></a>
                                      </div>
                                      <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group">
                                            
                                                <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="edit-row" data-srcid="2" data-srcLink="events/event-management/edit" >
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="delete-row" data-srcid="2" data-srcLink="events/event-management/delete">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 
                            

                            <tr>
                                <td class="center">2</td>
                                <td >Weekly payout</td>
                                
                                <td class="hidden-xs" >2024-07-17</td>
                                <td >2024-07-17</td>
                                <td >Dubai</td>
                                <td >B2 Builiding, Business Park, Duabi</td>

                                <td class="hidden-xs"><img src="https://demo.neomlmsoftware.com/binary/assets//images/profile/bg.jpg" width="75" height="75"></td>
                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                          
                                          <a href="javascript:edit_events(3)"  data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                          <a  href="javascript:inactivate_events(3)" data-placement="top" title="Delete"><i class="fas fa-trash text-danger"></i></a>
                                      </div>
                                      <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group">
                                            
                                                <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="edit-row" data-srcid="3" data-srcLink="events/event-management/edit" >
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="delete-row" data-srcid="3" data-srcLink="events/event-management/delete">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 
                            

                            <tr>
                                <td class="center">3</td>
                                <td >Bo</td>
                                
                                <td class="hidden-xs" >2024-07-17</td>
                                <td >2024-07-17</td>
                                <td >Dubai</td>
                                <td >B2 Builiding, Business Park, Duabi</td>

                                <td class="hidden-xs"><img src="https://demo.neomlmsoftware.com/binary/assets//images/profile/bg.jpg" width="75" height="75"></td>
                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                          
                                          <a href="javascript:edit_events(4)"  data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                          <a  href="javascript:inactivate_events(4)" data-placement="top" title="Delete"><i class="fas fa-trash text-danger"></i></a>
                                      </div>
                                      <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group">
                                            
                                                <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="edit-row" data-srcid="4" data-srcLink="events/event-management/edit" >
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="delete-row" data-srcid="4" data-srcLink="events/event-management/delete">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 
                            

                            <tr>
                                <td class="center">4</td>
                                <td >Welcome To Our World..!!</td>
                                
                                <td class="hidden-xs" >2024-07-16</td>
                                <td >2024-07-17</td>
                                <td >Dubai</td>
                                <td >B2 Builiding, Business Park, Duabi</td>

                                <td class="hidden-xs"><img src="https://demo.neomlmsoftware.com/binary/assets//images/profile/bg.jpg" width="75" height="75"></td>
                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                                          
                                          <a href="javascript:edit_events(1)"  data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                          <a  href="javascript:inactivate_events(1)" data-placement="top" title="Delete"><i class="fas fa-trash text-danger"></i></a>
                                      </div>
                                      <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group">
                                            
                                                <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="edit-row" data-srcid="1" data-srcLink="events/event-management/edit" >
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" class="delete-row" data-srcid="1" data-srcLink="events/event-management/delete">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
    
        </div>


    </div>
</div>

<?php include('footer.php') ?>