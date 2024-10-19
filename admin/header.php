
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="dark" data-menu-styles="dark" data-toggled="close" data-bg-img="bgimg1">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard | NEO Binary </title>
    <meta name="Description" content="NEO Binary">
    <meta name="Author" content="Signature Software Lab">
    <meta name="keywords" content="NEO Binary,MLM PLAN,UNILEVEL,NEO MLM,Multilevel Marketing">
    
    <!-- Favicon -->
    <link rel="icon" href="https://demo.neomlmsoftware.com/binary/assets/images/logo/favicon-32x32.png" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/@simonwep/pickr/themes/nano.min.css">

    <style type="text/css">
        .fa-1sm{
            font-size:1.2em !important;
        }
    </style>
     

<link rel="stylesheet" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/jsvectormap/css/jsvectormap.min.css">


 
    
    <!-- Choices Css -->
    <link rel="stylesheet" href="https://demo.neomlmsoftware.com/binary/assets/backend/libs/choices.js/public/assets/styles/choices.min.css">


</head>

<body>
    <input type="hidden" id="rootPath" value="https://demo.neomlmsoftware.com/binary/">
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                    type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                    type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-ltr">
                                    LTR
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-vertical">
                                    Vertical
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-horizontal">
                                    Horizontal
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style"
                                id="switcher-horizontal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation-menu-styles">
                    <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-click">
                                    Menu Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                id="switcher-menu-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-hover">
                                    Menu Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                id="switcher-menu-hover">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-click">
                                    Icon Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                id="switcher-icon-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-hover">
                                    Icon Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                id="switcher-icon-hover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-default-menu">
                                    Default Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-default-menu" checked>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-closed-menu">
                                    Closed Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-closed-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icontext-menu">
                                    Icon Text
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-icontext-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-overlay">
                                    Icon Overlay
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-icon-overlay">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-detached">
                                    Detached
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-detached">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-double-menu">
                                    Double Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                id="switcher-double-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-regular">
                                    Regular
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-full-width">
                                    Full Width
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                id="switcher-header-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                id="switcher-header-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-enable">
                                    Enable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                id="switcher-loader-enable" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-disable">
                                    Disable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                id="switcher-loader-disable" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                id="switcher-menu-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                id="switcher-menu-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                id="switcher-menu-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                id="switcher-menu-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                id="switcher-header-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                id="switcher-header-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                id="switcher-header-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Primary:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                id="switcher-primary4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                <div class="theme-container-primary"></div>
                                <div class="pickr-container-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Background:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                id="switcher-background2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                <div class="theme-container-background"></div>
                                <div class="pickr-container-background"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-image mb-3">
                        <p class="switcher-style-head">Menu With Background Image:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img1" type="radio"
                                name="theme-background" id="switcher-bg-img">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img2" type="radio"
                                name="theme-background" id="switcher-bg-img1">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                id="switcher-bg-img2">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img4" type="radio"
                                name="theme-background" id="switcher-bg-img3">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img5" type="radio"
                                name="theme-background" id="switcher-bg-img4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between canvas-footer flex-wrap"> 
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger w-100 m-1">Reset</a> 
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->


<!-- Loader -->
<div id="loader" >
    <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/media/loader.svg" alt="">
</div>
<!-- Loader -->

