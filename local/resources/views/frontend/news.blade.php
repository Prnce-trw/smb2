<!doctype html>
<html lang="en">

<head>
    <title>ข่าวสารและกิจกรรม - SMB Wheel</title>
    @include('frontend.header')
</head>

<body>
    @include('frontend.navbar')
    <div class="banner-page head-about-us-3 ">
        <div class="centered headPage-text">หน้าหลัก / ข่าวสารและกิจกรรม</div>
    </div>

    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-9" style="padding-left: 0px">
                <div class="about-us">
                    <h4 id="black-news" style="padding-bottom: 15px;">ข่าวสารและกิจกรรม</h4>
                </div>
            </div>
            <div class="col-3" style="padding-right: 0px; margin-bottom: 40px;">
                <div class="about-us">
                    <div class="input-group border">
                        <input type="text" id="news_name" aria-describedby="button-addon3" class="form-control-3 bg-none pt-3" placeholder="ค้นหาข่าวสารและกิจกรรม">
                        <div class="input-group-append border-0">
                            <button id="button-addon3" type="button" onclick="search_news()" class="btn btn-link text-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="row">
                    <div id="resultsearch_news">
                        @foreach ($news as $item)
                        <div class="card col-12 col-md-6">
                            <img class="card-img-top img-fluid" src="{{asset('local/storage/app/news/'.$item->news_imgcover.'')}}" alt="Card image cap" style="height: 270px;">
                            <div class="card-body" id="cardT">
                                <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"></i> {{date('d/m/Y', strtotime($item->news_date))}}</small></p>
                                <h4 class="card-title">{{$item->news_title}}</h4>
                                <p class="card-text">{{ Str::limit($item->news_content, 150) }}</p>
                                <a id="text-white" href="{{url('news_detail', $item->news_id)}}" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    {{$news->links('frontend.paginate')}}
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
    <script>
        function search_news() {
            var name = $('#news_name').val();
            $.ajax({
                url: '{{url('searchnews')}}',
                type: 'GET',
                data: {
                    name: name
                },
            }).done(function (data) {
                $('#resultsearch_news').html(data);
            });
        }
    </script>
</body>

</html>