<!doctype html>
<html lang="en">

<head>
    <title>โปรโมชั่น - SMB Wheel</title>
    @include('frontend.header')
</head>

<body>
    @include('frontend.navbar')
    <div class="banner-page head-about-us-4 ">
        <div class="centered headPage-text">หน้าหลัก / โปรโมชั่น</div>
    </div>
    <div class="container-fluid pt-5 py-5" style="background-color: #ebebeb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us">
                        <h4 id="black-lr" class="color-orange" style="padding-left: 15px;">โปรโมชั่นล่าสุด</h4>
                    </div>
                    <div class="about-us">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-12 col-md-5 col-lg-5" style="padding-right: 0px">
                                <div class="img_about_his">
                                    <img src="{{asset('local/storage/app/promotion/'.$firstPromotion->promotion_img.'')}}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-7">
                                <div class="color-dark">
                                    <div class="about-us">
                                        <h4 id="dark" style="padding-left: 15px;padding-top: 40px;">{{$firstPromotion->promotion_header}}</h4>
                                    </div>
                                    <div class="text_about_his" id="aboutU" style="padding-left: 15px;">
                                        {!! Str::limit($firstPromotion->promotion_content, 500) !!}
                                    </div>
                                </div>
                                <div class="text_about_his" id="aboutU" style="padding-left: 15px; padding-top: 15px;">
                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-4">
                                            <img class="img-fluid" src="{{asset('smb-frontend/images/fb.png')}}" alt=""><a href="{{$contact->contact_facebook}}" style="color: #000"> smbwheel</a>
                                        </div>
                                        <div class="col-6">
                                            <img class="img-fluid" src="{{asset('smb-frontend/images/line.png')}}" alt=""><a href="{{$contact->contact_line}}" style="color: #000"> @smbwheel (อย่าลืมใส่ @)</a>
                                        </div>
                                    </div>
                                    <a id="text-white" href="{{url('promotion_detail',$firstPromotion->promotion_id)}}"class="btn btn-black rounded-0" style="padding: 5px 0.75rem;">อ่านต่อ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="card-deck">
                @foreach ($promotion as $item)
                <div class="card mb-4 promotion-fix">
                    <img class="card-img-top img-fluid" src="{{asset('local/storage/app/promotion/'.$item->promotion_img.'')}}" alt="Card image cap">
                    <div class="card-body" id="cardT" style="margin: 10px;">
                        <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted-black" style="font-weight: 400;font-size: 14px;"><i class="far fa-calendar-alt"></i> {{date('d/m/Y', strtotime($item->promotion_date_start))}}</small></p>
                        <h4 class="card-title">{{$item->promotion_header}}</h4>
                        <p class="card-text">{!! Str::limit($item->promotion_content, 150) !!}</p>
                        <a id="text-white" href="{{url('promotion_detail', $item->promotion_id)}}"><button type="button" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;">อ่านต่อ</button></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    {{$promotion->links('frontend.paginate')}}
                    {{-- <ul class="pagination justify-content-center">
                        <li class="page-item page-np"><a href="#" style="color: black;">Prev</a></li>
                        <li class="page-item page-np active"><a href="#" style="color: #ff8200;">1</a></li>
                        <li class="page-item page-np"><a href="#" style="color: black;">2</a></li>
                        <li class="page-item page-np"><a href="#" style="color: #ff8200;">Next</a></li>
                    </ul> --}}
                </nav>
            </div>
        </div>
    </div> 
    @include('frontend.footer')
</body>

</html>