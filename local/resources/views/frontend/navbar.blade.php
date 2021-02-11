<style>
    .nav-link[data-toggle].collapsed:before {
        content: "";
    }

    .nav-link[data-toggle]:not(.collapsed):before {
        content: "";
    }

    #flipkart-navbar {
        background-image: url({{asset('smb-frontend/images/navbar-bg.jpg')}});
        padding: 25px;
        padding-bottom: 0px;
        color: #FFFFFF;
        padding-top: 0px;
    }

    #flipkart-navbar-1 {
        background-image: url({{asset('smb-frontend/images/navbar-bg-1.jpg')}});
        padding: 0px;
        padding-top: 0px !important;
        padding-bottom: 15px;
        color: #ff8200;
        display: none;
    }

    #white {
        color: #fff;
    }

    #oranges {
        color: #ff8200;
    }

    .row1 {
        padding-top: 10px;
        padding-right: 50px;
    }

    .row2 {
        padding-bottom: 15px;
        padding-top: 40px;
    }

    .row3 {
        padding-top: 25px;
        padding-left: 46px;
        font-size: 16px
    }

    .row4 {
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 10px;
    }

    .row5 {
        padding-left: 285px;
        padding-right: 0px;
        padding-top: 29px;
    }

    .flipkart-navbar-input {
        padding: 11px 16px;
        border-radius: 2px 0 0 2px;
        border: 0 none;
        outline: 0 none;
        font-size: 15px;
        color: #000;
    }

    .flipkart-navbar-button {
        background-color: #ffe11b;
        border: 1px solid #ffe11b;
        border-radius: 0 2px 2px 0;
        color: #565656;
        padding: 10px 0;
        height: 43px;
        cursor: pointer;
    }

    .cart-button {
        background-color: #2469d9;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
        padding: 10px 0;
        text-align: center;
        height: 41px;
        border-radius: 2px;
        font-weight: 500;
        width: 120px;
        display: inline-block;
        color: #FFFFFF;
        text-decoration: none;
        color: inherit;
        border: none;
        outline: none;
    }

    .cart-button:hover {
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .cart-svg {
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 8px;
    }

    .item-number {
        border-radius: 3px;
        background-color: rgba(0, 0, 0, .1);
        height: 20px;
        padding: 3px 6px;
        font-weight: 500;
        display: inline-block;
        color: #fff;
        line-height: 12px;
        margin-left: 10px;
    }

    .upper-links {
        display: inline-block;
        padding: 0 11px;
        line-height: 23px;
        font-family: 'prompt', sans-serif;
        letter-spacing: 0;
        color: inherit;
        border: none;
        outline: none;
        font-size: 16px;
        font-weight: 500;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 0px;
    }

    .dropdown:hover {
        background-color: #fff;
    }

    .dropdown:hover .links {
        color: #000;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown .dropdown-menu {
        position: absolute;
        top: 100%;
        display: none;
        background-color: #fff;
        color: #333;
        left: 0px;
        border: 0;
        border-radius: 0;
        box-shadow: 0 4px 8px -3px #555454;
        margin: 0;
        padding: 0px;
        /*margin-top: 35px !important;*/
        border-top: 3px solid #e77600 !important;
    }

    .dropdown_menu.active {
        display: block !important;
    }

    .dropdown-menu li {
        padding: 6px 0;
        cursor: pointer;
        color: #ff8200;
        background-color: #000;
    }

    .links {
        color: #fff;
        text-decoration: none;
    }

    .links:hover {
        color: #fff;
        text-decoration: none;
    }

    .profile-links {
        font-size: 16px;
        font-family: 'prompt', sans-serif;
        border-bottom: 1px solid #000000 !important;
        box-sizing: border-box;
        display: block;
        padding: 0 20px;
        margin-top: 15px;
        margin-bottom: 15px;
        background-color: #000 !important;
        line-height: 6px;
    }

    .profile-li {
        padding-top: 2px;
    }

    .largenav1 {
        display: block;
        padding-left: 0px;
    }

    .largenav2 {
        display: block;
    }

    .largenav3 {
        display: block;
    }

    .smallnav {
        display: block;
    }

    .smallsearch {
        margin-left: 15px;
        margin-top: 15px;
    }

    .menu {
        cursor: pointer;
    }

    @media screen and (min-width: 768px) {
        .largenav {
            display: block;
        }

        .smallnav {
            display: none;
        }

        .smallsearch {
            margin: 0px;
        }
    }

    /*Sidenav*/
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #000;
        overflow-x: hidden;
        transition: 0.5s;
        box-shadow: 0 4px 8px -3px #555454;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 8px 8px 8px 15px;
        text-decoration: none;
        font-size: 16px !important;
        color: #818181;
        font-weight: 500;
        display: block;
        transition: 0.3s;
    }

    .sidenav .closebtn {
        position: absolute;
        top: -6px;
        right: -10px;
        font-size: 50px !important;
        margin-left: 0px;
        color: #fff;
    }

    @media screen and (max-height: 450px) {
        .sidenav a {
            font-size: 18px;
        }
    }

    .sidenav-heading {
        font-size: 36px;
        color: #fff;
    }

    .sidenav .closebtn {
        position: absolute;
        top: -10px;
        right: 0px;
        font-size: 50px;
        padding-bottom: 0px;
        margin-left: 0px;
        color: #fff;
    }

    /*Side Nav 2*/
    .sidenav2 {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #ebebeb;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .sidenav2 a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav2 a:hover {
        color: #f1f1f1;
    }

    .sidenav2 .closebtn {
        position: absolute;
        top: -9px;
        right: 7px;
        font-size: 50px;
        color: #ff8200;
        margin-left: 43px;
    }

    @media screen and (max-height: 450px) {
        .sidenav2 {
            padding-top: 0px;
        }

        .sidenav2 a {
            font-size: 18px;
        }
    }

    .buttom_register a {
        color: #fff;
        background-color: #000;
        display: inline-block;
        padding: 4px 10px;
        line-height: 20px;
        text-transform: uppercase;
        transition: 0.5s;
        font-size: 16px;
        width: 100%;
        text-align: center;
    }

    body {
        color: #000 !important;
    }

    @media screen and (min-width:320px) and (max-width:374px) {

        #flipkart-navbar-1 {
            display: block
        }
    }

    #exTab1 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    #exTab1 .nav-pills>li>a {
        border-radius: 0;
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #ff8200;
    }
