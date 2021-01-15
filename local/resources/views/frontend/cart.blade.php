<!doctype html>
<html lang="en">

<head>
    <title>ตะกร้าสินค้า - SMB Wheel</title>
    @include('frontend.header')
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
    @include('frontend.navbar')
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
                                {!! $html !!}
                            </div>
                            <div class="connex">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12" style="padding-left: 0px;padding-right:0px">
                                        <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                            <div class="buttom_register"><a id="b" href="{{url('product')}}">เลือกสินค้าเพิ่มเติม</a></div>
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
                                        <p id="orange" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px">{{$productTotal}} รายการในรถเข็นของคุณ</p>
                                    </div>
                                    <div class="text_order">
                                        <p style="font-weight: 400;margin-bottom: -10px;">ข้อมูลการสั่งซื้อ</p>
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-8">
                                                <h6 style="text-align: left;">ยอดรวม (จำนาวน {{$productTotal}} ชื้น)</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <h6>{{number_format($productPriceTotal)}}</h6>
                                            </div>
                                        </div>
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-6">
                                                <h6 style="text-align: left;">รายการสินค้า</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6>ราคา</h6>
                                            </div>
                                        </div>
                                        @foreach ($getProductCart as $key => $item)
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-6">
                                                <h6 style="text-align: left;">{{$item->name}}</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6>{{number_format($item->price)}} / วง</h6>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-6">
                                                <h6 style="text-align: left;">ยอดรวมทั้งสิ้น</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <h6>
                                                    <p id="orange">{{number_format($productPriceTotal)}}</p>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 10px;padding-top: 15px">
                                            <div class="col-12">
                                                <h6>เลือกการจัดส่ง</h6>
                                                <select id="selectDay" class="form-control-5">
                                                    <option selected disabled>เลือก</option>
                                                    <option>จัดส่งฟรี</option>
                                                    <option>EMS</option>
                                                    <option>Kerry</option>
                                                    <option>Ninjavan</option>
                                                </select>
                                            </div>
                                        </div>
                                        @if ($productTotal != 0)
                                        <div class="form-group col-md-12 mt-5" style="padding-bottom: 11px;">
                                            <div class="buttom_register"><a id="b" href="{{url('account_customer')}}">ดำเนินการชำระเงิน</a></div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($getWatchProduct != null)
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
                                        @foreach ($getWatchProduct as $item)
                                        <div class="item">
                                            <div class="card newsIndex">
                                                <div class="img_product">
                                                    <img src="{{asset("local/storage/app/product/".$item->product_imgcov."")}}" alt="Avatar" class="image_product">
                                                </div>
                                                <div class="text_product">
                                                    <div class="product-name">
                                                        <div class="about-us">
                                                            <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">{{$item->product_name}}</h6>
                                                        </div>
                                                        Size: 
                                                        @foreach ($item->getProductSizes as $value_size)
                                                        {{$value_size->size_diameter}}
                                                        @endforeach<br>
                                                        PCD: 
                                                        @foreach ($item->getProductPcds as $value_pcd)
                                                        {{$value_pcd->pcd_name}}
                                                        @endforeach<br>
                                                        ET: 
                                                        @foreach ($item->getProductEts as $value_et)
                                                        {{$value_et->et_name}}
                                                        @endforeach
                                                        <div class="product-price">
                                                            @if ($item->product_price_discount != null)
                                                            <del>{{$item->product_price}}</del>
                                                            @endif
                                                            
                                                            <a id="orange19"> 
                                                                @if ($item->product_price_discount == null)
                                                                {{$item->product_price}}
                                                                @else
                                                                {{$item->product_price_discount}}
                                                                @endif
                                                            </a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
    @include('frontend.footer')
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

        $('.btn-delcart').click(function () { 
            var id = $(this).val();
            if (id != null) {
                $.ajax({
                    url: '{{url('delProductInCart')}}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {id: id},
                }).done(function (data) {
                    location.reload(true);
                });
            }
            $('#deleteCart_'+id).fadeOut();
        });
    </script>

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