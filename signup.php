
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | NEO Binary</title>
    
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




   
    
<link href="https://demo.neomlmsoftware.com/binary/assets/plugins/select2/select2.min.css" rel="stylesheet" />

    
      

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
                                        
                                    </a>
                                </div>
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <h3>Get Started</h3>
                                        <h6 class="fw-medium mb-4 fs-17">It's free to signup and only takes a minute.</h6>
                                        <form action="https://demo.neomlmsoftware.com/binary/signup" class="row needs-validation" novalidate="" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                                        <div class="form-group  mb-3">
                                         <label class="form-label" for="card-name">Sponsor Name</label>
                                         <input class="form-control" type="text" autocomplete="off" id="sponsor_name" value="admin" name="sponsor_name" required=""/> 
                                         <span id="message_box" style="display:none;"></span>
                                         <div class="invalid-feedback">Enter Your Sponser Name </div>
                                         
                                     </div>



                                                                        

                                       <div class="form-group mb-3">
                                        <label class="form-label" for="card-name">First Name</label>
                                        <input class="form-control" type="text" autocomplete="off" id="firstname" name="firstname" value=""  required=""  />
                                        <div class="invalid-feedback">Enter Your First Name </div>
                                        
                                    </div>

                                    <div class="row gx-2" style="padding-left:11px;">

                                        <div class="form-group col-md-6">
                                            <label class="form-label">Password</label> 
                                            <input class="form-control" type="password" placeholder="Password"  name="pass" required />
                                            <div class="invalid-feedback">Enter Your Password</div>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Confirm Password</label> 
                                            <input class="form-control" type="password" placeholder="Confirm Password"  name="c_pass" required />
                                            <div class="invalid-feedback">Enter Confirm Password</div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Position</label>
                                        <select name="position" id="position" class="form-control" required >
                                                                                        <option value="" selected disabled>--Select Position--</option>
                                            <option value="1">LEFT</option>
                                            <option value="2">RIGHT</option>
                                                                                    </select>
                                        <div class="invalid-feedback">Select Position</div>
                                        
                                        <!--  <span style="color:#dd0707";></span> -->
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="card-country">Country</label>
                                        <select class="country_ajax  form-control" name="country" value="" required="">
                                                                                    </select>
                                        <div class="invalid-feedback">Select Your Country</div>
                                        
                                    </div>  
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="card-mobile">Mobile</label>
                                        <input class="form-control" type="text" autocomplete="off"  name="mobile" id="mobile" 
                                        value="" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required="" />
                                        <div class="invalid-feedback">Enter Your Mobile Number </div>
                                        
                                    </div> 
                                    <div class="form-group mb3">
                                        <label class="form-label" for="card-email">Email</label>
                                        <input class="form-control" type="email" autocomplete="off" name="email"  id="email" 
                                        value="" required="" />
                                        <div class="invalid-feedback">Enter Your Email ID </div>
                                        
                                    </div>
                                   
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="card-register-checkbox" required="" name="check" value="1" />
                                        <label class="form-label" for="card-register-checkbox" >I accept the <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> terms </a>and  <a href=""data-bs-toggle="modal" data-bs-target="#new"> privacy policy </a></label>
                                        <div class="invalid-feedback">Accept The terms and conditions</div>

                                    </div>


                             
                                
                                    

                                        <div class="form-group">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="register" value="free_join">Free Join</button>
                                        </div>
                                    
                                  

                                

                                </form>
                                <div class="main-signin-footer mt-5">
                                    <p>Already have an account? <a href="https://demo.neomlmsoftware.com/binary/login">Login</a></p>
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

<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <div class="col-md-12">     
        <h2>Terms and Conditions</h2>
<p>These terms and conditions outline the rules and regulations for the use of <!-- -->signature<!-- -->'s Website, located at <!-- -->signature.com<!-- -->.</p>
<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use <!-- -->signature.com<!-- --> if you do not agree to take all of the terms and conditions stated on this page.</p>
<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
<h3>Cookies</h3>
<p>We employ the use of cookies. By accessing <!-- -->signature.com<!-- -->, you agreed to use cookies in agreement with the <!-- -->signature<!-- -->'s Privacy Policy.<!-- --></p>
<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
<h3>License</h3>
<p>Unless otherwise stated, <!-- -->signature<!-- --> and/or its licensors own the intellectual property rights for all material on <!-- -->signature.com<!-- -->. All intellectual property rights are reserved. You may access this from <!-- -->signature.com<!-- --> for your own personal use subjected to restrictions set in these terms and conditions.</p>
<p>You must not:</p>
<ul>
<li>Republish material from <!-- -->signature.com</li>
<li>Sell, rent or sub-license material from <!-- -->signature.com</li>
<li>Reproduce, duplicate or copy material from <!-- -->signature.com</li>
<li>Redistribute content from <!-- -->signature.com</li>
</ul>
<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. <!-- -->signature<!-- -->does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of<!-- -->signature<!-- -->, its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, <!-- -->signature<!-- --> shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
<p>signature<!-- --> reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
<p>You warrant and represent that:</p>
<ul>
<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>
<p>You hereby grant <!-- -->signature<!-- --> a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
<h3>Hyperlinking to our Content</h3>
<p>The following organizations may link to our Website without prior written approval:</p>
<ul>
<li>Government agencies;</li>
<li>Search engines;</li>
<li>News organizations;</li>
<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>
<p>These organizations may link to our home page, to publications or to other Website information so long as the link:</p>
<ul class="type-alpha">
<li>is not in any way deceptive;</li>
<li>does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and</li>
<li>fits within the context of the linking party’s site.</li>
</ul>
<p>We may consider and approve other link requests from the following types of organizations:</p>
<ul>
<li>commonly-known consumer and/or business information sources;</li>
<li>dot.com community sites;</li>
<li>associations or other groups representing charities;</li>
<li>online directory distributors;</li>
<li>internet portals;</li>
<li>accounting, law and consulting firms; and</li>
<li>educational institutions and trade associations.</li>
</ul>
<p>We will approve link requests from these organizations if we decide that:</p>
<ul class="type-alpha">
<li>the link would not make us look unfavorably to ourselves or to our accredited businesses;</li>
<li>the organization does not have any negative records with us;</li>
<li>the benefit to us from the visibility of the hyperlink compensates the absence of <!-- -->signature<!-- -->; and</li>
<li>the link is in the context of general resource information.</li>
</ul>
<p>These organizations may link to our home page so long as the link:</p>
<ul class="type-alpha">
<li>is not in any way deceptive;</li>
<li>does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and</li>
<li>fits within the context of the linking party’s site.</li>
</ul>
<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to <!-- -->signature<!-- -->. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
<p>Approved organizations may hyperlink to our Website as follows:</p>
<ul>
<li>By use of our corporate name; or</li>
<li>By use of the uniform resource locator being linked to; or</li>
<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
</ul>
<p>No use of <!-- -->signature<!-- -->'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
<h3>iFrames</h3>
<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
<h3>Content Liability</h3>
<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
<h3>Your Privacy</h3>
<p>Please read Privacy Policy</p>
<h3>Reservation of Rights</h3>
<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
<h3>Removal of links from our website</h3>
<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
<h3>Disclaimer</h3>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
<ul>
<li>limit or exclude our or your liability for death or personal injury;</li>
<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>
<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer:</p>
<ul class="type-alpha">
<li>are subject to the preceding paragraph; and</li>
<li>govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory dutys.</li>
</ul>
<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
    </div> 
