
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | NEO Binary</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="https://demo.neomlmsoftware.com/binary/assets/backend/images/logo/favicon-32x32.png">

  

    <meta name="theme-color" content="#ffffff"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

     

    
    <link rel="icon" href="https://demo.neomlmsoftware.com/binary/assets/images/logo/favicon-32x32.png" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/css/icons.min.css" rel="stylesheet" >




   
    

    
      

</head>

<body>
    <input type="hidden" id="rootPath" value="https://demo.neomlmsoftware.com/binary/">
    <main class="main" id="top"> 
         

<div class="container-fluid custom-page">
    <div class="row bg-white">
        <!-- The image half -->
        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
            <div class="row w-100 mx-auto text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
                    <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/media/pngs/5.png"
                    class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                </div>
            </div>
        </div>
        <!-- The content half -->
        <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="mb-5 d-flex">
                                    <a href="#" class="header-logo"><img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png"
                                        class="desktop-logo ht-40" alt="logo">
                                        <span class="font-sans-serif fw-bolder fs-5 d-inline-block">NEO Binary</span>
                                        <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/brand-logos/desktop-white.png"
                                        class="desktop-white ht-40" alt="logo">
                                    </a>
                                </div>
                                 
                                
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <h3>Welcome back!</h3>
                                        <h6 class="fw-medium mb-4 fs-17">Please sign in to continue.</h6>
                                      <form action="admin/dashboard.php" class="form form-horizontal form-simple needs-validation" novalidate=""  method="post" accept-charset="utf-8">

                                            <div class="form-group mb-3">
                                                <label class="form-label">Enter Username</label> 
                                                <input class="form-control" value="binary" type="text"autocomplete="off" placeholder="Enter Username" name="user_name"   />
                                                <div class="invalid-feedback">Username Required</div>
                                                
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label">Password</label> 
                                                <input class="form-control" type="password" value="123" autocomplete ="off"placeholder="Password"  name="pass" />
                                                <input type="hidden" name="type" value="">
                                                 <div class="invalid-feedback">Password field is Required</div>
                                                
                                            </div>
                                             <div class="text-danger error-login"></div>
                                            
                                            <button class="btn btn-primary d-block w-100 mt-3 btn-login-submit" type="submit" name="login" value="login">Login</button>
                                           
                                        </form>
                                        <div class="main-signin-footer mt-5">
                                            <p class="mb-1"><a href="https://demo.neomlmsoftware.com/binary/forgot-password" >Forgot password?</a></p>
                                            <p>Don't have an account? <a href="https://demo.neomlmsoftware.com/binary/signup">Create an
                                            Account</a></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div><!-- End -->
    </div>
</div>


<!-- Bootstrap JS -->




    </main>

     

    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/jquery-3.6.0.min.js"></script>
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/popper.min.js"></script>
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/bootstrap.min.js"></script> 
   
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/show-password.js"></script>



    

<script type="text/javascript">
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    var loginBtn = true;
    $(document).on("submit", "#login-form", function(event)
    {

        var form = $(this);
        event.preventDefault();

        if(loginBtn == true){
            $.ajax({
                url: 'https://demo.neomlmsoftware.com/binary/'+'login/authenticate-login',
                type: 'POST',
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                beforeSend: function(){
                    loginBtn = false;
                    $(".btn-login-submit").html('<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>');
                    $(".error-login").html('');
                },
                complete: function (response, status)
                {
                    $(".btn-login-submit").html('Login');
                },
                success: function (response, status)
                {
                    loginBtn = true;
                    if(response.status){
                      window.location = response.location;
                  }else{
                    $(".error-login").html(response.msg);
                } 
            },
            error: function (xhr, desc, err)
            {
                loginBtn = true;
                alert(desc);
            }
        });
        }
    });
</script> 
 
    
</body>

</html>
