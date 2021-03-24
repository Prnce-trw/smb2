<!doctype html>
<html lang="en">

<head>
    <title>SMB</title>
    @include('frontend.header')
    <style>
        .text-black {
            color: #000 !important;
        }

        font-weight-medium {
            font-weight: 500;
        }

        #fontreadmoreN {
            font-size: 16px;
        }

        #text-lage {
            color: #ff8201;
            font-weight: 400;
            font-size: 25px !important;
        }

        .text-gray {
            color: #898989;
        }

        #text-span {
            font-size: 16px;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: none;
            border-radius: .25rem;
        }

        #cardT .card-title {
            margin-bottom: .5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #ff8021;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 0.93rem !important;
            font-weight: 500 !important;
        }

        .btn-black {
            display: inline-block;
            color: #000 !important;
            background-color: #ff8201;
            border: 2px solid transparent !important;
            padding: -0.625rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
        }

        .btn {
            font-weight: 400;
            color: #212529;
            text-align: center;
            border: 1px solid transparent;
            font-size: 1rem;
            line-height: 1;
            border-color: none !important;
            border-radius: none !important;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .card-body {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
            padding-top: 1.25rem !important;
            padding-bottom: 1.25rem !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            border: 1px solid #ebebeb;
            border-bottom-left-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            box-shadow: 1px 4px 5px #e6e6e6;
        }

        #text-black {
            color: #000 !important;
        }
    </style>
</head>

<body>
    @include('frontend.navbar')
    <div style="background: url(images/bg-per-1.png)" class="page-holder bg-cover">
        <div class="container py-5">
            <h5 class="font-weight-medium mt-5" id="text-lage">{{$blog->blog_title}}</h5>
            <small class="text-gray" style="font-weight: 400;font-size: 16px;">โพส :{{date('d-m-Y', strtotime($blog->blog_date))}}</small>
            <br>
            <div class="text-center">
                <img class="mw-100 my-3" src="{{asset('local/storage/app/blog/'.$blog->blog_banner.'')}}">
            </div>
            <a id="fontreadmoreN">
                <span id="text-span" style="color: #252525">{!!$blog->blog_content!!}</span>
                <br>
            </a>
        </div>
        <div class="container mb-5">
            <a id="text-white" href="{{url('blog')}}"><button type="button" class="btn btn-black rounded-0" style="padding: 10px 1.75rem!important;color: #fff!important">ย้อนกลับ</button></a>
        </div>
        <div class="container-fluid mt-5" style="background-color: #ebebeb">
            <div class="container pt-5 pb-5 pr-0 pl-0">
                <div class="card-deck mb-5 mt-5">
                    @foreach ($recommended as $item)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('local/storage/app/blog/'.$item->blog_banner.'')}}" alt="Card image cap">
                            <div class="card-body" id="cardT">
                                <h4 class="card-title">{{$item->blog_title}}</h4>
                                <p class="card-text">{{ Str::limit($item->blog_content, 100) }}</p>
                                <a href="{{url('blog_detail', $item->blog_id)}}" id="text-black"><button type="button" class="btn btn-black btn-block rounded-0" style="color: #fff;">อ่านเพิ่ม</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="w-100 d-none d-sm-block d-md-none"></div>
                </div>
            </div>
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
        @include('frontend.footer')
</body>

</html>