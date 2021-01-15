<!doctype html>
<html lang="th">

<head>
    <title>สาขา - SMB Wheel</title>
    <style>
        .carousel-indicators li {
            width: 80px !important;
            height: 25px !important;
            margin-left: 15px !important;
            margin-top: 100px !important;
        }

        .text-black {
            color: #000 !important;
        }

        .wrappercontent-graylight {
            background-color: rgba(255, 255, 255, 0.75);
        }

        .wrapper-content-gray .heading-page {
            margin-top: 0;
        }

        .wrapper-content {
            padding: 25px;
        }

        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .panel-heading-map {
            padding: 0;
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .wrapper-map {
            position: relative;
            margin-top: 15px;
        }

        .heading-page {
            font-weight: 600;
            font-size: 25px;
            color: #000000;
        }

        .wrapper-store p {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .panel-heading-map .panel-title,
        .panel-heading-map .panel-link {
            font-weight: 600;
            font-size: 18px;
            line-height: 2.2 !important;
        }

        .panel-heading-map .panel-link img {
            width: 30px;
            height: auto;
            margin-right: 5px;
        }

        .panel-heading-map:after {
            content: '';
            display: block;
            clear: both;
        }

        .panel-heading-map .panel-link img {
            width: 30px;
            height: auto;
            margin-right: 5px;
        }

        .wrapper-store .zoom-map {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        a:hover,
        a:focus {
            text-decoration: none;
            color: #000000;
            cursor: pointer;
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 0;
            outline: 0;
        }

        body {
            background-color: #f9f9f9 !important;
        }

        #Contact1.nav-pills .nav-item .nav-link.active,
        #Contact2.nav-pills .nav-item .nav-link.active {
            color: #000;
            font-weight: 500;
            background-color: transparent;
        }

        @media (max-width: 768px) {
            body>.container {
                padding: 0;
                width: 100%;
                padding-right: 5px;
                padding-left: 5px;
                overflow-x: hidden;
            }

            .wrapper-content {
                padding: 5px;
            }

            .container {
                width: 100%;
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
        }
    </style>
    @include('frontend.header')
</head>

<body>
    @include('frontend.navbar')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <a href="{{ url()->previous() }}" class="text-black"><u>กลับ</u></a>
            </div>
        </div>
        <div class="container my-4 pl-0 pr-0">
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    @foreach ($branch->getContactBanners as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? "active" : "" }}">
                        <img class="d-block w-100" src="{{asset('local/storage/app/contact/'.$item->cb_name.'')}}" alt="First slide">
                    </div>
                    @endforeach
                </div>
                <!--/.Slides-->
                <!--Controls
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                Controls-->
                <ol class="carousel-indicators">
                    @foreach ($branch->getContactBanners as $key => $item)
                    <li data-target="#carousel-thumb" data-slide-to="{{$key}}" class="{{ $key === 0 ? "active" : "" }}"> <img class="d-block w-100" src="{{asset('local/storage/app/contact/'.$item->cb_name.'')}}" class="img-fluid"></li>
                    @endforeach
                </ol>
            </div>
            <!--/.Carousel Wrapper-->

        </div>
        <div class="container container-full wrapper-store store-1 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="wrapper-content-gray">
                        <h1 class="heading-page hidden-xs hidden-sm">{{$branch->contact_title}}</h1>
                        <div>
                            <h4 id="text-some">การเดินทาง</h4>
                            {{$branch->contact_address}}
                            <h4 id="text-some">ติดต่อเรา</h4>
                            <p>Tel: {{$branch->contact_tell}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="nav nav-pills mb-3 justify-content-end align-items-center" id="Contact2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-graphic2-tab" data-toggle="pill" href="#pills-graphic2" role="tab" aria-controls="pills-graphic2" aria-selected="false" style="color: #000!important;">Ghapic Map </a>
                        </li>
                        |
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-google2-tab" data-toggle="pill" href="#pills-google2" role="tab" aria-controls="pills-google2" aria-selected="true" style="color: #000!important;"><img alt="" src="{{asset('smb-frontend/images/icon-map.png')}}"> Google Map</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-google2" role="tabpanel" aria-labelledby="pills-google2-tab"><iframe src="{{$branch->contact_linkmap}}" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                        <div class="tab-pane fade" id="pills-graphic2" role="tabpanel" aria-labelledby="pills-graphic2-tab"><a><img src="{{asset('local/storage/app/contact/'.$branch->contact_imgmap.'')}}" class="img-fluid mw-100 w-100"></a></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @include('frontend.footer')

</body>

</html>