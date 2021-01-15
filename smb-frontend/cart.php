<!doctype html>
<html lang="en">

<head>
    <title>ตะกร้าสินค้า - SMB Wheel</title>
    <?php require('header.php'); ?>
    <style>
        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            color: #fff !important;
            padding-top: 20px;
            margin-bottom: 3px;
            padding-right: 45px;
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
            background-image: url(images/index-slide/prev.png);
            position: absolute;
            left: -85px;
            outline: none;
            background-color: none;
            top: 40%;
            border-radius: 0;
            width: 38px;
            height: 70px;
        }

        .owl-carousel .owl-nav button.owl-next {
            background-image: url(images/index-slide/next.png);
            position: absolute;
            right: -85px;
            outline: none;
            background-color: none;
            top: 40%;
            border-radius: 0;
            width: 38px;
            height: 70px;
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
        }

        .card-body {
            padding-bottom: 0px !important;
        }
    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div class="container mt-5 my-5">
        <!--Container Content-->
        <div class="container">
            <div class="row">
                <div class="stepwizard col-md-8" style="border-bottom: 1px solid #d6d6d6;margin-bottom: 10px;padding-bottom: 10px">
                    <h3>ตะกร้าสินค้า</h3>
                </div>
            </div>

            <div class="row cart_cartshop">
                <div id="hide3" class="col-5">
                    <a>สินค้า</a>
                </div>
                <div id="hide3" class="col-2" style="margin-left: 60px;">
                    <a>จำนวน</a>
                </div>
                <div id="hide3" class="col-1" style="margin-left: -63px;">
                    <a>ราคา</a>
                </div>
            </div>
            <div class="row pad_cartshop">
                <div class="col-12">
                    <div class="row">
                        <div class="col-col-12 col-md-12 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="card col-12 col-md-12 col-lg-12 col-xl-12 bg_boxcart border shadow-sm  mb-5 bg-white rounded" style="padding: 0px">
                                    <div class="card">
                                        <div class="card-header container-fluid" id="newsHeading">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" class="close" aria-label="Close" id="btnclose">
                                                        <span aria-hidden="true">X</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container mb-3">
                                            <div class="row cart_cartshop">
                                                <div class="col-lg-3 col-sm-12">
                                                    <img src="images/confirm/1.jpg" width="100%">
                                                </div>
                                                <div class="col-lg-5 col-sm-12">
                                                    <div class="card-body" id="cardT">
                                                        <h4 class="card-title">Cosmis Iconic Racing Series | R6G </h4>
                                                        <p class="card-text">117 MISANO Matte Black Wheels by NICHE®. 18" x 8",
                                                            +40 Offset, 5x120.65 Bolt Pattern, 72.56mm Hub. These
                                                            high-end racing wheels are what you need to give
                                                            your vehicle an aggressive look and sporty feel. With
                                                            spokes extending from the center to the outer.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-12">
                                                    <div class="product-quantity">
                                                        <div class="product-quantity-subtract">
                                                            <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                            </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                        </div>
                                                        <div>
                                                            <input type="text" id="product-quantity-input-checkout" placeholder="0" value="0">
                                                        </div>
                                                        <div class="product-quantity-add">
                                                            <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                            </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-12">
                                                    <div class="card-body" id="cardT">
                                                        <h4 class="card-title text-center">9,000</h4>
                                                        <p class="card-text text-center">4,500 / วง</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-12 col-md-12 col-lg-12 col-xl-12 bg_boxcart border shadow-sm  mb-5 bg-white rounded" style="padding: 0px">
                                    <div class="card-header container-fluid" id="newsHeading2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="close" aria-label="Close" id="btnclose">
                                                    <span aria-hidden="true">X</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mb-3">
                                        <div class="row cart_cartshop">
                                            <div class="col-lg-3 col-sm-12">
                                                <img src="images/confirm/2.jpg" width="100%">
                                            </div>
                                            <div class="col-lg-5 col-sm-12">
                                                <div class="card-body" id="cardT">
                                                    <h4 class="card-title">Force - GTR Sports Series | GTR-7</h4>
                                                    <p class="card-text">117 MISANO Matte Black Wheels by NICHE®. 18" x 8",
                                                        +40 Offset, 5x120.65 Bolt Pattern, 72.56mm Hub. These
                                                        high-end racing wheels are what you need to give
                                                        your vehicle an aggressive look and sporty feel. With
                                                        spokes extending from the center to the outer.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <div class="product-quantity">
                                                    <div class="product-quantity-subtract">
                                                        <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                    </div>
                                                    <div>
                                                        <input type="text" id="product-quantity-input-checkout" placeholder="0" value="0">
                                                    </div>
                                                    <div class="product-quantity-add">
                                                        <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <div class="card-body" id="cardT">
                                                    <h4 class="card-title text-center">9,000</h4>
                                                    <p class="card-text text-center">4,500 / วง</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="connex">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12" style="padding-left: 0px;padding-right:0px">
                                        <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                            <div class="buttom_register"><a id="b" href="products.php">เลือกสินค้าเพิ่มเติม</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-4 col-xl-4 order_summary">
                            <div class="order_summary-2 shadow-sm p-3 mb-5 bg-white rounded" style="padding-top: 10px!important">
                                <div class="order_summary">
                                    <div class="cart_cart">
                                        <h4 id="textaHH">สรุปคำสั่งซื้อ</h4>
                                        <p id="orange" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px">4 รายการในรถเข็นของคุณ</p>
                                    </div>
                                    <div class="text_order">
                                        <p style="font-weight: 400;margin-bottom: -10px;">ข้อมูลการสั่งซื้อ</p>
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-8">
                                                <h6 style="text-align: left;">ยอดรวม (จำนาวน 4 วง)</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <h6>18,000</h6>
                                            </div>
                                        </div>
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-6">
                                                <h6 style="text-align: left;">ราคาสินค้า</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6>4,500 / วง</h6>
                                            </div>
                                        </div>
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-6">
                                                <h6 style="text-align: left;">ยอดรวมทั้งสิ้น</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6>
                                                    <p id="orange">18,000</p>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-12">
                                                <h6>เลือกการจัดส่ง</h6>
                                                <select id="selectDay" class="form-control-5">
                                                    <option selected="">เลือก</option>
                                                    <option>จัดส่งฟรี</option>
                                                    <option>EMS</option>
                                                    <option>Kerry</option>
                                                    <option>Ninjavan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 mt-5" style="padding-bottom: 11px;">
                                            <div class="buttom_register"><a id="b" href="my-account-customer.php">ดำเนินการชำระเงิน</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="stepwizard col-md-12 text-center">
                    <h3>You might also need</h3>
                </div>
            </div>
            <div class="product-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="card-body">

                                    <div id="one" class="carousel" data-ride="carousel">
                                        <div class="owl-one loop owl-carousel owl-theme my-3" data-aos="fade-up" style="margin-left: 15px;">
                                            <div class="item">
                                                <div class="card newsIndex">

                                                    <div class="img_product">
                                                        <img src="images/index-slide/a.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/b.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/c.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/d.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/a.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/b.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/c.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card newsIndex">
                                                    <div class="img_product">
                                                        <img src="images/index-slide/d.jpg" alt="Avatar" class="image_product">
                                                    </div>
                                                    <div class="text_product">
                                                        <div class="product-name">
                                                            <div class="about-us">
                                                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">FATTAH SPORT REVUP
                                                                    LIMITED</h6>
                                                            </div>
                                                            Size: 18x8.5, 18x9.5<br>PCD: 5H114.3, 6H139.7<br>ET: 20, 30
                                                            <div class="product-price"><del>฿2500‎‎‏‏‎ ‎</del><a id="orange19"> ฿1500</a></div>
                                                            <div class="product-price2 text-center">
                                                                <a href="products-detail.php"><button type="button" class="btn btn-black-unavialable rounded-0 owl-product1" style="color: #fff;"><img src="images/cart_small.png" style="width: 10%"> ADD PRODUCTS</button></a>
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
        </div>
    </div>
    </div>
    </div>
    <?php require('footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        //Reduce quantity by 1 if clicked
        $(document).on("click", ".product-quantity-subtract", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            var newValue = parseInt(value) - 1;
            if (newValue < 0) newValue = 0;
            $("#product-quantity-input").val(newValue);
            CalcPrice(newValue);
        });

        //Increase quantity by 1 if clicked
        $(document).on("click", ".product-quantity-add", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            var newValue = parseInt(value) + 1;
            $("#product-quantity-input").val(newValue);
            CalcPrice(newValue);
        });

        $(document).on("blur", "#product-quantity-input", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            CalcPrice(value);
        });


        function AddToCart(e) {
            e.preventDefault();
            var qty = $("#product-quantity-input").val();
            if (qty === '0') {
                return;
            }
            var toast = '<div class="toast toast-success">Added ' + qty + ' to cart.</div>';
            $("body").append(toast);
            setTimeout(function() {
                $(".toast").addClass("toast-transition");
            }, 100);
            setTimeout(function() {
                $(".toast").remove();
            }, 3500);
        }
    </script>

    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
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
                        items: 2,
                        dots: true,
                        nav: false
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
</body>

</html>