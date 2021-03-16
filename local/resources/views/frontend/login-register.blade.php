<!doctype html>
<html lang="en">

<head>
    <title>เข้าสู่ระบบ - SMB Wheel</title>
    @include('frontend.header')
</head>

<body>
    @include('frontend.navbar')
    <div class="container mt-5 my-5">
        <div class="row">
            <div id="smb-contact" class="col-12 col-md-12 col-lg-12">
                <div class="about-us">
                    <h4 id="black-lr" class="color-orange" style="padding-left: 15px;">เข้าสู่ระบบ | สมัครสมาชิก</h4>
                </div>
                <div class="container black-lr">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div id="smb-contact">
                                <div class="text_about_his" id="aboutU" style="padding-right: 20px">
                                    <h4 class="mt-lg-0 mt-sm-4"
                                        style="font-weight: 400;letter-spacing: 1px;font-size: 22px;font-weight: 500;">
                                        เข้าสู่ระบบ</h4>
                                    <form method="POST" action="{{ url('loginUser') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Email">อีเมล :</label>
                                            <input type="text" class="form-control" name="email" id="Email"
                                                placeholder="อีเมล...">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">รหัสผ่าน :</label>
                                            <input type="password" class="form-control" name="password" id="Password"
                                                placeholder="รหัสผ่าน...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="text-white"
                                                class="btn btn-orange btn-lg btn-block">เข้าสู่ระบบ</button>
                                        </div>
                                        <p class="text-center">หรือ</p>
                                        <div class="form-group">
                                            <a href="#" class="btn btn-primary-facebook btn-block"><i
                                                    class="fab fa-facebook-square"></i> เข้าสู่ระบบด้วย Facebook</a>
                                        </div>
                                        <a href="#" style="color: #ff8200;">ลืมรหัสผ่าน</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 color-white">
                            <div id="smb-contact">
                                <div class="text_about_his" id="aboutU" style="padding-left: 20px">
                                    <h4 class="mt-lg-0 mt-sm-4"
                                        style="font-weight: 400;letter-spacing: 1px;font-size: 22px;font-weight: 500;">
                                        สมัครสมาชิก</h4>
                                    <form method="POST" action="{{url('userregister')}}" id="register">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Name&Lastname">ชื่อและนามสกุล :</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="name" class="form-control name"
                                                        id="Name&Lastname" placeholder="ชื่อ...">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="lname" class="form-control name"
                                                        id="Name&Lastname" placeholder="นามสกุล...">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="RegisterEmail">อีเมล :</label>
                                            <input type="email" name="email" class="form-control" id="RegisterEmail"
                                                placeholder="อีเมล...">
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone">หมายเลขโทรศัพท์ :</label>
                                            <input type="text" name="phone" class="form-control phone" id="Phone"
                                                placeholder="หมายเลขโทรศัพท์...">
                                        </div>
                                        <div class="form-group">
                                            <label for="SetPassword">รหัสผ่าน :</label>
                                            <input type="password" name="password" class="form-control" id="SetPassword"
                                                placeholder="รหัสผ่าน...">
                                        </div>
                                        <div class="form-group">
                                            <label for="ConfirmPassword">ยืนยันรหัสผ่าน :</label>
                                            <input type="password" name="Confirmpassword" class="form-control"
                                                id="ConfirmPassword" placeholder="ยืนยันรหัสผ่าน...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="text-white"
                                                class="btn btn-orange btn-lg btn-block"
                                                form="register">สมัครสมาชิก</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.footer')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function alphaOnly(event) {
            var value = String.fromCharCode(event.which);
            var pattern = new RegExp(/[a-zA-Z-ก-๙]/i);
            return pattern.test(value);
        }

        $('.name').bind('keypress', alphaOnly);

        $(".phone").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    </script>
    @if ($message = Session::get('warning'))
    <script type="text/javascript">
        swal.fire({
            icon: 'warning',
            title: 'คำเตือน!',
            text: "{{Session::get('warning')}}",
            timer: 3000,
            type: 'warning'
        }).then((value) => {}).catch(swal.noop);
    </script>
    @endif
</body>

</html>
