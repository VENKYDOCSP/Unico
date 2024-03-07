<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="..." crossorigin="anonymous" />
    <meta name="google-site-verification" content="tjHjpEjjnZT9IErMCkPUuHMbUbomjlbSnrWZXbep87w" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <!-- custom styling -->
    <link rel="icon" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/favicon.svg " sizes="32x32" />
    <link rel="icon" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/favicon.svg" sizes="192x192" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/navbarMobile.css">
    <link rel="stylesheet" href="./css/calculator.css">
    <?php if (isset($style)) {
        echo $style;
    }
    ?><title><?php if (isset($title)) {
                    echo $title;
                }
                ?></title>
    <!-- slick css -->
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- Slick Carousel CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Link to the file hosted on your server, -->
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">

    <!-- or link to the CDN -->
    <link rel="stylesheet" href="url-to-cdn/splide.min.css">


    <!-- Captcha V2  -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<header class="site-navbar normal-navbar top-navbar pt-0 p-0 m-0 text-center d-md-block d-none " role="banner" id="top">
    <div class="container-fluid text-center  py-1  ">
        <div class="row p-0 m-0 ">
            <div class="col-12 col-md-3   text-start d-none d-lg-block d-xl-block  ps-5 logobg">
                <a class="navbar-brand links" href="./">
                    <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/UnicoLogo.svg" class="img-fluid pt-1 "
                        alt="" width="auto"></a>
            </div>
            <div class="col-12 col-md-9 col-lg-9 p-0 m-0 maxWidthForHeadeMenu">
                <div class="p-1 d-md-block d-none  text-end">
                    <div class="container-fluid  ">
                        <div class="row topnavicon me-2">
                            <!-- <div class="col-md-13 col-12  mx-md-auto my-md-auto  p-0"> -->
                            <div class="py-md-0 col-xl-12 col-lg-12 col-md-12 col-12 d-flex justify-content-end">
                                <div class="px-md-3 ps-3">
                                    <img class="img-fluid"
                                        src="https://unicowebsite.s3.ap-south-1.amazonaws.com/SvgIcon.svg" />
                                    <a href="tel:044 611711" class="text-decoration-none  text-light">044 611711</a>
                                </div>
                                <div class="px-md-3 px-3">
                                    <img class="img-fluid"
                                        src="https://unicowebsite.s3.ap-south-1.amazonaws.com/SvgIcon1.svg" />
                                    <a href="mailto:customercare@unicohfc.com"
                                        class="text-decoration-none  text-light">customercare@unicohfc.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="site-navigation position-relative text-end d-flex justify-content-center "
                    role="navigation">
                    <ul class="site-menu submenu d-flex justify-content-center align-items-center p-0">
                        <li class=""><a href="./"><span
                                    class=" spantopmenu <?php if (isset($active) &&  $active === 0) echo "active1" ?>">Home
                                </span></a></li>
                        <!-- <i class="fa-solid fa-house-chimney pe-2" style="padding-right:2px "></i> -->
                        <li class=" has-children <?php if (isset($active) && ($active === 1 || $active === 2 || $active === 3 || $active === 4)) echo "active" ?>"
                            id="ServiceMenu">
                            <a href="javascript:void(0)"><span class="spantopmenu"
                                    <?php echo (isset($active) && $active === 1) ? 'style="background-color: #B7B946;color:#ffffff!important;"' : ''; ?>
                                    <?php echo (isset($active) && $active === 2) ? 'style="background-color: #6193BB;color:#ffffff!important;"' : ''; ?>
                                    <?php echo (isset($active) && $active === 3) ? 'style="background-color: #F48B95;color:#ffffff!important;"' : ''; ?>>About
                                    Us
                                    <i class="fa-solid fa-caret-down"></i>
                                </span></a>
                            <ul class="dropdown arrow-top customebgdrop">
                                <li><a class="<?php echo (isset($active) && $active === 1) ? 'active' : ''; ?>"
                                        <?php echo (isset($active) && $active === 1) ? 'style="background-color: #B7B946;color:#ffffff!important;"' : ''; ?>
                                        href="./companyprofile.php">Company Profile</a></li>
                                <li><a class="<?php echo (isset($active) && $active === 2) ? 'active' : ''; ?>"
                                        <?php echo (isset($active) && $active === 2) ? 'style="background-color: #6193BB;color:#ffffff!important;"' : ''; ?>
                                        href="./directors.php">Board of Directors</a></li>
                                <li><a class="<?php echo (isset($active) && $active === 3) ? 'active' : ''; ?>"
                                        <?php echo (isset($active) && $active === 3) ? 'style="background-color: #F48B95;color:#ffffff!important;"' : ''; ?>
                                        href="./management.php">Management</a></li>
                            </ul>
                        </li>
                        <li class=" has-children <?php if (isset($active) && $active === 5) echo "active" ?>"
                            id="ServiceMenu">
                            <a href="javascript:void(0)"><span class="spantopmenu">Policies
                                    <i class="fa-solid fa-caret-down"></i>
                                </span></a>
                            <ul class="dropdown arrow-top policiesdropDown">
                                <li><a class=" fs-6 text-dark"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/FAIR+PRACTICES+CODE.pdf"
                                        target="_blank">
                                        Fair Practices Code</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+002+-+Policy+on+KYC.pdf"
                                        target="_blank">
                                        KYC Policy</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SEC-002+Fit+and+Proper+criteria+of+Directors.pdf"
                                        target="_blank">
                                        Fit and Proper Criteria of Directors</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/Unico-+Fin-+004+-+Related+Party.pdf"
                                        target="_blank">
                                        Policy on Related Party Transactions</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://repcobank.s3.ap-south-1.amazonaws.com/UNICO-SECRETARIAL-004-CORPORATE+GOVERNANCE+POLICY.pdf"
                                        target="_blank">
                                        Corporate Governance policy</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+FIn+-+002+-+Interest+Rate+Policy.pdf"
                                        target="_blank">
                                        Interest Rate Policy </a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+001+Customer+Grievance+Rederessal+policy.pdf"
                                        target="_blank">
                                        Customer Grievance Redressal Policy</a></li>
                                <li><a class=" text-dark fs-6"
                                        href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-HR-001-Posh+Policy.pdf"
                                        target="_blank">
                                        Prevention Of Sexual Harassment (POSH) Policy</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="careers.php"><span class="spantopmenu "
                                    <?php echo (isset($active) && $active === 6) ? 'style="background-color: #28B3A8;color:#ffffff!important;"' : ''; ?>>Careers
                                </span></a></li>
                        <li class=""><a href="contact.php"><span class="spantopmenu"
                                    <?php echo (isset($active) && $active === 7) ? 'style="background-color:#A0927C;color:#ffffff!important;"' : ''; ?>>Contact
                                    us </span></a></li>
                        <!-- <li class="navbtn"><a href="javascript:void(0);"><span class="spantopmenu <?php if (isset($active) &&  $active === 6) echo "active1" ?>">Call us </span></a></li> -->

                    </ul>
                    <div class="d-flex gap-3   align-items-center  ms-5 ps-4 ">
                        <!-- <a href="https://www.facebook.com/people/Unico-Housing-Finance-Private-Limited/61553679195669/" target="_blank"> -->
                        <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_1.svg" class="img-fluid" />
                        <!-- </a> -->
                        <a href="https://www.instagram.com/unicohousingfinance/" target="_blank">

                            <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_2.svg" class="img-fluid" />
                        </a>
                        <a href="https://www.facebook.com/people/Unico-Housing-Finance-Private-Limited/61553679195669/"
                            target="_blank">

                            <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_3.svg" class="img-fluid" />
                        </a>
                        <a href="https://www.linkedin.com/in/unico-housing-finance-7b245b2a1/" target="_blank">

                            <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_4.svg" class="img-fluid" />
                        </a>
                        <a href="https://twitter.com/UnicoHousing" target="_blank">
                            <!-- <a href="https://www.instagram.com/unicohousingfinance/" target="_blank"> -->
                            <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_5.svg" class="img-fluid" />
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="position-relative ">
    <a class="<?php echo (isset($active) && $active === 4) ? 'active' : ''; ?>"
        <?php echo (isset($active) && $active === 4) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?>
        href="./product.php"> <button type="button" class="btn btn-primary floatbtn">APPLY FOR LOAN</button></a>
</div>

<p class="showPopupBtn mt-4" style="display: none;">
    <a href="#top">
        <?php include './assets/UpArrow.php'; ?>
    </a>
</p>

<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 600) { // when user scrolls down 100px from the top of the document
            $('.showPopupBtn').fadeIn();
        } else {
            $('.showPopupBtn').fadeOut();
        }
    });

    $('.showPopupBtn').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 100);
        return false;
    });
});
</script>

<body>