<!doctype html>
<html lang="en">

<head>
    <title>ทรัพย์สมบูรณ์ยางยนต์ - SMB Wheel</title>
    @include('frontend.header')
    <style>
        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            color: #fff !important;
            padding-top: 5px;
            margin-bottom: 3px;
            padding-right: 10px;
            background-color: #000;
            border-color: none;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #fff;
            background-color: #ff8200 !important;
            border-color: #ff8200;
        }

        #orange17 {
            color: #ff8200 !important;
            font-size: 20px !important;
            font-weight: 500;
        }

        .owl-carousel .owl-nav button.owl-prev {

            position: absolute;
            left: -50px;
            top: 33%;
            border-radius: 0;
            width: 34px;
            background-color: none;
            height: 34px;
            outline: none;
            background-image: url(images/products-detail/owl-prev.png);
        }

        .owl-carousel .owl-nav button.owl-next {
            background-image: url(images/products-detail/owl-next.png);
            position: absolute;
            right: -50px;
            outline: none;
            background-color: none;
            top: 33%;
            border-radius: 0;
            width: 34px;
            height: 34px;
        }

        .text_product h6 {
            font-size: 13px !important;
            font-weight: 500 !important;
            letter-spacing: 0.3px !important;
            padding-bottom: 0px !important;
            padding-top: 0px !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 1 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }

        .product-price {
            font-size: 16px;
            font-weight: 500;
            color: #000;
            margin-bottom: 16px;
            margin-top: 50px;
        }

        .product-price {
            font-size: 16px;
            font-weight: 500;
            color: #000;
            margin-bottom: 16px;
            margin-top: 50px;
        }

        #orange19 {
            color: #ff8200;
            font-size: 20px;
            font-weight: 500;
        }

        .btn {
            padding: 5px 3px;
            font-size: 12px;
            font-weight: 500;
        }

        .carousel-indicators li {
            width: 10px;
            height: 10px;
            border-radius: 100%;
        }

        .carousel-indicators li {
            background-color: #fff;
            opacity: 1;
        }

        .carousel-indicators .active {
            opacity: 1;
            background-color: #ff8200;
        }

        .border-square {
            border: 1px solid #ebebeb;
            border-left: 1px solid #fff;
            box-shadow: 1px 4px 2px #e6e6e6;
            padding-left: 0px;
        }

        .border-rounded {
            border-top-left-radius: .25rem !important;
            border-top-right-radius: .25rem !important;
            margin-left: 10px !important;
            font-size: 17px;
            font-weight: 600;
        }

        .border-carousel {
            border: 1px solid #ebebeb;
            border-right: 1px solid #fff;
            padding-left: 0px;
            padding-right: 0px;
            box-shadow: 0px 4px 2px #e6e6e6;
        }

        .product-name {
            margin-bottom: 0px;
        }

        .border-top-gray {
            border-top: 1px solid #ebebeb;
        }

        .text-bottom-container {
            color: #898989 !important;
            font-weight: 400;
        }

        .filter {
            -webkit-filter: brightness(0) invert(1);
            filter: brightness(0) invert(1);
        }

        .owl-carousel .owl-item img {
            display: inline;
        }

        .product-name {
            margin-bottom: -33px;
        }

        .owl-product1 {
            width: 100% !important;
            display: block;
        }

        .img_product {
            border: 1px solid #ebebeb;
            height: 270px;
            overflow: hidden;
        }

        .card-body {
            padding-bottom: 0px !important;
        }

    </style>
</head>