</style>
<!--Main Navigation-->
@php
    $product_type = App\producttype::all();
    $hotline = App\contact::find(1);
@endphp
<div id="flipkart-navbar-1">
    <!--Edit on 25 june 2020-->
    <div class="row" id="hide" style="background-color: #ff8200;margin-bottom: 10px;text-align: center;color: #fff;font-weight:500">
        <a>Hotline {{$hotline->contact_tell}}</a>
    </div>
    <div class="row">
        <div class="col-2">
            <h2><span class="smallnav menu" onclick="openNav()"><img src="{{asset('smb-frontend/images/ham.png')}}"></span></h2>
        </div>
        <div id="logopadleft" class="col-6" style="padding-right: 0px;padding-left: 15px;">
            <a href="{{url('/')}}"><img src="{{asset('smb-frontend/images/smb-logo.png')}}" weight="40px" height="40px" alt="logo"></a>
        </div>
        <div class="col-2" style="padding-left:30px">
            <h2><span class="smallnav menu" onclick="openNav2()"><img src="{{asset('smb-frontend/images/search.png')}}"></span></h2>
        </div>
        @if (auth('customer')->user() != null)
        <div class="col-2">
            <h2><span class="smallnav menu"><a href="{{url('cart')}}"><img src="{{asset('smb-frontend/images/cart.png')}}"></span></h2></a>
        </div>
        @endif
    </div>