<div class="page">
   <!-- app-header -->
   <header class="app-header">

    <!-- Start::main-header-container -->
     <div class="main-header-container container-fluid">

    <!-- Start::header-content-left -->
    <div class="header-content-left">

        <!-- Start::header-element -->
        <div class="header-element">
            <div class="horizontal-logo">
                <a href="#" class="header-logo">
                     <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" height=80; width=80; alt="logo" class="desktop-logo">
                   
                </a>
            </div>
        </div>
        <!-- End::header-element -->

        <!-- Start::header-element -->
        <div class="header-element">
            <!-- Start::header-link -->
            <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                <i class="header-icon fe fe-align-left"></i>
            </a>
            <div class="main-header-center d-none d-lg-block">
                <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search d-none d-md-block"></i></button>
            </div>
            <!-- End::header-link -->
        </div>
        <!-- End::header-element -->

    </div>
    <!-- End::header-content-left -->

    <!-- Start::header-content-right -->
    <div class="header-content-right">

        <div class="header-element Search-element d-block d-lg-none">
            <!-- Start::header-link|dropdown-toggle -->
            <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="header-link-icon"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            </a>
            <!-- End::header-link|dropdown-toggle -->
            <ul class="main-header-dropdown dropdown-menu dropdown-menu-end Search-element-dropdown" data-popper-placement="none">
                <li>
                    <div class="input-group w-100 p-2"> 
                        <input type="text" class="form-control" placeholder="Search....">
                        <div class="btn btn-primary"> 
                            <i class="fa fa-search" aria-hidden="true"></i> 
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Start::header-element -->
        <div class="header-element headerProfile-dropdown">
            <!-- Start::header-link|dropdown-toggle -->
            <a class="header-link dropdown-toggle" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                <img class="rounded-circle" src="https://demo.neomlmsoftware.com/binary/assets/images/flags/en.png" alt="" width="19" height="19"/>
                
            </a>

            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                        <a class="dropdown-item" href="https://demo.neomlmsoftware.com/binary/lang/en">
                        <img class="rounded-circle border border-1 p-1" src="https://demo.neomlmsoftware.com/binary/assets/images/flags/en.png" alt="Flag" width="40" height="40">
                        English
                    </a>
                                        <div class="dropdown-divider m-0"></div>
                                                            <a class="dropdown-item" href="https://demo.neomlmsoftware.com/binary/lang/es">
                        <img class="rounded-circle border border-1 p-1" src="https://demo.neomlmsoftware.com/binary/assets/images/flags/es.png" alt="Flag" width="40" height="40">
                        Spanish
                    </a>
                                        <div class="dropdown-divider m-0"></div>
                                                            <a class="dropdown-item" href="https://demo.neomlmsoftware.com/binary/lang/de">
                        <img class="rounded-circle border border-1 p-1" src="https://demo.neomlmsoftware.com/binary/assets/images/flags/de.png" alt="Flag" width="40" height="40">
                        Doucth
                    </a>
                                         

                </div>
            </div>
            <!-- End::header-link|dropdown-toggle -->

        </div> 
        <!-- End::header-element -->

        <!-- Start::header-element -->
        <div class="header-element header-theme-mode">
            <!-- Start::header-link|layout-setting -->
            <a href="javascript:void(0);" class="header-link layout-setting">
                <span class="light-layout">
                    <!-- Start::header-link-icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z"/></svg>
                    <!-- End::header-link-icon -->
                </span>
                <span class="dark-layout">
                    <!-- Start::header-link-icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"/></svg>
                    <!-- End::header-link-icon -->
                </span>
            </a>
            <!-- End::header-link|layout-setting -->
        </div>
        <!-- End::header-element -->

        <!-- Start::header-element -->
        
        <!-- End::header-element -->

        <!-- Start::header-element -->
        <div class="header-element header-fullscreen">
            <!-- Start::header-link -->
            <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open full-screen-icon header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close full-screen-icon header-link-icon d-none" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M320-200v-120H200v-80h200v200h-80Zm240 0v-200h200v80H640v120h-80ZM200-560v-80h120v-120h80v200H200Zm360 0v-200h80v120h120v80H560Z"/></svg>
            </a>
            <!-- End::header-link -->
        </div>
        <!-- End::header-element -->

        <!-- Start::header-element -->
        
        <!-- End::header-element -->

        <!-- Start::header-element -->
        <div class="header-element headerProfile-dropdown">
            <!-- Start::header-link|dropdown-toggle -->
            <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <img src="https://demo.neomlmsoftware.com/binary/assets/images/profile/nophoto.png" alt="img" width="37" height="37" class="rounded-circle">
            </a>
            <!-- End::header-link|dropdown-toggle -->
            <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu" aria-labelledby="mainHeaderProfile">
                <li>
                    <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                        <div class="my-auto">
                            <h6 class="mb-0 lh-1 text-fixed-white">admin</h6><span class="fs-11 op-7 lh-1">admin</span>
                        </div>
                    </div>
                </li>
                <li><a class="dropdown-item d-flex" href="https://demo.neomlmsoftware.com/binary/admin/member/profile"><i class="bx bx-user-circle fs-18 me-2 op-7"></i>Profile &amp; Account</a></li>
                
                <li><a class="dropdown-item d-flex border-block-end" href="https://demo.neomlmsoftware.com/binary/admin/mail/inbox"><i class="bx bxs-inbox fs-18 me-2 op-7"></i>Inbox</a></li>
                <li><a class="dropdown-item d-flex" href="https://demo.neomlmsoftware.com/binary/lock-screen"><i class="bx bx-lock fs-18 me-2 op-7"></i>Lock Screen</a></li>
                                <li><a class="dropdown-item d-flex border-block-end" href="https://demo.neomlmsoftware.com/binary/admin/settings/plan-management"><i class="bx bx-slider-alt fs-18 me-2 op-7"></i>Settings</a></li>
                                <li><a class="dropdown-item d-flex" href="../login.php"><i class="bx bx-log-out fs-18 me-2 op-7"></i>Logout</a></li>
            </ul>
        </div>  
        <!-- End::header-element -->

        <!-- Start::header-element -->
        <div class="header-element">
            <!-- Start::header-link|switcher-icon -->
            <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
            </a>
            <!-- End::header-link|switcher-icon -->
        </div>
        <!-- End::header-element -->

    </div>
    <!-- End::header-content-right -->

