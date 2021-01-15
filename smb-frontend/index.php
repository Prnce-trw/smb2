<!doctype html>
<html lang="en">

<head>
    <title>ทรัพย์สมบูรณ์ยางยนต์ - SMB Wheel</title>
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
            display: none;
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

        /*Fancybox*/
        .fancybox-bg {
            background-color: #fff;
        }

        .fancybox-content {
            border: 0 !important;
        }

        .fancybox-is-open .fancybox-bg {
            opacity: 0.8;
        }

        .fancybox-caption h1 {
            color: #b2965b;
            text-transform: uppercase;
            font-size: 2.5rem;
            letter-spacing: 1px;
            margin-top: 15px;
        }

        .fancybox-caption h2 {
            color: #333;
            text-transform: uppercase;
            font-size: 1.1rem;
            letter-spacing: 1.5px;
            margin: 10px 0 0;
        }

        .fancybox-caption__body {
            max-height: 100%;
            overflow: hidden;
        }

        .fancybox-content {
            background: none;
        }

        .fancybox-slide--html .fancybox-close-small {
            width: 65px;
            height: auto;
            color: #b2965b;
        }

        .fancybox-button,
        .fancybox-button:link,
        .fancybox-button:visited {
            color: #fff;
        }

        .fancybox-button {
            background: rgb(255, 141, 0);
        }

        /*responsive*/
        @media (max-width: 575px) {

            .fancybox-image,
            .fancybox-spaceball {
                width: 80%;
                height: auto;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <div class="head-about-us-home">
    </div>
    <div id="hide2" class="menu-section ml-5 mr-5 hidemenu">
        <div class="tab-content">
            <ul class="nav nav-tabs menu-section-margin" role="tablist" style="border-bottom: none!important">
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane active" data-toggle="tab" href="#tab1"><img src="images/sbn.png" class="filter"> ค้นหาตามชื่อสินค้า</a>
                </li>
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane" data-toggle="tab" href="#tab2"><img src="images/wheel.png" class="filter"> การค้นหาแม็กซ์</a>
                </li>
                <li class="nav-item" style="padding-right: 8px;">
                    <a class="nav-link container-fluid border-rounded text-center mr-5 ml-5 tab-pane" data-toggle="tab" href="#tab3"><img src="images/wheel2.png" class="filter"> การค้นหายาง</a>
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
                                <input type="" class="form-control" id="inputIDcard" placeholder="ค้นหา">
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><a id="a" href="#">ค้นหา</a></div>
                            </div>
                            <div class="form-group col-md-12">
                                <a href="#" id="b">การค้นหาแบบละเอียด</a>
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
                            <div class="form-group col-lg-6">
                                <label for="selectDay">
                                    <h6 id="text-white">ขนาด<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="selectMonth">
                                    <h6 id="text-white">PCD<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectMonth" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <a href="#" id="b">การค้าหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 left-border-color">
                        <b id="orange17">ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <label for="selectDay">
                                    <h6 id="text-white">ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectDay">
                                    <h6 id="text-white">รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6 id="text-white">ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectMonth" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><a id="a" href="#">ค้นหา</a></div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="#" id="b">การค้าหาแบบละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-4">
                        <b id="orange17">การค้นหายาง</b>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="selectDay">
                                    <h6 id="text-white">ขนาด<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="selectMonth">
                                    <h6 id="text-white">PCD<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectMonth" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <a href="#" id="b">การค้าหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 left-border-color">
                        <b id="orange17">ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <label for="selectDay">
                                    <h6 id="text-white">ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectDay">
                                    <h6 id="text-white">รุ่นรถ<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectDay" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6 id="text-white">ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
                                </label>
                                <select id="selectMonth" class="form-control-5">
                                    <option selected="">เลือก</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="selectMonth">
                                    <h6>‏‏‎ ‎‏‏‎ ‎</h6>
                                </label>
                                <div class="buttom_register"><a id="a" href="#">ค้นหา</a></div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="#" id="b">การค้าหาแบบละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-lg-4 border-carousel">
                    <div id="carousel-smb-1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/index-slide/1.jpg" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 border-square">
                    <div class="card-body">
                        <div class="container pt-4">
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
                            <div class="row justify-content-end border-top-gray">
                                <a href="products.php" class="text-bottom-container">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 border-carousel">
                    <div id="carousel-smb-2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/index-slide/2.jpg" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 border-square">
                    <div class="card-body">
                        <div class="container pt-4">
                            <div id="two" class="carousel" data-ride="carousel">
                                <div class="owl-two loop owl-carousel owl-theme my-3" data-aos="fade-up" style="margin-left: 15px;">
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
                                                <img src="images/index-slide/e.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/f.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/g.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/h.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/e.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/f.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/g.jpg" alt="Avatar" class="image_product">
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
                            <div class="row justify-content-end border-top-gray">
                                <a href="products.php" class="text-bottom-container">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 border-carousel">
                    <div id="carousel-smb-3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/index-slide/3.jpg" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 border-square">
                    <div class="card-body">
                        <div class="container pt-4">
                            <div id="third" class="carousel" data-ride="carousel">
                                <div class="owl-third loop owl-carousel owl-theme my-3" data-aos="fade-up" style="margin-left: 15px;">
                                    <div class="item">
                                        <div class="card newsIndex">

                                            <div class="img_product">
                                                <img src="images/index-slide/g.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/h.jpg" alt="Avatar" class="image_product">
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
                                                <img src="images/index-slide/f.jpg" alt="Avatar" class="image_product">
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
                                </div>
                            </div>
                            <div class="row justify-content-end border-top-gray">
                                <a href="products.php" class="text-bottom-container">ดูทั้งหมด</a>
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
            <div class="col-lg-6 text-center pb-10">
                <a href="promotion.php"><img src="images/dtac.jpg" class="img-fluid"></a>
            </div>
            <div class="col-lg-6 text-center pb-10">
                <a href="promotion.php"><img src="images/krungsri.jpg" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="row">
            <div class="col-9" style="padding-left: 0px">
                <div class="about-us">
                    <h4 id="black-news" style="padding-bottom: 15px;color: #ff8200">ข่าวสารและกิจกรรม</h4>
                </div>
            </div>
            <div class="col-3" style="padding-right: 0px; margin-bottom: 40px;">
                <div class="about-us pull-right">
                    <a href="news.php" style="color: #898989">ดูข่าวทั้งหมด</a>
                </div>
            </div>
            <div class="card-deck">
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="images/e.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"></i> 12/12/2019</small></p>
                        <h4 class="card-title">EVENT ประจำเดือนกุมภาพันธ์ 2561</h4>
                        <p class="card-text">SMB On Tour เดือนกุมภาพันธ์ 2561 พบสินค้าคุณภาพ ราคาพิเศษได้ที่ บูธ ทรัพย์สมบูรณ์ยางยนต์ @The Mall SMB On Tour เดือนกุมภาพันธ์ 2561</p>
                        <button type="button" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;"><a id="text-white" href="#">Readmore</a></button>
                    </div>
                </div>
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="images/e.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"></i> 12/12/2019</small></p>
                        <h4 class="card-title">EVENT ประจำเดือนกุมภาพันธ์ 2561</h4>
                        <p class="card-text">SMB On Tour เดือนกุมภาพันธ์ 2561 พบสินค้าคุณภาพ ราคาพิเศษได้ที่ บูธ ทรัพย์สมบูรณ์ยางยนต์ @The Mall SMB On Tour เดือนกุมภาพันธ์ 2561</p>
                        <button type="button" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;"><a id="text-white" href="#">Readmore</a></button>
                    </div>
                </div>
                <div class="w-100 d-none d-sm-block d-md-none">
                    <!-- wrap every 2 on sm-->
                </div>
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="images/e.jpg" alt="Card image cap">
                    <div class="card-body" id="cardT">
                        <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"></i> 12/12/2019</small></p>
                        <h4 class="card-title">EVENT ประจำเดือนกุมภาพันธ์ 2561</h4>
                        <p class="card-text">SMB On Tour เดือนกุมภาพันธ์ 2561 พบสินค้าคุณภาพ ราคาพิเศษได้ที่ บูธ ทรัพย์สมบูรณ์ยางยนต์ @The Mall SMB On Tour เดือนกุมภาพันธ์ 2561</p>
                        <button type="button" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;"><a id="text-white" href="#">Readmore</a></button>
                    </div>
                </div>
                <div class="w-100 d-none d-md-block d-lg-none">
                    <!-- wrap every 3 on md-->
                </div>
            </div>
        </div>
    </div>

    <!--Fancybox-->
    <a data-fancybox="popupdesktop" href="images/fancybox.jpg" class="popupdesktop"></a>
    <a data-fancybox="popupxs" href="images/fancybox.jpg" class="popupxs"></a>
    <!--End-->

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
    </script>
    <?php require('footer.php'); ?>
</body>

</html>