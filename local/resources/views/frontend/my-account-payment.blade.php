<!doctype html>
<html lang="en">

<head>
    <title>ตรวจสอบและชำระเงิน - SMB Wheel</title>
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
                        <button type="button" class="btn btn-circle">
                            <h3>1</h3>
                        </button>
                        <p><span class="shipping" style="font-size: 18px;font-weight: 400;line-height:1.6;">กรอกข้อมูลลูกค้า</span></p>
                    </div>
                    <div class="stepwizard-step">
                        <button type="button" class="btn btn-primary">
                            <h3>2</h3>
                        </button>
                        <p id="tsmall" style="font-size: 18px;font-weight: 400;line-height:1.6;">ตรวจสอบและชำระเงิน</p>
                    </div>
                    <div class="stepwizard-step">
                        <button type="button" class="btn btn-circle">
                            <h3>3</h3>
                        </button>
                        <p id="tsmall" style="font-size: 18px;font-weight: 400;line-height:1.6;">รับการสั่งซื้อ</p>
                    </div>
                </div>
            </div>
            <div class="stepwiazrd col-md-3">
            </div>
            <!--Container Content-->
            <div class="container">
                <div class="row pad_cartshop">
                    <div class="col-12">
                        <div class="row">
                            <div id="pdlpdr" class="col-12 col-md-12 col-lg-8 col-xl-8 bg_boxcart border shadow-sm p-5 mb-5 bg-white rounded" style="padding-top: 20px!important">
                                <div class="row cart_cartshop">
                                    <div class="col-12 col-md-12 col-lg-12 cartpad-left">
                                        <div class="cart_cart">
                                            <h4 id="textaHH">ข้อมูลการชำระเงิน</h4>
                                            <p class="text-sm" style="color: #959595;border-bottom: 1px solid #d7d7d7;padding-bottom: 20px;">โปรดกรอกข้อมูลต่าง ๆ ให้ครบถ้วน เพื่อความรวดเร็วในการตรวจสอบ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input id="3" type="radio" name="g4" rel="complete_y" checked="">
                                            <label for="3">Internet Banking</label>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('smb-frontend/images/payment/1-6.jpg')}}" id="pdlpdr" style="padding-left: 48px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap_radioinsure complete_y" style="display: block;">
                                    <div class="row padding-bottom-com">
                                        <div class="col-lg-1 col-md-1 col-sm-1" id="dspln">
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-sm-11">
                                            <div class="md-radio md-radio-inline radiocheck pdbtm" style="padding-bottom:20px">
                                                <input id="6" type="radio" name="g5" rel="">
                                                <label for="6">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{asset('smb-frontend/images/payment/1.jpg')}}">
                                                        </div>
                                                        <div class="col-md-9" style="line-height: 15px!important;">
                                                            <small>ธนาคารกรุงศรีอยุธยา</small><br><small style="color: #d7d7d7">Bank of ayutthaya</small>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="md-radio md-radio-inline radiocheck pdbtm" style="padding-bottom:20px">
                                                <input id="7" type="radio" name="g5" rel="">
                                                <label for="7">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{asset('smb-frontend/images/payment/2.jpg')}}">
                                                        </div>
                                                        <div class="col-md-9" style="line-height: 15px!important;">
                                                            <small>ธนาคารกรุงเทพ</small><br><small style="color: #d7d7d7">Bangkok Bank</small>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="md-radio md-radio-inline radiocheck pdbtm" style="padding-bottom:20px">
                                                <input id="8" type="radio" name="g5" rel="">
                                                <label for="8">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{asset('smb-frontend/images/payment/3.jpg')}}">
                                                        </div>
                                                        <div class="col-md-9" style="line-height: 15px!important;">
                                                            <small>ธนาคารกสิกรไทย</small><br><small style="color: #d7d7d7">Kasikorn Bank</small>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="md-radio md-radio-inline radiocheck pdbtm" style="padding-bottom:20px">
                                                <input id="9" type="radio" name="g5" rel="">
                                                <label for="9">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{asset('smb-frontend/images/payment/4.jpg')}}">
                                                        </div>
                                                        <div class="col-md-9" style="line-height: 15px!important;">
                                                            <small>ธนาคารกรุงไทย</small><br><small style="color: #d7d7d7">Krungthai Bank</small>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="md-radio md-radio-inline radiocheck pdbtm" style="padding-bottom:20px">
                                                <input id="10" type="radio" name="g5" rel="">
                                                <label for="10">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{asset('smb-frontend/images/payment/5.jpg')}}">
                                                        </div>
                                                        <div class="col-md-9" style="line-height: 15px!important;">
                                                            <small>ธนาคารทหารไทย</small><br><small style="color: #d7d7d7">TMB Bank</small>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p id="tsmall" style="font-weight: 400">โปรดอัพโหลดหลักฐานการชำระเงิน</p>
                                    <div class="row padding-bottom-com">
                                        <div class="col-12 col-md-6">
                                            <div class="personal-text">ชื่อผู้โอน:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="personal-text">จำนวนเงิน:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row padding-bottom-com mb-5">
                                        <div class="col-12 col-md-12">
                                            <div class="personal-text">หลักฐานการโอน:</div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="myInput" aria-describedby="myInput">
                                                <label class="custom-file-label" for="myInput">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="border-bottom: 1px solid #d7d7d7;padding-bottom:20px">
                                    <input id="4" type="radio" name="g4" rel="complete_n">
                                    <label for="4">เพิ่มที่อยู่ใหม่</label>
                                </div>
                                <div class="wrap_radioinsure complete_n padding-bottom-lo">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">ชื่อ* :</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">นามสกุล* :</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="personal-text">ที่อยู่ 1.*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="personal-text">ที่อยู่ 2*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">ตำบล/แขวง*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">เขต/อำเภอ*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">จังหวัด*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">รหัสไปรษณีย์*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">อีเมล*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="personal-text">เบอร์โทร*:</div>
                                            <div class="ma-top-foemember">
                                                <input id="" class="form-shipping">
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
                                                    <input id="" class="form-shipping">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="personal-text">เบอร์โทร*:</div>
                                                <div class="ma-top-foemember">
                                                    <input id="" class="form-shipping">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 20px;margin-bottom:20px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">สมัครรับจดหมายข่าว</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                    <div class="row">
                                        <div class="col-md-8 pad0">
                                            <input id="20" type="radio" name="g4" rel="complete_y" checked="">
                                            <label for="20">Credit Card</label>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('smb-frontend/images/payment/7.jpg')}}" id="pdlpdr" style="padding-left: 48px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                    <div class="row">
                                        <div class="col-md-7 pad0">
                                            <input id="21" type="radio" name="g4" rel="complete_y" checked="">
                                            <label for="21">ผ่อนสินค้า 0%<small> (ยินดีรับบ้ตรทุกธนาคาร ไม่เสียค่าบริการ)</small></label>
                                        </div>
                                        <div class="col-md-5">
                                            <img src="{{asset('smb-frontend/images/payment/8.jpg')}}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="border-bottom: 1px solid #d7d7d7;padding-bottom:20px">
                                    <input id="22" type="radio" name="g4" rel="complete_n">
                                    <label for="22">เก็บเงินปลายทาง </label>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                    <div class="buttom_register"><a id="b" href="my-account-confirm.php">ดำเนินการต่อ</a></div>
                                </div>
                                <div class="md-radio md-radio-inline radiocheck" style="padding-bottom:20px">
                                    <div class="buttom_register"><a id="c" href="my-account-customer.php">ย้อนกลับ</a></div>
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
                                            <p style="font-weight: 600;">ที่อยู่จัดส่ง</p>
                                            <a style="line-height: 1.5">นาย สั่งซื้อ ออนไลน์</a><br>
                                            <a style="line-height: 1.5">ที่อยู่ : เลขที่ 120 หมู่ที่ 3 ถ.แจ้งวัฒนะ </a><br>
                                            <a style="line-height: 1.5">แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพฯ 10210.</a><br>
                                            <a style="line-height: 1.5">เบอร์ติดต่อ : 098 765 4321</a><br>
                                            <a></a>
                                            <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-top: 15px">
                                            </div>
                                            <p style="font-weight: 600;padding-top: 15px;">ข้อมูลจัดส่ง</p>
                                            <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-top: 15px">
                                                <div class="col-6">
                                                    <h6 style="text-align: left;font-size: 13px">ยอดรวม (จำนวน 4วง)</h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>
                                                        <h6>18,000</h6>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-top: 15px">
                                                <div class="col-6">
                                                    <h6 style="text-align: left;font-size: 13px">ราคาสินค้า</h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>
                                                        <h6>4,000 / วง</h6>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row" style="border-bottom: 1px solid #d7d7d7;padding-top: 15px">
                                                <div class="col-6">
                                                    <h6 style="text-align: left;font-size: 13px">ยอดรวมทั้งสิ้น</h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>
                                                        <h6 id="orange">18,000</h6>
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
                                                <div class="buttom_register"><a id="b" href="my-account-confirm.php">ดำเนินการชำระเงิน</a></div>
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
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("rel");
                var targetBox = $("." + inputValue);
                $(".wrap_radioinsure").not(targetBox).hide();
                $(targetBox).show();
            });
        });
        /* show file value after file select */
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("myInput").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    </script>
</body>

</html>