</div>
    <!-- End::main-header-container -->

</header>
<!-- /app-header -->

<!-- Start::Off-canvas sidebar-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="header-sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header rounded-0">
        <h5 class="fs-14 text-uppercase mb-0 fw-semibold" id="sidebarLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body rounded-0 p-0">
        <ul class="nav nav-tabs tab-style-1 d-block" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#chat" aria-current="page" href="#chat" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-message-circle fs-15 me-2"></i>Chat</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#notifications" href="#notifications" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-bell fs-15 me-2"></i> Notifications</a>
            </li>
            <li class="nav-item mb-0" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#friends" href="#friends" aria-selected="true" role="tab"><i class="fe fe-users fs-15 me-2"></i>Friends</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="chat" role="tabpanel">
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-primary rounded-circle avatar-md">CH</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>New Websites is Created</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">30 mins ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-danger rounded-circle avatar-md">N</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Prepare For the Next Project</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">2 hours ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-info rounded-circle avatar-md">S</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Decide the live Discussion</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">3 hours ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-warning rounded-circle avatar-md">K</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Meeting at 3:00 pm</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">4 hours ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-success rounded-circle avatar-md">R</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Prepare for Presentation</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">1 day ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-pink rounded-circle avatar-md">MS</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Prepare for Presentation</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">1 day ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                    <div class="">
                        <span class="avatar bg-purple rounded-circle avatar-md">L</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Prepare for Presentation</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">45 minutes ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="list d-flex align-items-center p-3">
                    <div class="">
                        <span class="avatar bg-blue rounded-circle avatar-md">U</span>
                    </div>
                    <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                        <p class="mb-0 d-flex ">
                            <b>Prepare for Presentation</b>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                <small class="text-muted ms-auto">2 days ago</small>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="notifications" role="tabpanel">
                <div class="list-group list-group-flush ">
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/1.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Madeleine</strong> Hey! there I' am available....
                            <div class="small text-muted">
                                3 hours ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Anthony</strong> New product Launching...
                            <div class="small text-muted">
                                5 hour ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/3.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Olivia</strong> New Schedule Realease......
                            <div class="small text-muted">
                                45 minutes ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/4.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Madeleine</strong> Hey! there I' am available....
                            <div class="small text-muted">
                                3 hours ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/5.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Anthony</strong> New product Launching...
                            <div class="small text-muted">
                                5 hour ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Olivia</strong> New Schedule Realease......
                            <div class="small text-muted">
                                45 minutes ago
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/7.jpg" alt="img">
                        </span>
                        <div class="ms-3">
                            <strong>Olivia</strong> Hey! there I' am available....
                            <div class="small text-muted">
                                12 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0 active show" id="friends" role="tabpanel">
                <div class="list-group list-group-flush ">
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/1.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/5.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/8.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/8.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/10.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/11.jpeg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/12.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/2.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/3.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/4.jpg" alt="img">
                        </span>
                        <div class="ms-2">
                            <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::Off-canvas sidebar-->

<!-- Message Modal -->
<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-right chatbox" role="document">
        <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0 shadow-none">
                <!-- action-header -->
                <div class="action-header clearfix">
                    <div class="float-start hidden-xs d-flex">
                        <div class="avatar avatar-lg rounded-circle me-3">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img" alt="img">
                        </div>
                        <div class="align-items-center mt-2">
                            <h5 class="text-fixed-white mb-0">Daneil Scott</h5>
                            <span class="dot-label bg-success"></span><span class="me-3 text-fixed-white">online</span>
                        </div>
                    </div>
                    <ul class="ah-actions actions align-items-center float-end">
                        <li class="call-icon">
                            <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                                <i class="fe fe-phone"></i>
                            </a>
                        </li>
                        <li class="video-icon">
                            <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                                <i class="fe fe-video"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                <li class="dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                <li class="dropdown-item"><i class="fa fa-ban"></i> Block</li>
                            </ul>
                        </li>
                        <li>
                            <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fe fe-x-circle text-fixed-white"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- action-header end -->

                <!-- msg_card_body -->
                <div class="card-body msg_card_body">
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">February 1st, 2019</abbr>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you Jenna Side?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            Hi Connor Paige i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            I am good too, thank you for your chat template
                            <span class="msg_time">9:00 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            You welcome Connor Paige
                            <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Okay Bye, text you later..
                            <span class="msg_time">9:12 AM, Today</span>
                        </div>
                    </div>
                </div>
                <!-- msg_card_body end -->
                <!-- card-footer -->
                <div class="card-footer border-top">
                    <div class="msb-reply d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Typing....">
                            <button type="button" class="btn btn-primary ">
                                <i class="far fa-paper-plane" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- card-footer end -->
            </div>
        </div>
    </div>
