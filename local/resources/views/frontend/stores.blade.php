<!doctype html>
<html lang="en">

<head>
    <title>ที่ตั้งสาขา - SMB Wheel</title>
    @include('frontend.header')
</head>
<style>
    .wrapper-content {
        padding: 30px 0px;
    }

    .content {
        background-color: #ffffff;
    }

    @media screen and (min-width: 1200px) {
        body>.container {
            width: 1240px;
        }
    }

    @media (min-width: 992px) {
        body>.container {
            margin-bottom: 50px;
            width: 1240px;
        }
    }

    body>.container {
        padding: 10px 15px 0;
    }

    @media (min-width: 992px) {
        .wrapper-description-page {
            border-bottom: 0;
            margin-bottom: 0;
        }
    }

    .wrapper-description-page {
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 10px;
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

    img {
        border: 0;
    }

    img {
        vertical-align: middle;
    }

    .wrapper-thumbnail .thumbnail-item .thumbnail-conetnt .title {
        margin-bottom: 5px;
        display: -webkit-box !important;
        -webkit-line-clamp: 1 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    .thumbnail-item .thumbnail-conetnt .title {
        margin: 0;
    }

    .thumbnail-item .thumbnail-conetnt {
        padding: 10px 10px 10px;
        margin-bottom: 15px;
        border-bottom: 1px solid #cccccc;
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
    }

    .thumbnail-item img {
        height: 270px;
        width: 100%;
    }

    @media (min-width: 992px) {
        .view-more {
            color: #4d4d4d;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.8;
        }
    }

    a {
        background-color: transparent;
    }

    .wrapper-store .wrapper-thumbnail .thumbnail-item .thumbnail-conetnt .title a {
        font-weight: bold;
        font-size: 18px;
    }

    .wrapper-thumbnail .thumbnail-item .thumbnail-conetnt .title a {
        color: #000000;
    }

    @media (min-width: 992px) {
        .view-more .icon-more {
            margin-right: 0;
            margin-left: 3px;
            height: 13px;
            background-size: 75%;
        }
    }

    .view-more .icon-more {
        margin-right: 12px;
        width: 9px;
        height: 17px;
        background-size: 9px 17px;
    }

    @media (min-width: 768px) {
        .store-content .grid .col-sm-6 {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    @media (min-width: 992px) {
        .col-md-4 {
            width: 33.33333333%;
        }
    }

    @media (min-width: 992px) {
        .col-md-4 {
            float: left;
        }
    }

    .icon-more,
    li.dl-back:after {
        background-image: url(images/icons/icon-arrow-right.png);
        width: 13px;
        height: 24px;
        background-size: 13px 24px;
    }

    .total {
        font-size: 2.714em;
        font-weight: 900;
        line-height: 14px;
    }

    .total .unit {
        font-size: 22px;
        font-weight: 600;
    }

    @media (min-width: 992px) {
        .total-info {
            padding: 10px 0 10px;
            border: 0;
        }
    }

    .total-info {
        padding: 10px 0px 0px;
        border-bottom: 15px solid #fff;
    }

    .wrapper-store p {
        margin: 0 0 10px;
        font-size: 15px;
    }.txdark{
        color: #4d4d4d!important;
    }
</style>

<body>
    @include('frontend.navbar')
    <div class="banner-page head-about-us-3 ">
        <div class="centered headPage-text">ที่ตั้งสาขา</div>
    </div>

    <div class="container container-full wrapper-store">
        <div class="row">
            <div class="col-md-12">
                <div class="content  wrapper-content store-content">
                    <div class="total-info">
                        <div class="total"><span>{{$count_branch}}</span> <span class="unit">Stores</span></div>
                    </div>
                    <div class="wrapper-description-page">
                        <div class="row">
                            <div class="col-md-7 col-lg-10">
                                <div class="height-item">
                                    <p>พบกับศูนย์รวมแม็กซ์ ยาง และสินค้าอื่น ที่เอสเอ็มบี ทุกสาขาใกล้บ้านคุณ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-thumbnail">
                        <div class="row grid">
                            @foreach ($branch as $item)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail-item">
                                    <a href="{{url('branch_detail', $item->contact_id)}}">
                                        <img class="img-responsive" alt="BIG C RATCHADA" src="{{asset('local/storage/app/contact/'.$item->contact_img.'')}}">
                                    </a>
                                    <div class="thumbnail-conetnt" style="height: 100px;">
                                        <h2 class="title"><a href="{{url('branch_detail', $item->contact_id)}}">{{$item->contact_title}}</a></h2>
                                        <a class="view-more readmore txdark" title="อ่านเพิ่มเติม" href="{{url('branch_detail', $item->contact_id)}}">
                                            <span class="hidden-xs hidden-sm">ดูแผนที่</span> <span class="icon-more"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.footer')
</body>

</html>