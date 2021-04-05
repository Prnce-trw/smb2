<!doctype html>
<html lang="th">

<head>
    <title>ติดต่อเรา - SMB Wheel</title>
    @include('frontend.header')
    <style>
        .submit{
            background: #ff8200;
            color: #252525;
        }   
    </style>
</head>

<body>
    @include('frontend.navbar')
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab"><iframe src="{{$contact->contact_linkmap}}" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            <div class="tab-pane fade" id="pills-graphic" role="tabpanel" aria-labelledby="pills-graphic-tab"><a><img src="images/" class="img-fluid mw-100 w-100"></a></div>
        </div>
    </div>
    <div class="container mt-5 my-5">
        <div class="row">
            <div id="smb-contact" class="col-12 col-md-7 col-lg-7">
                <div class="about-us">
                    <h4 id="black" style="padding-left: 15px;">ติดต่อเรา</h4>
                </div>
                <div class="text_about_his" id="aboutU" style="padding-left: 15px;">
                    <h4 class="mt-lg-0 mt-sm-4" style="letter-spacing: 1px;padding-top: 20px;font-size: 20px;font-weight: 500;color: #ff8200;">{{$contact->contact_title}}</h4>
                    <h6>
                        {{$contact->contact_detail}}
                    </h6>
                    <br>
                    <br>
                </div>
            </div>
            <div id="smb-contact" class="col-12 col-md-5 col-lg-5">
                <div class="about-us">
                    <h4 id="orange" style="padding-left: 15px;">‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎</h4>
                </div>
                <div class="text_about_his" id="aboutU" style="padding-left: 15px;">
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 22px; color: #ff8200;">เปิดบริการทุกวัน</h4>
                    <a style="font-weight: 500">
                        {{$contact->contact_opentime}}
                    </a>
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 22px; color: #ff8200;">ยกเว้นวันอาทิตย์</h4>
                    <a style="font-weight: 500">
                        {{$contact->contact_sat}}
                    </a>
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 22px; color: #ff8200;">ติดตามเรา</h4>
                    <div class="col-12" style="padding-left: 0px;">
                        <a href="{{$contact->contact_facebook}}"><img src="{{asset('smb-frontend/images/facebook.png')}}" width="30" height="20" title="facebook" alt="facebook" style="margin-right: 5px;"></a>
                        <a href="{{$contact->contact_twitter}}"><img src="{{asset('smb-frontend/images/twitter.png')}}" width="30" height="20" title="line" alt="line" style="margin-right: 5px;"></a>
                        <a href="{{$contact->contact_youtube}}"><img src="{{asset('smb-frontend/images/youtube.png')}}" width="30" height="20" title="youtube" alt="youtube" style="margin-right: 5px;"></a>
                        <a href="{{$contact->contact_ig}}"><img src="{{asset('smb-frontend/images/ig.png')}}" width="30" height="20" title="instagram" alt="instagram" style="margin-right: 5px;"></a>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info py-5">
                        <h4 class="text-center">ติดต่อเรา</h4>
                        <form action="" method="GET" id="email_form">
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label>นามสกุล</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label>อีเมล</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label>เบอร์ติดต่อ</label>
                                    <input type="phone" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-12">
                                    <label>เรื่องที่ต้องการติดต่อ</label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>ข้อความ</label>
                                    <textarea class="form-control" id="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="form-group col-12 text-center">
                                    <button type="submit" class="btn submit">ส่งข้อความ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="head-about-us-2 ">
        <div id="smb-center-2" class="col-12 col-md-12 col-lg-12">
            <div class="row">
                @foreach ($branch as $item)
                <div class="col-lg-4 about-company">
                    <h4 id="contact-2" class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 20px">{{$item->contact_title}}</h4>
                    <p id="white" class="card-title_b" style="margin-bottom: 0px!important;font-size: 16px;">
                        Hotline : {{$item->contact_tell}}
                    </p>
                    <a href="{{url('branch_detail', $item->contact_id)}}" id="orange" class="card-title_b" style="margin-bottom: 0px!important;font-size: 16px;">
                        ดูแผนที่
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    @include('frontend.footer')
</body>

</html>