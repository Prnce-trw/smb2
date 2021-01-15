<!doctype html>
<html lang="en">

<head>
    <title>กรอกข้อมูลลูกค้า - SMB Wheel</title>
    @include('frontend.header')
</head>

<body>
    @include('frontend.navbar')
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="stepwizard col-md-3">
            </div>
            <div class="stepwizard col-md-6">
                <div class="stepwizard-row">
                    <div class="stepwizard-step">
                        <button type="button" class="btn btn-primary">
                            <h3>1</h3>
                        </button>
                        <p><span class="shipping" style="font-size: 18px;font-weight: 400;line-height:1.6;">กรอกข้อมูลลูกค้า</span></p>
                    </div>
                    <div class="stepwizard-step">
                        <button type="button" class="btn btn-circle">
                            <h3>2</h3>
                        </button>
                        <p id="tsmall" style="font-size: 18px;font-weight: 400;line-height:1.6;">ตรวจสอบและชำระเงิน</p>
                    </div>
                    <div class="stepwizard-step">
                        <button type="button" class="btn btn-circle">
                            <h3>3</h3>
                        </button>
                        <p id="tsmall" tyle="font-size: 18px;font-weight: 400;line-height:1.6;">รับการสั่งซื้อ</p>
                    </div>
                </div>
            </div>
            <div class="stepwiazrd col-md-3">
            </div>
            <!--Container Content-->
            <div class="container" id="pdlpdr">
                <div class="row pad_cartshop">
                    <div class="col-12">
                        <div class="row">
                            <div id="pdlpdr" class="col-12 col-md-12 col-lg-8 col-xl-8 bg_boxcart border shadow-sm p-5 mb-5 bg-white rounded" style="padding-top: 20px!important">
                                <div class="row cart_cartshop">
                                    <div class="col-12 col-md-12 col-lg-12 cartpad-left">
                                        <div class="cart_cart">
                                            <h4 id="textaHH">กรอกที่อยู่สำหรับจัดส่ง</h4>
                                        </div>
                                    </div>
                                </div>
                                @if ($getUser->getCustomerAddress != null)
                                @foreach ($getAddress as $key => $item)
                                <div class="md-radio md-radio-inline radiocheck" style="border-bottom: 1px solid #d7d7d7;padding-bottom:20px">
                                    <input id="{{$key+1}}" type="radio" name="g4" rel="complete_y_{{$key+1}}" {{ $getUser->getCustomerAddress != null ? "checked" : "" }} value="1" form="new_address" data-address="1" data-no="{{$key+1}}">
                                    <label for="{{$key+1}}">ที่อยู่สำหรับจัดส่ง</label>
                                </div>
                                <div class="wrap_radioinsure complete_all complete_y_{{$key+1}}" style="display: block;" id>
                                    <div class="row padding-bottom-com">
                                        <div class="col-4 col-md-3 col-lg-3">
                                            <div class="personal-text-1">Name : </div>
                                            <div class="personal-text-1">Last Names : </div>
                                            <div class="personal-text-1">Phone : </div>
                                            <div class="personal-text-1">E-mail : </div>
                                            <div class="personal-text-1">Address : </div>
                                            <div class="personal-text-1">Sub-district/Sub-area : </div>
                                            <div class="personal-text-1">District/Area : </div>
                                            <div class="personal-text-1">Province : </div>
                                            <div class="personal-text-1">Postal Code : </div>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4">
                                            <div class="personal-text">{{$item->address_user_name}}</div>
                                            <div class="personal-text">{{$item->address_user_lname}}</div>
                                            <div class="personal-text">{{ $item->address_phone != null ? $item->address_phone : "-" }}</div>
                                            <div class="personal-text">{{ $item->address_email != null ? $item->address_email : "-" }}</div>
                                            <div class="personal-text">{{ $item->address_1 != null ? $item->address_1 : "-" }} {{ $item->address_2 != null ? $item->address_2 : "" }}</div>
                                            <div class="personal-text">{{ $item->address_sub_district != null ? $item->address_sub_district : "-" }}</div>
                                            <div class="personal-text">{{ $item->address_county != null ? $item->address_county : "-" }}</div>
                                            <div class="personal-text">{{ $item->address_province != null ? $item->address_province : "-" }}</div>
                                            <div class="personal-text">{{ $item->address_postalcode != null ? $item->address_postalcode : "-" }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <div class="md-radio md-radio-inline radiocheck" style="border-bottom: 1px solid #d7d7d7;padding-bottom:20px">
                                    <input id="0" type="radio" name="g4" rel="complete_n" value="2" form="new_address" {{ $getUser->getCustomerAddress == null ? "checked" : "" }} data-address="2">
                                    <label for="0">เพิ่มที่อยู่ใหม่</label>
                                </div>
                                <form action="{{url('new_address')}}" method="POST" id="new_address">
                                    @csrf
                                <div class="wrap_radioinsure complete_n padding-bottom-lo">
                                    <input type="hidden" value="{{$getUser->user_id}}" name="user_id">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">ชื่อ* :</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="name" class="form-shipping" value="{{$getUser->name}}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">นามสกุล* :</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="lname" class="form-shipping" value="{{$getUser->user_lname}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="personal-text">ที่อยู่ 1.*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="address1" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="personal-text">ที่อยู่ 2*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="address2" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">ตำบล/แขวง*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="sub_district" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">เขต/อำเภอ*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="county" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">จังหวัด*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="province" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">รหัสไปรษณีย์*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="postalcode" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">อีเมล*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="email" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">เบอร์โทร*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" name="phone" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row cart_cartshop mt-5">
                                        <div class="col-12 col-md-12 col-lg-12 cartpad-left">
                                            <div class="cart_cart">
                                                <h4 id="textaHH">กรอกข้อมูลติดต่อ</h4>
                                                <p id="orange" style="border-bottom: 1px solid #d7d7d7;padding-bottom: 10px">กรณีเก็บเงินปลายทาง</p>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="personal-text">อีเมล*:</div>
                                                <div class="ma-top-foemember">
                                                    <input id="" name="email_delivery" class="form-shipping">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="personal-text">เบอร์โทร*:</div>
                                                <div class="ma-top-foemember">
                                                    <input id="" name="phone_delivery" class="form-shipping">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 20px;margin-bottom:20px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">สมัครรับจดหมายข่าว</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="buttom_register"><button id="b" href="#">ดำเนินการต่อ</button></div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="buttom_register"><a id="c" href="#">ย้อนกลับ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
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
                                                    <h6 style="text-align: left;">ยอดรวม (จำนาวน {{$productTotal}} วง)</h6>
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
                                                <div class="col-6">
                                                    <h6>เลือกการจัดส่ง</h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>จัดส่งฟรี</h6>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mt-5">
                                                <div class="buttom_register"><a id="b" href="{{url('account_customer_payment')}}">ดำเนินการชำระเงิน</a></div>
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
    @include('frontend.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        $(document).ready(function() {
            var value =  $("input[name*='g4']:checked").attr('data-address');
            var no =  $("input[name*='g4']:checked").attr('data-no');
            // alert(value, no);
            if (value == 1) {
                $(".complete_all").hide();
                $(".complete_n").hide();
                $(".complete_y_"+no).show();
            } else {
                $(".complete_y").hide();
                $(".complete_n").show();
            }
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("rel");
                var targetBox = $("." + inputValue);
                // alert(inputValue);
                $(".wrap_radioinsure").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
</body>

</html>