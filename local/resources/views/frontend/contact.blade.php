<!doctype html>
<html lang="th">

<head>
    <title>ติดต่อเรา - SMB Wheel</title>
    @include('frontend.header')
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
                    <h4 class="mt-lg-0 mt-sm-4" style="letter-spacing: 1px;padding-top: 20px;font-size: 20px;font-weight: 500;color: #ff8200;">SMB ทรัพย์สมบูรณ์ยางยนต์</h4>
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
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 22px; color: #ff8200;">ติดต่อเรา</h4>
                    <div class="col-12" style="padding-left: 0px;">
                        <a href="{{$contact->contact_facebook}}"><img src="{{asset('smb-frontend/images/facebook.png')}}" width="30" height="20" title="facebook" alt="facebook" style="margin-right: 5px;"></a>
                        <a href="{{$contact->contact_twitter}}"><img src="{{asset('smb-frontend/images/twitter.png')}}" width="30" height="20" title="line" alt="line" style="margin-right: 5px;"></a>
                        <a href="{{$contact->contact_youtube}}"><img src="{{asset('smb-frontend/images/youtube.png')}}" width="30" height="20" title="youtube" alt="youtube" style="margin-right: 5px;"></a>
                    </div>
                    <br>
                    <br>
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