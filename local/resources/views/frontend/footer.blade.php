@php
    $contact_social = App\contact::find(1);
@endphp
<div class="pt-5 pb-5 footer">
    <div class="container">
        <div class="body">
            <div class="row">
                <div class="col-lg-4 tcn about-company" style="margin-right: 140px;">
                    <a class="navbar-brand2" href="{{url('/')}}" style="padding-bottom: 15px;">
                        <img src="{{asset('smb-frontend/images/smb-logo.png')}}" weight="150px" height="50px" alt="logo">
                    </a>
                    <p-1 class="card-title_b">
                        {{$contact_social->contact_detail}}
                    </p-1>
                </div>
                <div class="col-lg-2 links tcn pt-3 mr-4">
                    <h5 class="mt-lg-0 mt-sm-4 pb-2" style="font-weight: 600; letter-spacing: 1px;" id="text-some">CONTACT US</h5>
                    <h6 id="text-some" class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;">เปิดบริการทุกวัน</h6>
                    <p class="card-title_b pb-1" style="margin-bottom: 0px!important;font-size: 13px!important;">
                        {{$contact_social->contact_opentime}}
                    </p>
                    <h6 id="text-some" class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;">ยกเว้นวันอาทิตย์</h6>
                    <p class="card-title_b pb-1" style="margin-bottom: 0px!important;font-size: 13px!important;">
                        {{$contact_social->contact_sat}}
                    </p>
                    <p class="small text-secondary mb-0" style="font-size: 16px"><a href="tel:{{$contact_social->contact_tell}}" id="text-some" style="font-size: 16px">TEL:</a> {{$contact_social->contact_tell}}</p>
                    <p class="small text-secondary mb-0" style="font-size: 16px"><a href="{{$contact_social->contact_line}}" id="text-some" style="font-size: 16px">LINE:</a> @smbwheel</p>
                </div>
                <div class="col-lg-3 tcn location">
                    <!--
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 20px">เปิดบริการทุกวัน</h4>
                    <p class="card-title_b" style="margin-bottom: 0px!important;font-size: 16px;">
                        ตั้งแต่ 9:00 น. - 19:00 น.
                    </p>
                    <h4 class="mt-lg-0 mt-sm-4" style="font-weight: 400; letter-spacing: 1px;padding-top: 20px;font-size: 20px">ยกเว้นวันอาทิตย์</h4>
                    <p class="card-title_b" style="margin-bottom: 0px!important;font-size: 16px;">
                        ปิดทำการ 17:00 น.
                    </p>
                -->
                    <h5 class="mt-lg-0 mt-sm-4 mt4 labtop" style="font-weight: 600; letter-spacing: 1px;padding-top: 55px;font-size: 17px">FOLLOW US</h5>
                    <div class="col-12" style="padding-left: 0px;">
                        <a href="{{$contact_social->contact_facebook}}"><img src="{{asset('smb-frontend/images/facebook.png')}}" width="30" height="20" title="facebook" alt="facebook" style="margin-right: 5px;"></a>
                        <a href="{{$contact_social->contact_twitter}}"><img src="{{asset('smb-frontend/images/twitter.png')}}" width="30" height="20" title="line" alt="line" style="margin-right: 5px;"></a>
                        <a href="{{$contact_social->contact_youtube}}"><img src="{{asset('smb-frontend/images/youtube.png')}}" width="30" height="20" title="youtube" alt="youtube" style="margin-right: 5px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-5 footer" style="padding-top: 20px;border-top: 1px solid #ff8200;">
    <div class="container">
        <div class="body">
            <div class="row text-center" style="font-family: roboto">
                <div class="col">
                    <p style="margin-bottom: 0px;color: #898989;font-weight: 400;font-size: 17px;background-color: #000;padding-bottom: 30px;"><span class="">Copyright © 2020 SMBwheel All rights reserved.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>