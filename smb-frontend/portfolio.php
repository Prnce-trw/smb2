<!doctype html>
<html lang="en">

<head>
    <title>ผลงาน - SMB Wheel</title>
    <?php require('header.php'); ?>
    <style>
        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 0;
            outline: 0;
        }

        .modal-header {
            border-bottom: 1px solid #fff;
        }

        .modal-footer {
            border-top: 1px solid #fff;
        }

        .btn-warning {
            color: #fff;
            background-color: #ff8200;
            border-color: #ff8200;
        }

        /*Update 28 may 2020*/
        .carousel-control-next,
        .carousel-control-prev {
            width: 10%;
        }

        .modal-header {
            padding: 0rem 0rem;
        }

        .modal-header .close {
            margin: -1rem 0rem -1rem auto;
        }
    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div class="banner-page head-portfolio">
        <div class="centered headPage-text">หน้าหลัก / ผลงาน</div>
    </div>


    <div class="container mt-5 my-5 pr-2 pl-2">
        <div class="row">
            <div class="col-lg-5 col-xs-12" style="padding-left: 0px">
                <div class="about-us">
                    <div class="input-group border">
                        <input type="search" aria-describedby="button-addon3" class="form-control bg-none" placeholder="ค้นหาจากแบรนด์รถ">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xs-12" style="padding-right: 0px; margin-bottom: 40px;">
                <div class="about-us">
                    <div class="input-group border">
                        <input type="search" aria-describedby="button-addon3" class="form-control bg-none" placeholder="ค้นหาจากแบรนด์สินค้า">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xs-12" style="padding-right: 0px;padding-left: 27px;margin-bottom: 40px;">
                <button type="button" class="btn btn-border-0 btn-orange">ค้นหา</button>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h1.jpg" alt="Card image car">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">TOYOTA</a><a id="orange15"> VIOS</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">Cosmis Iconic Racing ZR-5V 17x8.0 / 17x9.0 5x114.3 ET35 + T
                                            OYO T1R 215/45-17</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-1" alt="B-1" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-1" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal1" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/3.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal1" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal1" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h2.jpg" alt="Card image cap">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">TOYOTA</a><a id="orange15"> VIOS</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">Cosmis XT-206R, VCP.S5R</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-2" alt="B-2" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-2" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal2" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/3.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal2" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal2" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-none d-sm-block d-md-none">
                    <!-- wrap every 2 on sm-->
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h3.jpg" alt="Card image car">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">Mercedes-Benz</a><a id="orange15"> A250</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">NAYA SPIRIT VICTORIA V.1</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-3" alt="B-3" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-3" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal3" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/3.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a id="orange14" style="padding-left: 15px">Mercedes-Benz</a><a id="orange15"> A250</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal3" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal3" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h4.jpg" alt="Card image cap">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">Toyota</a><a id="orange15">Yaris</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">NAYA SPIRIT VICTORIA V.1</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-4" alt="B-4" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-4" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal4" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a id="orange14" style="padding-left: 15px">Toyota</a><a id="orange15">Yaris</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/3.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal4" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal4" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-none d-sm-block d-md-none">
                    <!-- wrap every 2 on sm-->
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h5.jpg" alt="Card image car">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">Isuzu</a><a id="orange15"> Mu-X</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">XT-Series XT-005R, XT-206R</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-5" alt="B-5" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-5" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal5" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a id="orange14" style="padding-left: 15px">Isuzu</a><a id="orange15"> Mu-X</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/3.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal5" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal5" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="images/h6.jpg" alt="Card image cap">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">BMW</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">NAYA SPIRIT VICTORIA V.1</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">5 Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-6" alt="B-6" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-6" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal6" class="carousel slide" data-ride="carousel" interval="false">

                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                                                        <div class="carousel-item active">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/6.jpg" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a id="orange14" style="padding-left: 15px">BMW</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/2.jpg" alt="slide 2">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/5.jpg" alt="slide 3">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/4.jpg" alt="slide 4">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">

                                                                            <img class="img-fluid mx-auto d-block" src="images/portfolio/1.jpg" alt="slide 5">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">Cosmis XT-206R, VCP.S5R</h6>
                                                                                                <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a class="carousel-control-prev" href="#modal6" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>

                                                                <a class="carousel-control-next text-faded" href="#modal6" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-none d-sm-block d-md-none">
                    <!-- wrap every 2 on sm-->
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item page-np"><a href="#" style="color: black;">Prev</a></li>
                        <li class="page-item page-np active"><a href="#" style="color: #ff8200;">1</a></li>
                        <li class="page-item page-np"><a href="#" style="color: black;">2</a></li>
                        <li class="page-item page-np"><a href="#" style="color: #ff8200;">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script>
        $('.carousel').carousel({
            interval: false,
        });
    </script>
    <?php require('footer.php'); ?>
</body>

</html>