</div>
<div id="flipkart-navbar">
    <div class="container-fluid">
        <div class="row row4" id="hide2">
            <div class="col-lg-5 col-md-12" style="padding-left: 15px;">
                <a class="links" href="tel:{{$hotline->contact_tell}}" id="white">
                    <li class="upper-links" style="padding-right: 0px;"><i class="fas fa-mobile-alt" style="color: #ff8200;"></i> Hotline {{$hotline->contact_tell}}</li>
                </a>
            </div>
            <div class="col-lg-7 col-md-12">
                <ul class="largenav2 pull-right">
                    <li class="upper-links" style="padding-right: 0px"><i class="fab fa-line fa-lg" style="color: #ff8200;"></i><a class="links" href="{{$hotline->contact_line}}" id="white"> @smbwheel</a></li>
                    <li class="upper-links" style="border-right: 1px solid;"><a class="links" href="{{url('branch')}}" id="white">ที่ตั้งสาขา</a></li>
                    <li class="upper-links"><a class="links" href="{{url('contact')}}" id="white">ช่วยเหลือ</a></li>
                    @if (auth('customer')->user() == null)
                    <a class="links" href="{{url('signin')}}" id="white" title="Sign in">
                        <li class="upper-links" style="padding-right: 0px">
                            <i class="fas fa-user-circle fa-lg" style="color: #ff8200;"></i>
                        </li>
                    </a>
                    @else
                    <a class="links" href="{{url('cart')}}" id="white" title="Cart">
                        <li class="upper-links" style="padding-right: 0px"><i class="fas fa-shopping-cart fa-lg" style="color: #ff8200;"></i></li>
                    </a>
                    <a class="links" href="javascript:$('#flogout').submit();" id="white" title="Sign Out">
                        <li class="upper-links" style="padding-right: 0px">
                            {{auth('customer')->user()->name}} {{auth('customer')->user()->user_lname}}
                        </li>
                    </a>
                    @endif

                </ul>
            </div>
        </div>
        <div class="row row2" id="hide2">
            <div class="col-lg-2 col-md-12">
                <a href="{{url('/')}}">
                    <h1 style="margin:0px;"><span class="largenav"><img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt=""></span></h1>
                </a>
            </div>
            <div class="row row3" id="hide2">
                <ul class="largenav3 pull-right">
                    <!-- <li class="upper-links"><a class="links" href="index.php" id="white">หน้าหลัก</a></li> -->
                    <li class="upper-links dropdown" style="background-clip: #000"><a class="links" href="#">สินค้า</a>
                        <ul class="dropdown-menu">
                            @foreach ($product_type as $item)
                            <li class="profile-li"><a class="profile-links" href="{{url('producttype', $item->p_type_id)}}">- {{$item->p_type_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- <li class="upper-links"><a class="links" href="about.php" id="white">เกี่ยวกับเรา</a></li> -->
                    <li class="upper-links"><a class="links" href="{{url('news')}}" id="white">ข่าวสารและกิจกรรม</a></li>
                    <li class="upper-links"><a class="links" href="{{url('promotion')}}" id="white">โปรโมชั่น</a></li>
                    <li class="upper-links"><a class="links" href="{{url('award')}}" id="white">ผลงาน</a></li>
                    <li class="upper-links"><a class="Links" href="{{url('blog')}}" id="white">บล็อค</a></li>
                    {{-- <li class="upper-links"><a class="links" href="{{url('contact')}}" id="white">ติดต่อเรา</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- mobile --}}
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #000; padding-top: 30px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px">
        <div class="row">
            <div class="col-6" style="border: 2px solid #fff;padding-left: 0px;padding-right: 0px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;padding: 0px">
                    <div class="buttom_register">
                        @if (auth('customer')->user() == null)
                        <a href="{{url('signin')}}">เข้าสู่ระบบ</a>
                        @else
                        <div style="color: white">
                            {{auth('customer')->user()->name}} {{auth('customer')->user()->user_lname}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-6" style="border: 2px solid #fff;border-left: 0px;padding: 0px">
                <div class="form-group col-md-12" style="margin-bottom: 0px;padding-left: 0px;padding-right: 0px;">
                    <div class="buttom_register">
                        @if (auth('customer')->user() == null)
                        <a href="{{url('signin')}}">สมัครสมาชิก</a>
                        @else
                        <div style="line-height: 50px; text-align: center;">
                            <a href="javascript:$('#flogout').submit();">ออกจากระบบ</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <li class="nav-item" style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1">สินค้า ▼</a>
        <div class="collapse" id="submenu1" aria-expanded="false">
            @foreach ($product_type as $item)
            <ul class="flex-column pl-2 nav">
                <li class="nav-item"><a class="nav-link py-0" href="{{url('producttype', $item->p_type_id)}}"><span id="orange">- {{$item->p_type_name}}</span></a></li>
            </ul>
            @endforeach
        </div>
    </li>
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('news')}}">ข่าวสารและกิจกรรม</a>
    </li>
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('promotion')}}">โปรโมชั่น</a>
    </li>
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('award')}}">ผลงาน</a>
    </li>
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('blog')}}">Blog</a>
    </li>
    {{-- <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('contact')}}">ติดต่อเรา</a>
    </li> --}}
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('branch')}}">ที่ตั้งสาขา</a>
    </li>
    <li style="border-bottom: 1px solid #252525;margin-top: -25px;">
        <a href="{{url('contact')}}">ช่วยเหลือ</a>
    </li>
    <div class="row mt-3">
        <div class="col-sm-12" style="padding-left: 30px;">
            <a href="{{$hotline->contact_facebook}}" style="display: inline!important"><img src="{{asset('smb-frontend/images/navbar-right/fb.png')}}"></a>
            <a href="{{$hotline->contact_twitter}}" style="display: inline!important"><img src="{{asset('smb-frontend/images/navbar-right/tw.png')}}"></a>
            <a href="{{$hotline->contact_youtube}}" style="display: inline!important"><img src="{{asset('smb-frontend/images/navbar-right/yt.png')}}"></a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12" style="padding-left: 26px;">
            <a href="{{$hotline->contact_line}}" style="display: inline!important;color: #fff"><img src="{{asset('smb-frontend/images/navbar-right/line.png')}}">@smbwheel</a>
        </div>
    </div>
</div>

