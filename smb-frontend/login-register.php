<!doctype html>
<html lang="en">

<head>
    <title>เข้าสู่ระบบ - SMB Wheel</title>
    <?php require('header.php'); ?>
</head>

<body>
    <?php require('navbar.php'); ?>
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
                                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400;letter-spacing: 1px;font-size: 22px;font-weight: 500;">เข้าสู่ระบบ</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="Email">อีเมล :</label>
                                            <input type="text" class="form-control" id="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">รหัสผ่าน :</label>
                                            <input type="text" class="form-control" id="Password">
                                        </div>
                                        <div class="form-group">
                                            <a href="cart.php" id="text-white"><button type="button" class="btn btn-orange btn-lg btn-block">เข้าสู่ระบบ</button></a>
                                        </div>
                                        <p class="text-center">หรือ</p>
                                        <div class="form-group">
                                            <a href="#" class="btn btn-primary-facebook btn-block"><i class="fab fa-facebook-square"></i> เข้าสู่ระบบด้วย Facebook</a>
                                        </div>
                                        <a href="#" style="color: #ff8200;">ลืมรหัสผ่าน</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 color-white">
                            <div id="smb-contact">
                                <div class="text_about_his" id="aboutU" style="padding-left: 20px">
                                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400;letter-spacing: 1px;font-size: 22px;font-weight: 500;">สมัครสมาชิก</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="Name&Lastname">ชื่อ และนามสกุล :</label>
                                            <input type="text" class="form-control" id="Name&Lastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="RegisterEmail">อีเมล :</label>
                                            <input type="text" class="form-control" id="RegisterEmail">
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone">หมายเลขโทรศัพท์ :</label>
                                            <input type="text" class="form-control" id="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="SetPassword">ตั้งรหัสผ่าน :</label>
                                            <input type="text" class="form-control" id="SetPassword">
                                        </div>
                                        <div class="form-group">
                                            <label for="ConfirmPassword">ใส่รหัสผ่านอีกรอบ :</label>
                                            <input type="text" class="form-control" id="ConfirmPassword">
                                        </div>
                                        <div class="form-group">
                                            <a href="cart.php" id="text-white"><button type="button" class="btn btn-orange btn-lg btn-block">สมัครสมาชิก</button></a>
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
    <?php require('footer.php'); ?>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v6.0"></script>
</body>

</html>