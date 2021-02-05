<!doctype html>
<html lang="en">

<head>
    <title>Products - SMB</title>
    @include('frontend.header')
    <style>
        /*แก้ไขใหม่*/
.pd-tyre {
    width: 48%;
    float: left;
    padding: 0 10px;
    margin: 0 10px;
    border: 2px solid #ebebeb;
}

.pd-tyre .img_product {
    position: relative;
        margin: 20px 0;
}

.pd-tyre .img_product .label {
    width: 40px;
    height: auto;
    display: inline-block;
    position: absolute;
}

.pd-tyre .img_product .label img {
    width: 100%;
    height: auto;
}

.pd-tyre .about-us {
    width: 100%;
    display: inline-block;
}

.pd-tyre .about-us .col-left {
    width: 80%;
    float: left;
}

.pd-tyre .about-us .col-right {
    width: 20%;
    float: right;
}

.pd-tyre .about-us .col-right .popup-detail {
    /*    width: 130px;*/
    display: block;
    border: 1px solid #000;
}

.pd-tyre .about-us .col-right .modal-dialog {
    max-width: 60%;
}

.pd-tyre img.image_product {
    width: 100%;
    height: auto;
}

.pd-tyre .label-special {
    right: inherit;
    left: 20px;
}

.pd-tyre .text_product {
    padding: 30px 0 0;
}

.pd-tyre .product-text {
    width: 100%;
    display: inline-block;
}

.pd-tyre .product-text img {
    width: 145px;
}

.pd-tyre .series-mobel {
    font-size: 18px;
    margin-bottom: 10px;
    color: #252525;
    padding-bottom: 0;
    margin-top: 10px;
    margin-bottom: 0;
    display: block;
}

.pd-tyre .size-mobel {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 0;
    color: #252525;
    display: block;
}

.pd-tyre .sub-item {
    width: 100%;
    float: left;
}

.pd-tyre .sub-item p {
    font-size: 14px;
    margin-bottom: 5px;
    line-height: 24px;
    font-weight: 300;
    overflow: inherit;
}

.pd-tyre .sub-item p.price-special {
    display: inline-block;
    line-height: 14px;
    margin: 0;
}

.pd-tyre .sub-item p .bg-pm {
    color: #fff;
    background: #FF0000;
    padding: 2px 20px;
    margin: 0 10px;
}

.pd-tyre .sub-item p .color_pm {
    color: #FF0000;
}

.pd-tyre .sub-item p .font-large {
    font-size: 26px;
    font-weight: 500;
}

.pd-tyre .sub-item a {
    padding: 6px 20px;
    color: #252525;
    background-color: #ff8200;
    margin: 15px 0;
    display: inline-block;
}

.pd-tyre .sub-item a:hover {
    text-decoration: none;
    color: #ff8200;
    background-color: #252525;
}

.sub-bottom {
    width: 100%;
    display: inline-block;
    margin: 10px 0;
}

.sub-bottom ul {
    padding: 0;
    margin: 0;
    ;
}

.sub-bottom ul li {
    float: left;
    list-style: none;
}

.sub-bottom ul li .form-check {
    padding-top: 15px;
}

.sub-bottom ul li .form-check .form-check-input {
    margin-top: 7px;
}

.sub-bottom .product-quantity {
    text-align: center;
    margin-left: 50px;
    margin-right: 15px;
    padding-bottom: 0px;
    border: 1px solid #e1e1e1;
}

.sub-bottom .product-quantity svg:not(:root).svg-inline--fa {
    overflow: visible
}

.sub-bottom .product-quantity .svg-inline--fa.fa-w-14 {
    width: .875em;
}

.sub-bottom .product-quantity-subtract,
.sub-bottom .product-quantity-add {
    padding-left: 5px;
    background-color: #fff;
    width: 30px;
    height: 30px;
    color: #000;
    font-size: 10px;
    line-height: 34px;
    cursor: pointer;
}

.sub-bottom .product-quantity * {
    display: inline-block;
}