<body>
    @include('frontend.navbar')
    <div class="head-about-us-home">
    </div>
    <div id="hide2" class="menu-section ml-5 mr-5 hidemenu">
        <div class="tab-content">
            <ul class="nav nav-tabs menu-section-margin" role="tablist" style="border-bottom: none!important">
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane active" data-toggle="tab" href="#tab1"><img src="{{asset('smb-frontend/images/sbn.png')}}" class="filter"> ค้นหาตามชื่อสินค้า</a>
                </li>
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane" data-toggle="tab" href="#tab2"><img src="{{asset('smb-frontend/images/wheel.png')}}" class="filter"> การค้นหาแม็กซ์</a>
                </li>
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane" data-toggle="tab" href="#tab3"><img src="{{asset('smb-frontend/images/wheel2.png')}}" class="filter"> การค้นหายาง</a>
                </li>
            </ul>
        </div>
        <div class="tab-content homepage-menu-bg">
            <div id="tab1" class="tab-pane active">
                <div class="row">
                    <div class="col-lg-12">
                        <b id="orange17">ค้นหาตามชื่อสินค้า</b>
                        <div class="form-row">
                            <div class="form-group col-lg-10">
                                <label for="selectDay">
                                    <h6 id="text-white">ชื่อสินค้า<a style="color: #ff8200">*</a></h6>
                                </label>
                                <form action="{{url('searchbyname')}}" method="POST" id="selecBy_name" onsubmit="return selecBy_name()">
                                    @csrf
                                    <input type="text" name="product_name" class="form-control" id="inputIDcard" placeholder="ค้นหา">
                                </form>
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><button type="submit" id="a" form="selecBy_name">ค้นหา</button></div>
                            </div>
                            <div class="form-group col-md-12">
                                <a href="{{url('product')}}" id="b">การค้นหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-4">
                        <b id="orange17">การค้นหาแม็กซ์</b>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <form action="{{url('search_wheelBySize')}}" method="POST" id="searchbysize_wheels" onsubmit="return searchbysize_wheels()">
                                    @csrf
                                <label for="selectSize">
                                    <h6 id="text-white">ขนาด<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectSize" name="wheelsSize" class="form-control-5 filterSize">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($size_diameter as $item)
                                    <option value="{{$item->size_diameter}}">{{$item->size_diameter}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="selectPcd">
                                    <h6 id="text-white">PCD<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectPcd" name="wheelsPcd" class="form-control-5">
                                    <option selected="">เลือก</option>
                                </select>
                            </form>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="selectMonth">
                                    <h6>&nbsp;</h6>
                                </label>
                                <div class="buttom_register"><button type="submit" id="a" form="searchbysize_wheels">ค้นหา</button></div>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <a href="{{url('product')}}" id="b">การค้าหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 left-border-color">
                        <b id="orange17">ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <form action="{{url('search_wheelByCar')}}" method="POST" id="searchbycar_wheels" onsubmit="return searchbycar_wheels()">
                                    @csrf
                                <label for="carbrand">
                                    <h6 id="text-white">ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="carbrand" name="wheelsCarbrand" class="form-control-5 filtercar">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($carbrand as $item)
                                        <option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="carmodel">
                                    <h6 id="text-white">รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="carmodel" name="wheelsCarmodel" class="form-control-5 filtercar">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="caryear">
                                    <h6 id="text-white">ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="caryear" name="wheelsCaryear" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </form>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><button type="submit" id="a" form="searchbycar_wheels">ค้นหา</button></div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="{{url('product')}}" id="b">การค้าหาแบบละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-4">
                        <b id="orange17">การค้นหายาง</b>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <form action="{{url('search_tireBySize')}}" method="POST" id="searchtiresize" onsubmit="return searchtiresize()">
                                    @csrf
                                <label for="TireWidth">
                                    <h6 id="text-white">ความกว้าง<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="TireWidth" name="TireWidth" class="form-control-5 filterSizeTire">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($sizetire as $item)
                                    <option value="{{$item->size_width}}">{{$item->size_width}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="TireOverall">
                                    <h6 id="text-white">แก้มยาง<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="TireOverall" name="TireOverall" class="form-control-5 filterSizeTire">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="tireDiameter">
                                    <h6 id="text-white">กระทะล้อ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tireDiameter" name="tireDiameter" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                        </form>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6>&nbsp;</h6>
                                </label>
                                <div class="buttom_register"><button type="submit" id="a" form="searchtiresize">ค้นหา</button></div>
                            </div>
                            <div class="form-group col-md-12">
                                <a href="{{url('product')}}" id="b">การค้าหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 left-border-color">
                        <b id="orange17">ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <form action="{{url('search_tireByCar')}}" method="post" id="searchtirebycar" onsubmit="return searchtirebycar()">
                                @csrf
                                <label for="tire_carbrand">
                                    <h6 id="text-white">ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_carbrand" name="tire_carbrand" class="form-control-5 tire_filtercar">
                                    <option selected disabled>เลือก</option>
                                    @foreach ($carbrand as $datacar)
                                    <option value="{{$datacar->car_brand_id}}">{{$datacar->car_brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="tire_carmodel">
                                    <h6 id="text-white">รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_carmodel" name="tire_carmodel" class="form-control-5 tire_filtercar">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="tire_caryear">
                                    <h6 id="text-white">ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="tire_caryear" name="tire_caryear" class="form-control-5">
                                    <option selected disabled>เลือก</option>
                                </select>
                            </div>
                            </form>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><button id="a" form="searchtirebycar">ค้นหา</button></div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="{{url('product')}}" id="b">การค้าหาแบบละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div><img class="w-100" src="{{asset('smb-frontend/images/product_new.jpg')}}"></div>
                </div>
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="container">
                            <div id="one" class="carousel" data-ride="carousel">
                                <div class="owl-one loop owl-carousel owl-theme my-3" data-aos="fade-up">
                                    @foreach ($newproduct as $item)
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <div class="img_product">
                                                <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product" style="height: 270px !important;">
                                            </div>
                                            <div class="text_product">
                                                <div class="product-name">
                                                    <div class="about-us">
                                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">{{$item->product_name}}</h6>
                                                    </div>
                                                    Size: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_size)
                                                    {{$value_size->size_diameter}},
                                                    @endforeach<br>
                                                    PCD: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_pcd)
                                                    {{$value_pcd->size_pcd}},
                                                    @endforeach<br>
                                                    ET: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_et)
                                                    {{$value_et->size_et}},
                                                    @endforeach
                                                    <div class="product-price" style="height:20px;">
                                                        @if (!empty($item->getColors->getSizes))
                                                            @if ($item->getColors->getSizes[0]->size_promotion_status == 1)
                                                            <del>฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</del>
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_promotion_price,0)}}</a>
                                                            @else
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</a>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="product-price2 text-center">
                                                        <a href="{{url('product_detail', $item->product_id)}}"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="{{asset('smb-frontend/images/cart_small.png')}}" style="width: 10%"> ADD PRODUCTS</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row justify-content-end border-top-gray">
                                <a href="{{url('product')}}" class="text-bottom-container">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div><img class="w-100" src="{{asset('smb-frontend/images/product_bestsaler.jpg')}}"></div>
                </div>
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="container">
                            <div id="two" class="carousel" data-ride="carousel">
                                <div class="owl-two loop owl-carousel owl-theme my-3" data-aos="fade-up">
                                    @foreach ($bestseller as $item)
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <div class="img_product">
                                                <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product">
                                            </div>
                                            <div class="text_product">
                                                <div class="product-name">
                                                    <div class="about-us">
                                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">{{$item->product_name}}</h6>
                                                    </div>
                                                    Size: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_size)
                                                    {{$value_size->size_diameter}},
                                                    @endforeach<br>
                                                    PCD: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_pcd)
                                                    {{$value_pcd->size_pcd}},
                                                    @endforeach<br>
                                                    ET: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_et)
                                                    {{$value_et->size_et}},
                                                    @endforeach
                                                    <div class="product-price" style="height:20px;">
                                                        @if (!empty($item->getColors->getSizes))
                                                            @if ($item->getColors->getSizes[0]->size_promotion_status == 1)
                                                            <del>฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</del>
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_promotion_price,0)}}</a>
                                                            @else
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</a>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="product-price2 text-center">
                                                        <a href="{{url('product_detail', $item->product_id)}}"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="{{asset('smb-frontend/images/cart_small.png')}}" style="width: 10%"> ADD PRODUCTS</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row justify-content-end border-top-gray">
                                <a href="{{url('product')}}" class="text-bottom-container">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div><img class="w-100" src="{{asset('smb-frontend/images/product_sale.jpg')}}"></div>
                </div>
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="container">
                            <div id="third" class="carousel" data-ride="carousel">
                                <div class="owl-third loop owl-carousel owl-theme my-3" data-aos="fade-up">
                                    @foreach ($productdiscount as $item)
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <div class="img_product">
                                                <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product">
                                            </div>
                                            <div class="text_product">
                                                <div class="product-name">
                                                    <div class="about-us">
                                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">{{$item->product_name}}</h6>
                                                    </div>
                                                    Size: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_size)
                                                    {{$value_size->size_diameter}},
                                                    @endforeach<br>
                                                    PCD: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_pcd)
                                                    {{$value_pcd->size_pcd}},
                                                    @endforeach<br>
                                                    ET: 
                                                    @foreach ($item->getProductSizes_groupBy as $value_et)
                                                    {{$value_et->size_et}},
                                                    @endforeach
                                                    <div class="product-price" style="height:20px;">
                                                        @if (!empty($item->getColors->getSizes))
                                                            @if ($item->getColors->getSizes[0]->size_promotion_status == 1)
                                                            <del>฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</del>
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_promotion_price,0)}}</a>
                                                            @else
                                                            <a id="orange19">฿ {{number_format($item->getColors->getSizes[0]->size_price,0)}}</a>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="product-price2 text-center">
                                                        <a href="{{url('product_detail', $item->product_id)}}"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="{{asset('smb-frontend/images/cart_small.png')}}" style="width: 10%"> ADD PRODUCTS</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row justify-content-end border-top-gray">
                                <a href="{{url('product')}}" class="text-bottom-container">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promotion-section">
        <div class="text-center mb-5">
            <h3 id="textsass">โปรโมชั่น</h3>
        </div>
        <div class="row row-margin">
            @foreach ($promotion as $item)
            <div class="col-lg-6 text-center pb-10">
                <a href="{{url('promotion_detail', $item->promotion_id)}}"><img src="{{asset('local/storage/app/promotion/'.$item->promotion_img.'')}}" class="img-fluid" style="height: 500px !important;"></a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="news-section">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="row px-3">
                    <div class="col-9" style="padding-left: 0px">
                        <div class="about-us">
                            <h4 id="black-news" style="padding-bottom: 15px;color: #ff8200">ข่าวสารและกิจกรรม</h4>
                        </div>
                    </div>
                    <div class="col-3" style="padding-right: 0px; margin-bottom: 40px;">
                        <div class="about-us pull-right">
                            <a href="{{url('news')}}" style="color: #898989">ดูข่าวทั้งหมด</a>
                        </div>
                    </div>
                    <div class="card-deck">
                        @foreach ($news as $item)
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="{{asset('local/storage/app/news/'.$item->news_imgcover.'')}}" alt="Card image cap" style="height: 270px !important;">
                            <div class="card-body" id="cardT">
                                <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"> {{date('d/m/Y', strtotime($item->news_date))}}</small></p>
                                <h4 class="card-title">{{$item->news_title}}</h4>
                                <p class="card-text">{{ Str::limit($item->news_content, 150) }}</p>
                                <a class="btn btn-black rounded-0" style="padding: 5px 0.75rem;" id="text-white" href="{{url('news_detail', $item->news_id)}}">Readmore</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @if ($blog != null)
            <div class="col-12 col-md-3">
                <div class="row">
                    <div class="col-6">
                        <div class="about-us">
                            <h4 id="black-news" style="padding-bottom: 15px;color: #ff8200">บล็อค</h4>
                        </div>
                    </div>
                    <div class="col-6" style="margin-bottom: 40px;">
                        <div class="about-us pull-right">
                            <a href="{{url('blog')}}" style="color: #898989">ดูบล็อคทั้งหมด</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{asset('local/storage/app/blog/'.$blog->blog_banner.'')}}" alt="Card image cap" style="height: 270px !important;">
                                <div class="card-body" id="cardT">
                                    <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"> {{date('d/m/Y', strtotime($blog->blog_date))}}</small></p>
                                    <h4 class="card-title">{{$blog->blog_title}}</h4>
                                    <p class="card-text">{{ Str::limit($blog->news_content, 150) }}</p>
                                    <a class="btn btn-black rounded-0" style="padding: 5px 0.75rem;" id="text-white" href="{{url('blog_detail', $blog->blog_id)}}">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    {{-- <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7053543144225!2d100.40312061477907!3d13.736280290357476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297a89a8dfd89%3A0xf7d7d408f74a6277!2zU01CIOC4l-C4o-C4seC4nuC4ouC5jOC4quC4oeC4muC4ueC4o-C4k-C5jOC4ouC4suC4h-C4ouC4meC4leC5jCDguKrguLLguILguLLguIHguLLguI3guIjguJnguLLguKDguLTguYDguKnguIE!5e0!3m2!1sth!2sth!4v1582190613167!5m2!1sth!2sth" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            <div class="tab-pane fade" id="pills-graphic" role="tabpanel" aria-labelledby="pills-graphic-tab"><a><img src="{{asset('smb-frontend/images/แผนที่ร้าน-CDC-2.jpg')}}" class="img-fluid mw-100 w-100"></a></div>
        </div>
    </div> --}}

    <!--Fancybox-->
    @if ($ads != null)
    <a data-fancybox="popupdesktop" href="{{asset('local/storage/app/promotion/'.$ads->ads_image.'')}}" class="popupdesktop"></a>
    <a data-fancybox="popupxs" href="{{asset('local/storage/app/promotion/'.$ads->ads_image.'')}}" class="popupxs"></a>
    @endif
    <!--End-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('smb-frontend/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 2,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 4,
                        dots: true,
                        nav: false
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 2,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 4,
                        dots: true,
                        nav: false
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.owl-third').owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 2,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 4,
                        dots: true,
                        nav: false
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });

        //Fancybox 
        $('[data-fancybox="popupdesktop"]').fancybox({
            //toolbar : false
        });
        $('[data-fancybox="popupxs"]').fancybox({
            //toolbar : false
        });

        if (Modernizr.mq('(max-width: 767px)')) {
            $(".popupxs").trigger("click");
        } else {
            $(".popupdesktop").trigger("click");
        }

        $(document).on('change', '.filtercar', function() {
            var carbrandId = $('#carbrand').val();
            var carmodelId = $('#carmodel').val();
            filterdatacar(carbrandId, carmodelId);
        });

        // ล้อ
        $(document).on('change', '.filterSize', function () { 
            var WheelSize = $('#selectSize').val();
            filterWheelSize(WheelSize);
        });

        // ยาง
        $(document).on('change', '.filterSizeTire', function () { 
            var TireWidth = $('#TireWidth').val();
            var TireOverall = $('#TireOverall').val();
            filterdatetire(TireWidth, TireOverall);
        });

        $(document).on('change', '.tire_filtercar', function() {
            var tire_carbrandId = $('#tire_carbrand').val();
            var tire_carmodelId = $('#tire_carmodel').val();
            tire_filterdatacar(tire_carbrandId, tire_carmodelId);
        });

        function filterWheelSize(WheelSize) {
            $.ajax({
                url: '{{url('filterdatawheels')}}',
                type: 'GET',
                data: {
                    WheelSize: WheelSize,
                },
            }).done(function (data) {
                $('#selectPcd').html(data.html_pcd)
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

        function tire_filterdatacar(tire_carbrandId, tire_carmodelId) {
            $.ajax({
                url: '{{url('filterdatacar')}}',
                type: 'GET',
                data: {
                    carbrandId: tire_carbrandId,
                    carmodelId: tire_carmodelId,
                },
            }).done(function (data) {
                $('#tire_carmodel').html(data.html_carmodel)
                $('#tire_caryear').html(data.html_caryear);
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

        function searchbysize_wheels () {
            var wheelsSize = document.forms["searchbysize_wheels"]["wheelsSize"].value;
            var wheelsPcd = document.forms["searchbysize_wheels"]["wheelsPcd"].value;
            if (wheelsSize == "เลือก" || wheelsPcd == "เลือก") {
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

        function searchbycar_wheels () {
            var wheelsCarbrand = document.forms["searchbycar_wheels"]["wheelsCarbrand"].value;
            var wheelsCarmodel = document.forms["searchbycar_wheels"]["wheelsCarmodel"].value;
            var wheelsCaryear = document.forms["searchbycar_wheels"]["wheelsCaryear"].value;
            if (wheelsCarbrand == "เลือก" || wheelsCarmodel == "เลือก" || wheelsCaryear == "เลือก") {
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

        function searchtiresize () {
            var TireWidth = document.forms["searchtiresize"]["TireWidth"].value;
            var TireOverall = document.forms["searchtiresize"]["TireOverall"].value;
            var tireDiameter = document.forms["searchtiresize"]["tireDiameter"].value;
            if (TireWidth == "เลือก" || TireOverall == "เลือก" || tireDiameter == "เลือก") {
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

        function searchtirebycar () {
            var tire_carbrand = document.forms["searchtirebycar"]["tire_carbrand"].value;
            var tire_carmodel = document.forms["searchtirebycar"]["tire_carmodel"].value;
            var tire_caryear = document.forms["searchtirebycar"]["tire_caryear"].value;
            if (tire_carbrand == "เลือก" || tire_carmodel == "เลือก" || tire_caryear == "เลือก") {
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
    @include('frontend.footer')
</body>

</html>