</div>
</div>

<!-- <div class="container-modal">
   <div class="title">
    Lorem Ipsum 01
</div> -->

<!-- <div class="modal" id="win-0">
    
 <div class="modal-container">
   <div class="modal-header">
     <div class="modal-title">Modal Title 01</div>
     <span class="close">X</span>
 </div>
 <div class="modal-content">
  Modal Content 01
</div> -->

</div>

</div>
</div>

<div class="modal fade" id="new" data-bs-keyboard="false" data-bs-backdrop="new" tabindex="-1" aria-labelledby="newLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <div class="col-md-12">     
        <p> <h3>Your Privacy</h3>
<p>Please read Privacy Policy</p>
<h3>Reservation of Rights</h3>
<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
<h3>Removal of links from our website</h3>
<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
<h3>Disclaimer</h3>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
<ul>
<li>limit or exclude our or your liability for death or personal injury;</li>
<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>
<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer:</p>
<ul class="type-alpha">
<li>are subject to the preceding paragraph; and</li>
<li>govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory dutys.</li>
</ul>
<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
        </div> </p>
    </div> 
</div>
</div>


    </main>

     

    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/jquery-3.6.0.min.js"></script>
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/popper.min.js"></script>
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/bootstrap.min.js"></script> 
   
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/show-password.js"></script>



    
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/tinymce/tinymce.min.js"></script>
<script src="https://demo.neomlmsoftware.com/binary/assets/js/registration.js"></script>
<script src="https://demo.neomlmsoftware.com/binary/assets/plugins/select2/select2.min.js"></script>

<script src="https://demo.neomlmsoftware.com/binary/assets/backend/lodash/lodash.min.js"></script>


<script type="text/javascript">
    var invalid_sponser_user_name = "Invalid Referral ID",
    checking_sponser_user_name = "Checking Referral ID.",
    sponser_name_validated = "Sponsor validated";

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


    $(document).ready(function(){

        $('#sponsor_name').on('change', function(){
            $("#sponsor_name").trigger('blur');
        });

    });

    $('.country_ajax').select2({
        placeholder: 'Select Your Country',
        ajax: {
            url:'https://demo.neomlmsoftware.com/binary/signup/get_country_ajax',

            type: 'post',
            dataType: 'json',
            delay:250,
            processResults: function(data) {
                return {
                    results: data
                };
            }
        },
    });

    $('.package_ajax').select2({
        placeholder: 'Select Package',
        ajax: {
            url:'https://demo.neomlmsoftware.com/binary/signup/get_package_ajax',

            type: 'post',
            dataType: 'json',
            delay:250,
            processResults: function(data) {
                return {
                    results: data
                };
            }
        },

    });



    // var stripe = Stripe("pk_test_51IU7z0GrcexVW9h9eWBLkLYeG4poZX11h4WhQYk4oJU25uQxBzJ6AhGBq6pYDojdh23eOPdCjX9777vrwpeTQu1e00pL5SCkgJ");
    // var checkoutButton = document.getElementById("stripe-button");
    // var urlToSubmit = 'https://demo.neomlmsoftware.com/binary/'+'signup';

    // checkoutButton.addEventListener("click", function () {
    //     fetch(urlToSubmit, {
    //         method: "POST",
    //     })
    //     .then(function (response) {
    //         return response.json();
    //     })
    //     .then(function (session) {
    //         return stripe.redirectToCheckout({ sessionId: session.id });
    //     })
    //     .then(function (result) {
    //         if (result.error) {
    //             alert(result.error.message);
    //         }
    //     })
    //     .catch(function (error) {
    //       console.error("Error:", error);
    //   });
    // });
</script>
 
    
</body>

</html>