</div>
<!--End modal -->

<!--Video Modal -->
<div id="videomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-fixed-dark border-0">
            <div class="modal-body mx-auto text-center p-5">
                <h5 class="text-fixed-white">Valex Video call</h5>
                <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h4 class="mb-1 fw-semibold text-fixed-white">Daneil Scott</h4>
                <h6 class="loading text-fixed-white">Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-video-slash"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone bg-danger text-fixed-white"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-microphone-slash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- modal-body -->
        </div>
    </div><!-- modal-dialog -->
</div>
<!--End modal -->

<!-- Audio Modal -->
<div id="audiomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-5">
                <h6>Valex Voice call</h6>
                <img src="https://demo.neomlmsoftware.com/binary/assets/backend/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h5 class="mb-1 fw-medium">Daneil Scott</h5>
                <h6 class="loading">Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-volume-up bg-light text-dark"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone text-fixed-white bg-success"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-microphone-slash bg-light text-dark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- modal-body -->
        </div>
    </div><!-- modal-dialog -->
</div>
<!--End modal -->
<!-- Start::app-sidebar -->
     <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="#" class="header-logo">
                <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" height=80; width=80; alt="logo" class="desktop-logo">
                <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" alt="logo" class="toggle-logo">
                <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" alt="logo" class="desktop-white">
                <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" alt="logo" class="toggle-white"> 
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <img src="https://demo.neomlmsoftware.com/binary/assets/images/logo/logo.png" height=80; width=80; alt="logo" class="desktop-logo">
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <!-- End::slide -->
                                        

                                        
                    
                                                                                                          

                     


                    <li class="slide">
                        <a href="dashboard.php" class="side-menu__item  active" >
                         <i class="side-menu__icon fa-1sm fa-solid fa-chart-pie "></i>
                         <span class="side-menu__label">Dashboard</span>
                     </a>
                 </li>
                 <!-- End::slide -->
                  
                
                    
                                                                                                          

                     


                    <!-- <li class="slide">
                        <a href="/signup" class="side-menu__item  " >
                         <i class="side-menu__icon fa-1sm fas fa-user-plus "></i>
                         <span class="side-menu__label">Signup</span>
                     </a>
                 </li> -->
                 <!-- End::slide -->
                  
                
                    
                                                                                                          

                     


                    <li class="slide">
                        <a href="profile.php" class="side-menu__item  " >
                         <i class="side-menu__icon fa-1sm fas fa-id-card "></i>
                         <span class="side-menu__label">Profile</span>
                     </a>
                 </li>
                 <!-- End::slide -->
                  
                
                    
                    
                    <li class="slide__category"><span class="category-name">General</span></li>
                                                                                                          

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fas fa-gear "></i>

                       <span class="side-menu__label">Settings</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="site-info.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Company info</a>
                    </li>

                                        <li class="slide">
                        <a href="plan-management.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Configurations</a>
                    </li>

                                        <li class="slide">
                        <a href="package-management.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Package Management</a>
                    </li>

                                        <li class="slide">
                        <a href="rank-management.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Rank Mangement</a>
                    </li>

                                        <li class="slide">
                        <a href="email-template.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Email Template</a>
                    </li>

                                        <li class="slide">
                        <a href="sub-admin.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Sub Admin</a>
                    </li>

                                        <li class="slide">
                        <a href="welcome-letter.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>Welcome letter</a>
                    </li>

                                        <li class="slide">
                        <a href="t-and-c.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>T&C</a>
                    </li>

                                        <li class="slide">
                        <a href="system-reset.php" class="side-menu__item "><i data-feather="fas fa-gear"></i>System Reset</a>
                    </li>

                     
                </ul>

                 
                
                    
                                                                                                          

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fa-regular fa-compass "></i>

                       <span class="side-menu__label">Tools</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="news-management.php" class="side-menu__item "><i data-feather="fa-regular fa-compass"></i>News Management</a>
                    </li>

                                        <li class="slide">
                        <a href="event-management.php" class="side-menu__item "><i data-feather="fa-regular fa-compass"></i>Event Management</a>
                    </li>

                                        <li class="slide">
                        <a href="upload-efiles.php" class="side-menu__item "><i data-feather="fa-regular fa-compass"></i>Upload Efiles</a>
                    </li>

                     
                </ul>

                 
                
                    
                                                                                                          

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fas fa-user-times "></i>

                       <span class="side-menu__label">Networks</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="genealogy-tree.php" class="side-menu__item "><i data-feather="fas fa-user-times"></i>Genealogy tree</a>
                    </li>

                                        <li class="slide">
                        <a href="hierarchical-view.php" class="side-menu__item "><i data-feather="fas fa-user-times"></i>Hierarchical view</a>
                    </li>

                                        <li class="slide">
                        <a href="referral-tree.php" class="side-menu__item "><i data-feather="fas fa-user-times"></i>Referral Tree</a>
                    </li>

                                        <li class="slide">
                        <a href="invite-friend.php" class="side-menu__item "><i data-feather="fas fa-user-times"></i>Invite a friend</a>
                    </li>

                     
                </ul>

                 
                
                    
                                          
                    <li class="slide__category"><span class="category-name">Financial</span></li>
                                                                                    

                     


                    <li class="slide">
                        <a href="my-tickets.php" class="side-menu__item  " >
                         <i class="side-menu__icon fa-1sm fa fa-phone "></i>
                         <span class="side-menu__label">My Tickets</span>
                     </a>
                 </li>
                 <!-- End::slide -->
                  
                
                    
                                                                                                          

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fas fa-wallet "></i>

                       <span class="side-menu__label">Wallet</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="wallets-summary.php" class="side-menu__item "><i data-feather="fas fa-wallet"></i>Wallet summary</a>
                    </li>

                                        <li class="slide">
                        <a href="fund-transfer.php" class="side-menu__item "><i data-feather="fas fa-wallet"></i>Fund transfer</a>
                    </li>

                                        <li class="slide">
                        <a href="credit-debit-amount.php" class="side-menu__item "><i data-feather="fas fa-wallet"></i>Credit / Debit Amount</a>
                    </li>

                                        <li class="slide">
                        <a href="payout-release.php" class="side-menu__item "><i data-feather="fas fa-wallet"></i>Payout Release</a>
                    </li>

                     
                </ul>

                 
                
                    
                                                                
                    <li class="slide__category"><span class="category-name">Pages</span></li>
                                                              

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fas fa-envelope "></i>

                       <span class="side-menu__label">Internal Mail</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="inbox.php" class="side-menu__item "><i data-feather="fas fa-envelope"></i>Inbox</a>
                    </li>

                                        <li class="slide">
                        <a href="mail-sent.php" class="side-menu__item "><i data-feather="fas fa-envelope"></i>Sent items</a>
                    </li>

                                        <li class="slide">
                        <a href="compose-mail.php" class="side-menu__item "><i data-feather="fas fa-envelope"></i>Compose</a>
                    </li>

                     
                </ul>

                 
                
                    
                                                                                                          

                    
                 <!-- Start::slide -->

                 <li class="slide has-sub ">
                    <a href="javascript:void(0);" class="side-menu__item" >
                       <i class="side-menu__icon fa-1sm fas fa-signal "></i>

                       <span class="side-menu__label">Reports</span>
                       <i class="fe fe-chevron-right side-menu__angle"></i>
                   </a>
                   <ul class="slide-menu child1">

                                        <li class="slide">
                        <a href="user-joining.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>User Joining</a>
                    </li>

                                        <li class="slide">
                        <a href="wallet-details.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>Wallet Details</a>
                    </li>

                                        <li class="slide">
                        <a href="active-inactive-report.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>Activate / Inactivate</a>
                    </li>

                                        <li class="slide">
                        <a href="package-purchase-report.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>Package Purchases</a>
                    </li>

                                        <li class="slide">
                        <a href="wallet-summary.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>Wallet summary</a>
                    </li>

                                        <li class="slide">
                        <a href="rank-report.php" class="side-menu__item "><i data-feather="fas fa-signal"></i>Rank Report</a>
                    </li>

                     
                </ul>

                 
                
                    
                                                                                     
                    <li class="slide__category"><span class="category-name">Logout</span></li>
                                         

                     


                    <li class="slide">
                        <a href="../login.php" class="side-menu__item  " >
                         <i class="side-menu__icon fa-1sm fas fa-thumbs-down "></i>
                         <span class="side-menu__label">Logout</span>
                     </a>
                 </li>
                 <!-- End::slide -->
                  
                

                
            </li>

            <!-- End::slide -->


        </ul>
        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
    </nav>
    <!-- End::nav -->

</div>
<!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->