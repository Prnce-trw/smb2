<!doctype html>
<html lang="en">

<head>
    <title>Read {{$promotion->promotion_header}} - Naradee Store</title>
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
    </style>
</head>

<body>
    @include('frontend.navbar')
    <div class="page-holder bg-cover">
        <div class="container py-5">
            <a href="{{ url()->previous() }}" class="text-black"><u>Back</u></a>
            <h5 class="font-weight-medium mt-5 mb-2">{{$promotion->promotion_header}}</h5>
            <small class="text-muted " style="font-weight: 400;font-size: 16px;">{{date('d/m/Y', strtotime($promotion->promotion_date_start))}}</small>
            <br>
            <div class="text-center">
                <img class="mw-100 my-3" src="{{asset('local/storage/app/promotion/'.$promotion->promotion_banner.'')}}">
            </div>
            <a id="fontreadmoreN">
                {!!$promotion->promotion_content!!}
            </a>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
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