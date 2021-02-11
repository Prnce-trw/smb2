<!doctype html>
<html lang="en">

<head>
    <title>Products - SMB</title>
    @include('frontend.header')
    <style>
         .product-name .about-us a{
            color: #252525;
        }

        #body-row {
            margin-left: 0;
            margin-right: 0;
        }

        #sidebar-container {
            min-height: 100vh;
            background-color: #f7f7f7;
            padding: 0;
        }

        /* Sidebar sizes when expanded and expanded */
        .sidebar-expanded {
            width: 230px;
        }

        .sidebar-collapsed {
            width: 60px;
        }

        /* Menu item*/
        #sidebar-container .list-group a {
            height: 50px;
            color: #000;
        }

        /* Submenu item*/
        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }

        .sidebar-submenu {
            font-size: 0.9rem;
        }

        /* Separators */
        .sidebar-separator-title {
            background-color: #fff;
            height: 35px;
        }

        .sidebar-separator {
            background-color: #fff;
            height: 25px;
        }

        .logo-separator {
            background-color: #fff;
            height: 60px;
        }

        /* Closed submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
            content: " \f0d7";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        /* Opened submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
            content: " \f0da";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #000;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .text_product h4 {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.3px;
            padding-bottom: 15px;
        }

        .text_product h6 {
            font-size: 20px;
            font-weight: 500 !important;
            letter-spacing: 0.3px;
            padding-bottom: 0px;
            padding-top: 0px;
        }

        .text_product h5 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
            font-weight: 300;
            letter-spacing: 0.3px;
            font-size: 15px;
            padding-top: 15px;
        }

        .text_product p {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
            padding-bottom: 10px;
            color: #666;
            letter-spacing: 0.3px;
        }

        .text_product {
            margin: 10px 0 25px;
        }

        .pad-banner {
            padding: 8px 0 0px;
        }

        .nopan {
            padding: 0;
        }

        .banner h2 {
            position: absolute;
            left: 50%;
            top: 60%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 40px;
            font-weight: 600;
            color: #fff;
            z-index: 1;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
            text-shadow: 1.5px 1.5px 1px #666666a3;
        }

        .banner p {
            position: absolute;
            left: 50%;
            top: 60%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 16px;
            color: #1b75bc;
            z-index: 1;
            letter-spacing: 1px;
        }

        .banner img {
            position: relative;
        }

        .pmd-range-slider .noUi-handle:before {
            display: block;
            width: 100%;
            height: 100%;
            background: #ff8200;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 50%;
        }

        .pmd-range-slider .noUi-connect {
            background: #ebebeb;
        }

        .pmd-range-slider.noUi-horizontal .noUi-handle-lower .noUi-tooltip:before,
        .pmd-range-slider.noUi-horizontal .noUi-handle-upper .noUi-tooltip:before {
            background: #ff8200;
        }

        .pmd-range-slider .noUi-tooltip {
            background: #ff8200;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #000;
        }

        .panel-title>a,
        .panel-title>a:active {
            display: block;
            padding: 15px 10px;
            font-size: 20px;
            text-decoration: none;
            color: #000;
        }

        .panel-heading a,
        .panel-heading a:hover,
        .panel-heading a:focus {
            text-decoration: none;
            color: #fff;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .panel-heading a:before {
            font-family: 'FontAwesome';
            content: "\f107";
            float: right;
            transition: all 0.5s;
        }


        #gg {
            padding-top: 5px !important;
            padding-right: 0px;
            padding-left: 25px !important;
            padding-bottom: 0px;
            padding-right: 25px !important;
        }


        .img-flex {
            display: flex;
            padding-left: 25px;
        }

        .img_product {
            height: 270px;
            width: 270px;
            overflow: hidden;
        }

        @media screen and (min-width:320px) and (max-width:374px) {
            .col-sm-3 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .col-lg-3 {
                padding-right: 5px !important;
                padding-left: 5px !important;
            }

            #gg {

                padding-top: 5px !important;
                padding-right: 0px;
                padding-left: 18px !important;
                padding-bottom: 0px;
                padding-right: 25px !important;

            }
        }

        @media screen and (min-width:375px) and (max-width:413px) {
            .col-sm-3 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .col-lg-3 {
                padding-right: 5px !important;
                padding-left: 5px !important;
            }

            #gg {
                padding-top: 5px !important;
                padding-right: 0px;
                padding-left: 37px !important;
                padding-bottom: 0px;
                padding-right: 35px !important;
            }
        }

        @media screen and (min-width:414px) and (max-width:424px) {
            .col-sm-3 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .col-lg-3 {
                padding-right: 5px !important;
                padding-left: 5px !important;
            }

            #gg {
                padding-top: 5px !important;
                padding-right: 0px;
                padding-left: 37px !important;
                padding-bottom: 0px;
                padding-right: 35px !important;
            }
        }

        @media screen and (min-width:425px) and (max-width:767px) {
            .col-sm-3 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .col-lg-3 {
                padding-right: 5px !important;
                padding-left: 5px !important;
            }

            #gg {
                padding-top: 5px !important;
                padding-right: 0px;
                padding-left: 45px !important;
                padding-bottom: 0px;
                padding-right: 50px !important;
            }
        }

        @media screen and (min-width:768px) and (max-width:1023px) {
            .nav-tabs .nav-link {
                background-color: #cccccc;
                color: #000 !important;
            }

            .nav-tabs .nav-link.active {
                color: #fff !important;
            }

            .pd50 {
                padding-left: 0px !important
            }

            .form-control-4 {
                width: 92%;
            }
        }

        @media screen and (min-width:1024px) and (max-width:1279px) {
            .nav-tabs .nav-link {
                background-color: #cccccc;
                color: #000 !important;
            }

            .nav-tabs .nav-link.active {
                color: #fff !important;
            }

            .pd50 {
                padding-left: 15px !important
            }

            #gg {
                padding-top: 5px !important;
                padding-right: 0px;
                padding-left: 6px !important;
                padding-bottom: 0px;
                padding-right: 10px !important;
            }

            .form-control-4 {
                width: 80%;
            }
        }

    </style>
</head>

<body>
    @include('frontend.navbar')
    <div class="banner-page head-about-us-5 ">
        <div class="centered headPage-text">
            <a id="orange18" style="padding-left: 15px">หน้าหลัก /</a><a id="orange17"> สินค้า</a>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row" id="">
            <div class="col-lg-3 col-md-12 pd50" style="padding-left: 50px">
                <div class="about-us">
                    <form action="{{url('searchbyname')}}" method="POST" id="selecBy_name" onsubmit="return selecBy_name()">
                        @csrf
                        <div class="input-group border">
                            <input type="text" aria-describedby="button-addon3" name="product_name" class="form-control-4 bg-none pt-3" placeholder="ค้นหาตามชื่อสินค้า">
                            <div class="input-group-append border-0">
                                <button id="button-addon3" type="submit" class="btn btn-link text-secondary" form="selecBy_name" id="inputIDcard"><i class="fa fa-search"></i></button>
                            </div>  
                        </div>
                    </form>
                </div>
                <!-- Nav tabs -->
                <div class="tab-content">
                    <ul class="nav nav-tabs mt-3" role="tablist">
                        <li class="nav-item">
                            <a id="gg" class="nav-link active container tab-pane" data-toggle="tab" href="#max"><img src="{{asset('smb-frontend/images/navbar-right/2.png')}}" class="img-flex">การค้นหาแม็กซ์</a>
                        </li>
                        <li class="nav-item">
                            <a id="gg" class="nav-link container tab-pane" data-toggle="tab" href="#wheel"><img src="{{asset('smb-frontend/images/navbar-right/3.png')}}" class="img-flex">การค้นหายาง</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="max" class="container tab-pane active" style="background-color: #ebebeb"><br>
                        <b>ค้นหาตามล้อแม็กซ์</b>
                            <form action="{{url('search_wheelBySize')}}" method="POST" id="searchbysize_wheels">
                                @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <input type="hidden" name="wheels_pricemin" class="pricemin">
                                <input type="hidden" name="wheels_pricemax" class="pricemax">
                                <label for="selectSize">
                                    <h6>ขนาด<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectSize" name="wheelsSize" class="form-control-5 filterSize">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($sizetire as $item)
                                        <option value="{{$item->size_diameter}}">{{$item->size_diameter}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="selectPcd">
                                    <h6>PCD<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectPcd" name="wheelsPcd" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                                </div>
                            </div>
                            </form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="buttom_register"><button type="submit" id="a" form="searchbysize_wheels">ค้นหา</div>
                                </div>
                            </div>
                            <hr>
                            <b>ค้นหาตามรุ่นรถยนต์</b>
                            <form action="{{url('search_wheelByCar')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="carbrand">
                                            <h6>ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                        </label>
                                        <select id="carbrand" name="wheelsCarbrand" class="form-control-5 filtercar">
                                            <option selected disabled>เลือก</option>
                                            @foreach ($carbrand as $datacar)
                                            <option value="{{$datacar->car_brand_id}}">{{$datacar->car_brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="carmodel">
                                            <h6>รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                        </label>
                                        <select id="carmodel" name="wheelsCarmodel" class="form-control-5 filtercar">
                                            <option selected disabled>เลือก</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="caryear">
                                            <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                        </label>
                                        <select id="caryear" name="wheelsCaryear" class="form-control-5">
                                            <option selected disabled>เลือก</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="buttom_register"><button type="submit" id="a">ค้นหา</div>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div id="wheel" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                        <b>ค้นหาตามยาง</b>
                        <form action="{{url('search_tireBySize')}}" method="POST" id="searchtiresize">
                            @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="hidden" name="tire_pricemin" class="pricemin">
                                <input type="hidden" name="tire_pricemax" class="pricemax">
                                <label for="TireWidth">
                                    <h6>ความกว้าง<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="TireWidth" name="TireWidth" class="form-control-5 filterSizeTire">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($sizetire as $item)
                                        <option value="{{$item->size_width}}">{{$item->size_width}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="TireOverall">
                                    <h6>แก้มยาง<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="TireOverall" name="TireOverall" class="form-control-5 filterSizeTire">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tireDiameter">
                                    <h6>กระทะล้อ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tireDiameter" name="tireDiameter" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="buttom_register"><button type="submit" form="searchtiresize" id="a">ค้นหา</div>
                            </div>
                        </div>
                        </form>
                        <b>ค้นหาตามรุ่นรถยนต์</b>
                        <form action="{{url('search_tireByCar')}}" method="POST">
                            @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="tire_carbrand">
                                    <h6>ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_carbrand" name="tire_carbrand" class="form-control-5 tire_filtercar">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($carbrand as $datacar)
                                    <option value="{{$datacar->car_brand_id}}">{{$datacar->car_brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tire_carmodel">
                                    <h6>รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_carmodel" name="tire_carmodel" class="form-control-5 tire_filtercar">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tire_caryear">
                                    <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_caryear" name="tire_caryear" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="buttom_register"><button type="submit" id="a">ค้นหา</button></div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content mt-3 mb-3">
                    <div id="home" class="tab-pane active" style="background-color: #ff8200">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo">
                                </div>
                            </div>
                            <div class="panel panel-default" style="background-color: #ff8200">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            ราคา
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pt-3 pr-2 pl-2" style="background-color: #fff">
                                        <div class="textreviews">
                                            <!-- Ranger Slider with value -->

                                            <!-- Slider -->
                                            <div id="pmd-slider-value-range" class="pmd-range-slider"></div>

                                            <!-- Values -->
                                            <div class="row">
                                                <div class="range-value col-sm-6">
                                                    <span id="value-min" style="font-size: 15px;font-weight: 500"></span>
                                                </div>
                                                <div class="range-value col-sm-6 text-right">
                                                    <span id="value-max" style="font-size: 15px;font-weight: 500"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="tab-content mt-3 mb-3">
                    <div id="home" class="tab-pane active" style="background-color: #ff8200">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h4 class="panel-title">
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div id="collapse3" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading3">
                                </div>
                            </div>
                            <div class="panel panel-default" style="background-color: #ff8200">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                            สินค้าทั้งหมด
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body pt-3 pr-2 pl-2" style="background-color: #fff">
                                        <div class="textreviews">
                                            @foreach ($producttype as $item)
                                            <a class="dropdown-item" href="{{url('producttype', $item->p_type_id)}}" style="color: #000;border-bottom: 1px solid #ebebeb">- {{$item->p_type_name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="tab-content mt-3 mb-3">
                    <div id="home" class="tab-pane active" style="background-color: #ff8200">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h4 class="panel-title">
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div id="collapse4" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading4">
                                </div>
                            </div>
                            <div class="panel panel-default" style="background-color: #ff8200">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                            แบรนด์สินค้า
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body pt-3 pr-2 pl-2" style="background-color: #fff">
                                        <div class="textreviews">
                                            @foreach ($brand as $item)
                                            <a class="dropdown-item" href="{{url('productbrand', $item->brand_id)}}" style="color: #000;border-bottom: 1px solid #ebebeb">- {{$item->brand_name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="col-xs-4">
                    <div class="about-us">
                        <h4 id="black-ll" class="color-orange" style="padding-left: 15px;margin-bottom: 20px">สินค้าทั้งหมด</h4>
                    </div>
                    <!--
                    <div class="col-sm-3">
                        <div style="height:50px;">
                            <select class="form-control selectA">
                                <option value="">All Bathroom</option>
                                <option value="">All Drain Pipe</option>
                                <option value="">All Kitchen</option>
                                <option value="">All Tiles &amp; Flagstone</option>
                                <option value="">All Marble &amp; Natural Stone</option>
                                <option value="">All Laminate Floor</option>
                                <option value="">All Vinyl &amp; Iinoleum</option>
                                <option value="">All Interior</option>
                                <option value="">All Carpet &amp; Upholstery</option>
                                <option value="">All Leather</option>
                                <option value="">All Wooden Furniture</option>
                                <option value="">All Unpleasant Smell</option>
                                <option value="">All Cars</option>
                                <option value="">All Tough Jobs</option>
                                <option value="">All Jewellery</option>
                                <option value="">All Textile</option>
                                <option value="">All ECO</option>
                                <option value="">All Garden</option>
                            </select>
                            <svg class="svg-inline--fa fa-angle-down fa-w-10 selectI" aria-hidden="true" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
                            </svg>
                        </div>
                    </div>
                -->
                </div>
                <div class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="row">
                        @foreach ($product as $item)
                        <div class="col-xl-3 col-md-6">
                            <div class="img_product text-center">
                                <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product" width="270" height="270">
                            </div>
                            <div class="text_product">
                                <div class="product-name">
                                    <div class="about-us">
                                        <a href="{{url('product_detail', $item->product_id)}}">
                                            <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;">{{$item->product_name}}</h6>
                                            <p>{{$item->product_series}}</p>
                                        </a>
                                    </div>
                                    <div class="product-price">
                                        <a id="orange19">฿ {{number_format($item->getColors->getSizes->min('size_price'),0)}}</a> - 
                                        <a id="orange19">฿ {{number_format($item->getColors->getSizes->max('size_price'),0)}}</a>
                                        {{-- @if (!empty($item->getColors->getSizes))
                                            @if ($item->getColors->getSizes[0]->size_promotion_status == 1)
                                            <del>฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</del>
                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_promotion_price,0)}}</a>
                                            @else
                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</a>
                                            @endif
                                        @endif --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="Page navigation example">
                                    {{$product->links('frontend.paginate')}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jQuery before Propeller.js -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('smb-frontend/js/propeller.min.js')}}"></script>
    <!-- Jquery js -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Slider js -->
    <script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
    <script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
    <script>
        // multiple handled with value 
        var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');

        noUiSlider.create(pmdSliderValueRange, {
            start: [0, 100000], // Handle start position
            connect: true, // Display a colored bar between the handles
            tooltips: [wNumb({
                decimals: 0
            }), wNumb({
                decimals: 0
            })],
            format: wNumb({
                decimals: 0,
                thousand: '',
                postfix: '',
            }),
            range: { // Slider can select '0' to '100'
                'min': 0,
                'max': 100000
            }
        });

        var valueMax = document.getElementById('value-max'),
            valueMin = document.getElementById('value-min');

        // When the slider value changes, update the input and span
        pmdSliderValueRange.noUiSlider.on('update', function(values, handle) {
            if (handle) {
                valueMax.innerHTML = values[handle];
            } else {
                valueMin.innerHTML = values[handle];
            }
            $('.pricemin').val(values[0]);
            $('.pricemax').val(values[1]);
        });

        var carbrandId1;
        var carmodelId1;
        var sizeDiameter;
        var sizePcd;
        var TireWidth;
        var TireOverall;

        $(document).on('change', '.filtercar', function() {
            carbrandId = $('#carbrand').val();
            carmodelId = $('#carmodel').val();
            // alert(carmodelId + carmodelId);
            filterdatacar(carbrandId, carmodelId);
        });

        $(document).on('change', '.tire_filtercar', function() {
            carbrandId = $('#tire_carbrand').val();
            carmodelId = $('#tire_carmodel').val();
            // alert(carmodelId + carmodelId);
            tire_filterdatacar(carbrandId, carmodelId);
        });

        $(document).on('change', '.filterSize', function () { 
            sizeDiameter = $('#selectSize').val();
            sizePcd = $('#selectPcd').val();
            filterdatesize(sizeDiameter, sizePcd);
        });

        // ยาง
        $(document).on('change', '.filterSizeTire', function () { 
            TireWidth = $('#TireWidth').val();
            TireOverall = $('#TireOverall').val();
            console.log(TireWidth, TireOverall);
            filterdatetire(TireWidth, TireOverall);
        });

        function filterdatetire(TireWidth, TireOverall) {
            $.ajax({
                url: '{{url('filtertire')}}',
                type: 'GET',
                data: {
                    TireWidth: TireWidth,
                    TireOverall: TireOverall,
                },
            }).done(function (data) {
                $('#TireOverall').html(data.html_Overall)
                $('#tireDiameter').html(data.html_Diameter)
            });
        }

        function tire_filterdatacar(carbrandId, carmodelId) {
            $.ajax({
                url: '{{url('filterdatacar')}}',
                type: 'GET',
                data: {
                    carbrandId: carbrandId,
                    carmodelId: carmodelId,
                },
            }).done(function (data) {
                $('#tire_carmodel').html(data.html_carmodel)
                $('#tire_caryear').html(data.html_caryear);
            });
        }

        function filterdatacar(carbrandId, carmodelId) {
            $.ajax({
                url: '{{url('filterdatacar')}}',
                type: 'GET',
                data: {
                    carbrandId: carbrandId,
                    carmodelId: carmodelId,
                },
            }).done(function (data) {
                $('#carmodel').html(data.html_carmodel)
                $('#caryear').html(data.html_caryear);
            });
        }

        function filterdatesize(sizeDiameter, sizePcd) { 
            $.ajax({
                url: '{{url('filterdatesize')}}',
                type: 'GET',
                data: {
                    sizeDiameter: sizeDiameter,
                    sizePcd: sizePcd,
                },
            }).done(function (data) {
                $('#selectPcd').html(data.html_pcd)
            });
        }
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

        function selecBy_name () {
            var productname = document.forms["selecBy_name"]["product_name"].value;
            if (productname == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'ขออภัย',
                    text: 'กรุณากรอกข้อมูลที่ท่านต้องการค้นหา'
                })
                return false;
            } else {
                return true;
            }
        }
    </script>
    <!--End Sidebar Script-->
    @include('frontend.footer')
</body>

</html>