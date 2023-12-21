<?php

session_start();
$pageId = "b01";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // require_once(dirname(dirname(__FILE__)).'/header-global.php');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Identifier-URL" content="http://www.atiz.com" />
    <meta name="author" content="">
    <title>Atiz - Software Store</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="//www.atiz.com/atiz1.ico" rel="shortcut icon" />
    <link href="../css/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/store-style7.css?v=270722.1" rel="stylesheet">
    <link href="../core_css/aos.css" rel="stylesheet">
    <link href="../core_css/slide.min.css" rel="stylesheet">
    <link href="../core_css/home-new.css" rel="stylesheet">
    <link href="../core_css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../core_css/global-new.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #f5f5f5 !important;">
    <?php require_once(dirname(dirname(__FILE__)) . '/header-responsive.php'); ?>
    <section class="software-store">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>SOFTWARE STORE</h1>
                </div>
                <div class="col-lg-12">
                    <div class="software-block">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="software-img-block software-img-block-1" onclick="location.href = 'https://www.atiz.com/bookdrive-capture/'">
                                        <img src="images/software-store-1.png" alt="">
                                        <h2>BookDrive Capture 10</h2>
                                        <img src="images/software-camera-1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="software-img-block software-img-block-2" onclick="location.href = 'https://www.atiz.com/capture-sony/'">
                                        <img src="images/software-store-2.png" alt="">
                                        <h2>BookDrive Capture 10</h2>
                                        <img src="images/software-camera-2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="software-img-block software-img-block-3" onclick="location.href = 'https://www.atiz.com/bookdrive-editor-pro/'">
                                        <img src="images/software-store-3.png" alt="">
                                        <h2>BookDrive Capture 10</h2>
                                        <img src="images/software-camera-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->

                            <!-- Add Arrows -->
                            <!-- <div class="swiper-button-next"></div> -->
                            <!-- <div class="swiper-button-prev"></div> -->
                        </div>

                        <div class="swiper-pagination hidden-ds"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="software-warning">
                        <p>You are eligible to buy an Upgrade if your BookDrive is within 4 years from time of purchase. After 4 years, it will require a New License.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bookdrive">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head">
                        <h1>BookDrive Capture</h1>
                        <img src="images/software-store-1.png" alt="">
                    </div>
                    <p>The most current version of camera scanning software for Canons</p>
                    <p>The one software to control all the cameras</p>
                </div>
                <div class="col-lg-12">
                    <div class="bookdrive-block">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <img src="images/book-b.png" class="hidden-mb" alt="">
                                <img src="images/book-b-mb.png" class="hidden-ds" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                Why Upgrade to Version 10?
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="list-content" style="margin-top: 35px;">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Fully supports Windows 10, Windows 11</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Supports new, amazing Canon cameras such as EOS R5 (mirrorless), EOS RP, 5DS for ultra high-resolution and future proofing</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Supports models such as 850D, 90D, 1500D and a lot more!.</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Most secure, stable and feature-packed yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                                Key Features
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="list-content" style="margin-top: 35px;">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Connect and controls dual Canon EOS cameras</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>live view, live preview</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Inset, replace</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Crop, Resize, Deskew</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Crop, Export and combine to PDF</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-upgrade-editor">
                                            <button type="submit" class="block-outline" style="background-color: transparent;">
                                                <p>Upgrade<br>$1,499</p>
                                            </button>
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="QYLHZJ82NVJSC">
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-new-license-editor">
                                            <button type="submit" class="block-fill" style="border: none;">
                                                <p>New Licesnse<br>$2,399</p>
                                            </button>
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="NGZ9R24Q8L9P2">
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bookdrive">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head">
                        <h1>Atiz Capture for Sony</h1>
                        <img src="images/software-store-2.png" alt="">
                    </div>
                    <p>The most current version of camera scanning software for Sony</p>
                    <p>The one software to control all the cameras</p>
                </div>
                <div class="col-lg-12">
                    <div class="bookdrive-block">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 hidden-ds">
                                <img src="images/book-b-2.png" class="hidden-mb" alt="">
                                <img src="images/book-b-2-mb.png" class="hidden-ds" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                Key Features
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="list-content" style="margin-top: 35px;">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Fully supports Windows 11, Windows 10</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Connects and controls dual Sony Alpha Mirrorless cameras at the same time</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Fast speed and stable control</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>You can configure and change settings such as Aperture, Shutter Speed, ISO easily right within the software</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>live view, live preview</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Inset, replace</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Crop, Export and combine to PDF</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-lg-6 col-md-12">
                                        <div class="block-outline">
                                            <p>Upgrade<br>$2,499</p>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-md-12">
                                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-upgrade-capture">
                                            <button type="submit" class="block-fill" style="border: none;">
                                                <p>New Licesnse<br>$3,399</p>
                                            </button>
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="5229EX39ANF6Q">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 hidden-mb">
                                <img src="images/book-b-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bookdrive">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head">
                        <h1>BookDrive Editor Pro 10</h1>
                        <img src="images/software-store-3.png" alt="">
                    </div>
                    <p>Also our latest version for post-scan image processing. Can be purchased separately.</p>
                    <p>Works great with images from other cameras and scanners as well.</p>
                    <p>The one software to control all the cameras</p>
                </div>
                <div class="col-lg-12">
                    <div class="bookdrive-block">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <img src="images/book-b-3.png" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="accordion" id="accordionExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="true" aria-controls="collapseThree1">
                                                Why Upgrade to Version 10?
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="list-content" style="margin-top: 35px;">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Fully supports Windows 10, Windows 11</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Up to 60 times faster load time than previous version! Will save you tremendous amount of work. You will finish projects much faster then before.</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Designed specifically to supports ultra-highres, super-large file sizes from cameras sush as Sony A7R4.</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Also works with RAW format from Sonys, Canons, Nikons
                                                        (i.e. .ARW .CR3 .NEF files)</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>New, improved Export Tool with more granular options for file size optimnization.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                Key Features
                                            </button>
                                        </h2>
                                        <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="list-content" style="margin-top: 35px;">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Edit image color and illuminator</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Sharpen, Contrast</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Despeckel, Remove black border, Remove background</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Crop, Resize, Deskew</p>
                                                </div>
                                                <div class="list-content">
                                                    <img src="images/check-red-svg.png" alt="">
                                                    <p>Multibook, Multichapter</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-upgrade-editor">
                                            <button type="submit" class="block-outline" style="background-color: transparent;">
                                                <p>Upgrade<br>$1,499</p>
                                            </button>
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="ZD3ZSYBS2KHPU">
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-new-license-editor">
                                            <button type="submit" class="block-fill" style="border: none;">
                                                <p>New Licesnse<br>$2,399</p>
                                            </button>
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="VTDCAGRVCC494">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="special-offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><span>Special</span> Offers</h1>
                    <p>When you purchase Capture and Editor Pro together as a combo</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="offers-block">
                        <p>COMBO</p>
                        <p>Capture Sony + Editor Pro 10</p>
                        <img src="images/offer-1.png" alt="">
                        <div class="row">
                            <div class="row">
                                <!-- <div class="col-lg-6 col-md-12">
                                    <div class="block-outline">
                                        <p>Upgrade<br>$3,699</p>
                                        <div class="offer-price">save $299</div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-upgrade-capture">
                                        <button type="submit" class="block-fill" style="border: none;">
                                            <p>New Licesnse<br>$5,499</p>
                                            <div class="offer-price">save $299</div>
                                        </button>
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="4SH7X3TQJFFSL">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="offers-block">
                        <p>COMBO</p>
                        <p>Capture 10 + Editor Pro 10</p>
                        <img src="images/offer-2.png" alt="">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-upgrade-editor">
                                        <button type="submit" class="block-outline" style="background-color: transparent;">
                                            <p>Upgrade<br>$2,699</p>
                                            <div class="offer-price">save $299</div>
                                        </button>
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="PL98FFD2KLVS6">
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-new-license-editor">
                                        <button type="submit" class="block-fill" style="border: none;">
                                            <p>New Licesnse<br>$4,499</p>
                                            <div class="offer-price">save $299</div>
                                        </button>
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="RPPGAHTMP792N">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="every">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="every-block">
                        <img src="images/every-img.png" alt="">
                        <div>
                            <p>Every BookDrive comes with 2 software programs</p>
                            <p><span>BookDrive Capture</span> and <span>BookDrive Editor Pro</span></p>
                            <p>It comes with 1 year-right of free upgrade from time of purchase. The software has a perpetual license.</p>
                            <p>After free upgrade period, if you want the new versions, you will need to <span>purchase</span> the upgrade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once(dirname(dirname(__FILE__)) . '/footer-responsive.php'); ?>
    <script src="../core_js/bootstrap5-js.js"></script>
    <script src="../core_js/aos.js"></script>
    <script type="text/javascript">
        var js = jQuery.noConflict();

        var swiper = new Swiper('.swiper-container', {
            // mousewheel: {
            //     invert: true,
            // },
            slidesPerView: 3,
            centeredSlides: false,
            spaceBetween: 10,
            autoHeight: true,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                360: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                375: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                390: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                428: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    centeredSlides: false,
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                // clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        js(function() {

            //animate scroll
            // AOS.init({
            //     duration: 800
            // });

            js('.software-btn').on('click', function(e) {
                e.preventDefault();

                js(this).closest("form").submit();

            });

            js('.special-price-btn').on('click', function(e) {
                e.preventDefault();

                js(this).closest("form").submit();

            });

            js('.more-click').click(function(e) {
                e.preventDefault();
                js(this).text(function(i, t) {
                    return t == 'read less' ? 'read more' : 'read less';
                }).prev('.more-cont').slideToggle()
            });

        });
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                // Close all panels
                for (var j = 0; j < acc.length; j++) {
                    if (j !== i) {
                        acc[j].classList.remove("active");
                        acc[j].nextElementSibling.style.maxHeight = null;
                    }
                }

                // Toggle the clicked panel
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>