<!doctype html>
<html lang="en">

<head>
    <title>ผลงาน - SMB Wheel</title>
    @include('frontend.header')
    <style>
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

        .modal-header {
            border-bottom: 1px solid #fff;
        }

        .modal-footer {
            border-top: 1px solid #fff;
        }

        .btn-warning {
            color: #fff;
            background-color: #ff8200;
            border-color: #ff8200;
        }

        /*Update 28 may 2020*/
        .carousel-control-next,
        .carousel-control-prev {
            width: 10%;
        }

        .modal-header {
            padding: 0rem 0rem;
        }

        .modal-header .close {
            margin: -1rem 0rem -1rem auto;
        }
    </style>
</head>

<body>
    @include('frontend.navbar')
    <div class="banner-page head-portfolio">
        <div class="centered headPage-text">หน้าหลัก / ผลงาน</div>
    </div>
    <div class="container mt-5 my-5 pr-2 pl-2">
        <div class="row">
            <div class="col-lg-5 col-xs-12" style="padding-left: 0px">
                <form action="{{url('searchaward')}}" method="GET" id="search">
                <div class="about-us">
                    <div class="input-group border">
                        <select name="carbrand" id="" aria-describedby="button-addon3" class="form-control">
                            <option selected disabled>ค้นหาจากแบรนด์รถ</option>
                            @foreach ($carbrand as $item)
                                <option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="search" name=""  placeholder="ค้นหาจากแบรนด์รถ"> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xs-12" style="padding-right: 0px; margin-bottom: 40px;">
                <div class="about-us">
                    <div class="input-group border">
                        <select name="productbrand" id="" aria-describedby="button-addon3" class="form-control">
                            <option selected disabled>ค้นหาจากแบรนด์สินค้า</option>
                            @foreach ($brand as $item)
                                <option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="search" name="productbrand" aria-describedby="button-addon3" class="form-control bg-none" placeholder="ค้นหาจากแบรนด์สินค้า"> --}}
                    </div>
                </div>
            </form>
            </div>
            <div class="col-lg-2 col-xs-12" style="padding-right: 0px;padding-left: 27px;margin-bottom: 40px;">
                <button type="submit" class="btn btn-border-0 btn-orange" form="search">ค้นหา</button>
            </div>
            <div class="row mb-5">
                @foreach ($award as $item)
                <div class="col-lg-6 col-xs-12 mb25">
                    <img class="card-img-top img-fluid" src="{{asset('local/storage/app/award/'.$item->getAwardImgs[0]->award_img_name.'')}}" alt="Card image car">
                    <div class="text-block">
                        <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                            <div class="color-orange-1">
                                <div class="about-us">
                                    <a id="orange14" style="padding-left: 15px">{{ $item->getCarBrand->car_brand_name }}</a><a id="orange15"> {{$item->getCarModel->car_model_name}}</a>
                                </div>
                                <div class="card-body">
                                    <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                        <h6 class="card-title_a">{{ $item->getProduct->product_name }}</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <a id="orange16" style="font-size: 16px;">{{$item->getAwardImgs->count()}} Photo</a>
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <a href="#" id="orange" data-toggle="modal" data-target="#B-1" alt="B-1" class="pull-right" style="font-size: 14px;">VIEW MORE</a>
                                                <!-- The modal -->
                                                <div class="modal fade" id="B-1" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" id="orange" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <h1>X</h1>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom: 3rem;">
                                                                <div id="modal1" class="carousel slide" data-ride="carousel" interval="false">
                                                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                                                        @foreach ($item->getAwardImgs as $key => $itemImg)
                                                                        <div class="carousel-item {{ $key == 0 ? "active" : "" }}">
                                                                            <img class="img-fluid mx-auto d-block" src="{{asset('local/storage/app/award/'.$itemImg->award_img_name.'')}}" alt="slide 1">
                                                                            <div class="text-inside-modal">
                                                                                <div id="smb-portfolio" class="col-12 col-md-12 col-lg-12">
                                                                                    <div class="color-orange-1">
                                                                                        {{-- <div class="about-us">
                                                                                            <a style="padding-left: 15px">TOYOTA</a><a> VIOS</a>
                                                                                        </div> --}}
                                                                                        <div class="card-body">
                                                                                            <div class="text_about_his" id="aboutUS" style="padding-left: 15px;">
                                                                                                <h6 id="orange" class="card-title_inside_modal">{{ $itemImg->getProductBrand != null ? $itemImg->getProductBrand->brand_name : "" }} {{ $itemImg->getProduct != null ? $itemImg->getProduct->product_name : "" }} </h6>
                                                                                                {{-- <h6 class="card-title_inside_modal">Lorem Ipsum is not simply random text.</h6>
                                                                                                <h6 class="card-title_inside_modal">The standard chunk of Lorem Ipsum used since the 1500s</h6> --}}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                               
                                                                <a class="carousel-control-prev" href="#modal1" role="button" data-slide="prev">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next text-faded" href="#modal1" role="button" data-slide="next">

                                                                    <i id="orange" style="text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>

                                                                    <span class="sr-only">Next</span>
                                                                </a>
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
                @endforeach
                <div class="w-100 d-none d-sm-block d-md-none">
                    <!-- wrap every 2 on sm-->
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$award->links('frontend.paginate')}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script>
        $('.carousel').carousel({
            interval: false,
        });
    </script>
    @include('frontend.footer')
</body>

</html>