.sub-bottom #product-quantity-input {
    text-align: center;
    background-color: #fff;
    border: none;
    width: 50px;
    height: 46px;
    line-height: 34px;
    font-size: 15px;
    outline: none;
    border-radius: 0;
}

        .sticky-offset {
            top: 56px;
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
                    <div class="input-group border">
                        <input type="search" aria-describedby="button-addon3" class="form-control-4 bg-none pt-3" placeholder="ค้นหาตามชื่อสินค้า">
                        <div class="input-group-append border-0">
                            <button id="button-addon3" type="button" class="btn btn-link text-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectDay">
                                    <h6>ขนาด<a style="color: #ff8200">*</a></h6>
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
                            <div class="form-group col-md-6">
                                <label for="selectMonth">
                                    <h6>PCD<a style="color: #ff8200">*</a></h6>
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
                        </div>

                        <b>ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="selectDay">
                                    <h6>ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectDay">
                                    <h6>รุ่นรถ<a style="color: #ff8200">*</a></h6>
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
                            <div class="form-group col-md-6">
                                <label for="selectMonth">
                                    <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="buttom_register"><a id="a" href="#">ค้นหา</a></div>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <a href="#" id="b">การค้นหาแบบละเอียด</a>
                            </div>
                        </div>
                    </div>
                    <div id="wheel" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                        <b>ค้นหาตามยาง</b>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectDay">
                                    <h6>ขนาด<a style="color: #ff8200">*</a></h6>
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
                            <div class="form-group col-md-6">
                                <label for="selectMonth">
                                    <h6>PCD<a style="color: #ff8200">*</a></h6>
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
                        </div>

                        <b>ค้นหาตามรุ่นรถยนต์</b>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="selectDay">
                                    <h6>ยี่ห้อรถยนต์<a style="color: #ff8200">*</a></h6>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectDay">
                                    <h6>รุ่นรถ<a style="color: #ff8200">*</a></h6>
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
                            <div class="form-group col-md-6">
                                <label for="selectMonth">
                                    <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200">*</a></h6>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="buttom_register"><a id="a" href="#">ค้นหา</a></div>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <a href="#" id="b">การค้นหาแบบละเอียด</a>
                            </div>
                        </div>
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
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- แม็กซ์</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- ยาง</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- โช๊ค</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- ผ้าเบรค</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- สินค้าอื่นๆ</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- สินค้ามือสอง</a>
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
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Force</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Naya Wheel</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Cosmis</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Good Year</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Valenza</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- Primewell</a>
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
                                <div class="panel-heading" role="tab" id="heading5">
                                    <h4 class="panel-title">
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div id="collapse5" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading5">
                                </div>
                            </div>
                            <div class="panel panel-default" style="background-color: #ff8200">
                                <div class="panel-heading" role="tab" id="heading5">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            ประเภทรถ
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="panel-body pt-3 pr-2 pl-2" style="background-color: #fff">
                                        <div class="textreviews">
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- แม็กซ์</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- ยาง</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- โช๊ค</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- ผ้าเบรค</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- สินค้าอื่นๆ</a>
                                            <a class="dropdown-item" href="#" style="color: #000;border-bottom: 1px solid #ebebeb">- สินค้ามือสอง</a>
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
                </div>
                <div class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    {{-- <div class="row">
                        @foreach ($product as $item)
                        <div class="col-sm-6">
                            <div class="pd-tyre row">
                                <div class="img_product col-12 col-md-3">
                                    <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product">
                                </div>
                                <div class="text_product col-12 col-md-9">
                                    <div class="about-us">
                                        <div class="col-left">
                                            <div class="product-text">
                                                <img src="{{asset('local/storage/app/brand/'.$item->getBrand->brand_img.'')}}" height="100px">
                                                <p class="series-mobel">{{$item->product_name}}</p>
                                                <p class="size-mobel">
                                                    @foreach ($item->getProductSizes as $item_size)
                                                    {{$item_size->size_width}}/{{$item_size->size_overall}}ZR{{$item_size->size_diameter}}
                                                    @endforeach AGILIS <span class="label"><img src="{{asset('smb-frontend/images/label-special.png')}}"></span></p>
                                                <div class="sub-item">
                                                    @foreach ($item->getProductSizes as $key => $item_price)
                                                    <p><span>ราคาปกติ</span>เส้นละ <span class="font-large">{{$item_price->size_price}}</span> บาท</p>
                                                    <p class="price-special"><span class="color_pm" style="margin-left: 35px;">พิเศษ</span><br>ราคาเส้นละ <span class="bg-pm font-large">2,990</span> บาท</p>
                                                    @endforeach
        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-right">
                                            @foreach ($item->getProductImgSets as $key => $item)
                                            <a class="popup-detail" data-toggle="modal" data-target="#exampleModal"><img src="{{asset('local/storage/app/productgallery/'.$item->product_imgset_name.'')}}" class="image_product"></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <img src="{{asset('local/storage/app/productgallery/'.$$item->getProductImgSets->product_imgset_name.'')}}" class="image_product">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="sub-bottom">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="ChooseCompare">
                                                        <label class="form-check-label" for="ChooseCompare">เลือกเพื่อเปรียบเทียบ เลือกได้สูงสุด 3 สินค้า</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-quantity" id="pq">
                                                        <div class="product-quantity-subtract">
                                                            <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                            </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                        </div>
                                                        <div>
                                                            <input type="text" id="product-quantity-input" placeholder="0" value="0">
                                                        </div>
                                                        <div class="product-quantity-add">
                                                            <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                            </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="cart.php" class="btn btn-black rounded-0" style="color: #fff;" id="lk">ใส่ตะกร้าสินค้า</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                    <div class="row">
                        @foreach ($product as $item)
                        <div class="pd-tyre row">
                            <div class="img_product col-12 col-md-4">
                               <span class="label"><img src="{{asset('smb-frontend/images/label-special.png')}}"></span>
                                <img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" alt="Avatar" class="image_product">
                            </div>
                            <div class="text_product col-12 col-md-8">
                                <div class="about-us">
                                    <div class="col-left">
                                        <div class="product-text">
                                            <img src="{{asset('local/storage/app/brand/'.$item->getBrand->brand_img.'')}}">
                                            <p class="series-mobel">{{$item->product_name}}</p>
                                            <p class="size-mobel">
                                                @foreach ($item->getProductSizes as $item_size)
                                                    {{$item_size->size_width}}/{{$item_size->size_overall}}ZR{{$item_size->size_diameter}}
                                                @endforeach 
                                            </p>
                                            <div class="sub-item">
                                                <p><span>ราคาปกติ</span>เส้นละ <span class="font-large">{{$item->product_price}}</span> บาท</p>
                                                {{-- <p class="price-special"><span class="color_pm" style="margin-left: 35px;">พิเศษ</span><br>ราคาเส้นละ <span class="bg-pm font-large">2,990</span> บาท</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right">
                                        @foreach ($item->getProductImgSets as $itemmodal) 
                                        <a class="popup-detail" data-toggle="modal" data-target="#exampleModal"><img src="{{asset('local/storage/app/productgallery/'.$itemmodal->product_imgset_name.'')}}" class="image_product"></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <img src="{{asset('local/storage/app/productgallery/'.$itemmodal->product_imgset_name.'')}}" class="image_product">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="sub-bottom">
                                        <ul>
                                            <li>
                                                <div class="product-quantity" id="pq">
                                                    <div class="product-quantity-subtract">
                                                        <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                    </div>
                                                    <div>
                                                        <input type="text" id="product-quantity-input" placeholder="0" value="0">
                                                    </div>
                                                    <div class="product-quantity-add">
                                                        <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="cart.php" class="btn btn-black rounded-0" style="color: #fff;" id="lk">ใส่ตะกร้าสินค้า</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    
                    
                    

                    <!--
                    <div class="row">
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
-->
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

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/propeller.min.js"></script>
    <!-- Jquery js -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Slider js -->
    <script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
    <script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
    <script>
        // multiple handled with value
        var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');

        noUiSlider.create(pmdSliderValueRange, {
            start: [0, 10000], // Handle start position
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
                'max': 10000
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
        });

    </script>
    <script>
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

    </script>
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
    <!--End Sidebar Script-->

    @include('frontend.footer')
</body>

</html>
