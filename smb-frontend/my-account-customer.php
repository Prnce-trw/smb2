<!doctype html>
<html lang="en">

<head>
    <title>กรอกข้อมูลลูกค้า - SMB Wheel</title>
    <?php require('header.php'); ?>
</head>

<body>
    <?php require('navbar.php'); ?>
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
                                <div class="md-radio md-radio-inline radiocheck" style="border-bottom: 1px solid #d7d7d7;padding-bottom:20px">
                                    <input id="3" type="radio" name="g4" rel="complete_y" checked="">
                                    <label for="3">ที่อยู่สำหรับจัดส่ง</label>
                                </div>
                                <div class="wrap_radioinsure complete_y" style="display: block;">
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
                                            <div class="personal-text">Sudarat</div>
                                            <div class="personal-text">Yodjan</div>
                                            <div class="personal-text">099 0516 006</div>
                                            <div class="personal-text">sudarat@gmail.com</div>
                                            <div class="personal-text">95 Moo 13</div>
                                            <div class="personal-text">Tambon Klongkum</div>
                                            <div class="personal-text">Amphur Bungkum</div>
                                            <div class="personal-text">Bangkok</div>
                                            <div class="personal-text">90150</div>
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
                                            <div class="form-group col-md-12">
                                                <div class="buttom_register"><a id="b" href="#">ดำเนินการต่อ</a></div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="buttom_register"><a id="c" href="#">ย้อนกลับ</a></div>
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
                                                <div class="col-6">
                                                    <h6>เลือกการจัดส่ง</h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>จัดส่งฟรี</h6>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mt-5">
                                                <div class="buttom_register"><a id="b" href="my-account-payment.php">ดำเนินการชำระเงิน</a></div>
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
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("rel");
                var targetBox = $("." + inputValue);
                $(".wrap_radioinsure").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
</body>

</html>