<div id="mySidenav2" class="sidenav2">
    <div class="container" style="background-color: #ebebeb; padding-top: 30px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()" style="font-size: 50px!important;font-weight: 500;">×</a>
    </div>
    <div class="container-fluid" id="pdlpdr">
        <h3 style="font-size: 25px;font-weight:600;color: #ff8200"><img src="{{asset('smb-frontend/images/navbar-right/sh.png')}}">ค้นหา</h3>
        <div class="tab-content">
            <ul class="nav nav-tabs mt-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active container tab-pane" data-toggle="tab" href="#first"><img src="{{asset('smb-frontend/images/navbar-right/1.png')}}" class="img-flex">ค้นหาตามชื่อสินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link container tab-pane" data-toggle="tab" href="#home"><img src="{{asset('smb-frontend/images/navbar-right/2.png')}}" class="img-flex">การค้นหาแม็กซ์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link container tab-pane" data-toggle="tab" href="#menu1"><img src="{{asset('smb-frontend/images/navbar-right/3.png')}}" class="img-flex-2">การค้นหายาง</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-border">
            <div id="first" class="container tab-pane active pdlpdr" style="background-color: #ebebeb">
                <b id="idorange" style="padding-top: 10px">ค้นหาตามชื่อสินค้า</b>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <form action=""{{url('searchbyname')}} method="GET" id="selecBy_name_nav">
                            <input type="text" name="product_name" class="form-control" id="inputIDcard" placeholder="ค้นหา">
                        </form>
                        <div class="buttom_register mt-3"><button id="a" type="submit" form="selecBy_name_nav">ค้นหา</button></div>
                    </div>
                </div>
            </div>
            <div id="home" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                <b id="idorange" style="padding-top: 10px">การค้นหาแม็กซ์</b>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="selectDay">
                            <h6>ขนาด<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>PCD<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectMonth" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                <div class="form-group col-md-12 text-center">
                    <a href="{{url('product')}}" id="c" style="padding: 0px 0px 0px 0px!important;color: #ff8200;border-bottom: 1px solid #ff8200;font-size: 14px!important;text-align: left!important">การค้นหาแบบละเอียด</a>
                </div>
                <b id="idorange">ค้นหาตามรุ่นรถยนต์</b>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="selectDay">
                            <h6>ยี่ห้อรถยนต์<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>รุ่นรถ<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectMonth" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                    <div class="form-group col-md-12 text-center">
                        <a href="{{url('product')}}" id="c" style="padding: 0px 0px 0px 0px!important;color: #ff8200;;font-size: 14px!important;text-align: left!important">การค้นหาแบบละเอียด</a>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="buttom_register"><a id="a" href="#" style="font-size: 15px!important">ค้นหา</a></div>
                    </div>
                </div>
            </div>
            <div id="menu1" class="container tab-pane fade" style="background-color: #ebebeb"><br>
                <b id="idorange" style="padding-top: 10px">การค้นหายาง</b>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="selectDay">
                            <h6>ขนาด<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>PCD<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectMonth" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                <div class="form-group col-md-12 text-center">
                    <a href="{{url('product')}}" id="c" style="padding: 0px 0px 0px 0px!important;color: #ff8200;border-bottom: 1px solid #ff8200;font-size: 14px!important;text-align: left!important">การค้นหาแบบละเอียด</a>
                </div>
                <b id="idorange">ค้นหาตามรุ่นรถยนต์</b>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="selectDay">
                            <h6>ยี่ห้อรถยนต์<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>รุ่นรถ<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectDay" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                            <h6>ปีที่ผลิตรถยนต์<a style="color: #ff8200;display: inline!important;padding: 8px 8px 8px 2px!important;">*</a></h6>
                        </label>
                        <select id="selectMonth" class="form-control-5" style="border: 1px solid #ff8200; border-radius: 0px;">
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
                    <div class="form-group col-md-12 text-center">
                        <a href="{{url('product')}}" id="c" style="padding: 0px 0px 0px 0px!important;color: #ff8200;;font-size: 14px!important;text-align: left!important">การค้นหาแบบละเอียด</a>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="buttom_register"><a id="a" href="#" style="font-size: 15px!important">ค้นหา</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</h6>
</li>
</div>
<form action="{{ route('logout') }}" method="post" id="flogout">
    @csrf
</form>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "70%";
        // document.getElementById("flipkart-navbar").style.width = "50%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "rgba(0,0,0,0)";
    }

    function openNav2() {
        document.getElementById("mySidenav2").style.width = "80%";
        // document.getElementById("flipkart-navbar").style.width = "50%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav2() {
        document.getElementById("mySidenav2").style.width = "0";
        document.body.style.backgroundColor = "rgba(0,0,0,0)";
    }
</script>
