@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="icofont icofont-home"></i>
            </div>
            <div class="d-inline-block">
                <h5>SMB ทรัพย์สมบูรณ์ยางยนต์</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="{{url('backoffice/dashboard')}}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card bg-1 order-card">
            <div class="card-block">
                <h6>All Product</h6>
                <h2 class="text-right"><i class="fa fa-cubes f-left"></i><span>{{$productCount}}</span></h2>
                <br>
                <p class="m-b-0">Manage Product <a href="{{url('backoffice/indexproducttype')}}" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-2 order-card">
            <div class="card-block">
                <h6>Wheels</h6>
                <h2 class="text-right"><i class="fa fa-dot-circle-o f-left"></i><span>{{$wheelCount}}</span></h2>
                <br>
                <p class="m-b-0">Manage Wheels <a href="{{url('backoffice/brand/1')}}" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-3 order-card">
            <div class="card-block">
                <h6>Tires</h6>
                <h2 class="text-right"><i class="fa fa-opera f-left"></i><span>{{$tireCount}}</span></h2>
                <br>
                <p class="m-b-0">Manage Tires <a href="{{url('backoffice/brand/2')}}" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-4 order-card">
            <div class="card-block">
                <h6>All Orders</h6>
                <h2 class="text-right"><i class="fa fa-shopping-cart f-left"></i><span>123</span></h2>
                <br>
                <p class="m-b-0">Manage Orders <a href="" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Recent Orders</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-times close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block p-0">
                <div class="table-responsive">
                    <table class="table tbHover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Product Code</th>
                                <th>Customer</th>
                                <th>Purchased On</th>
                                <th>Status</th>
                                <th>Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><img src="../files/assets/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
                            <td>PNG002413</td>
                            <td>Jane Elliott</td>
                            <td>06-01-2017</td>
                            <td><span class="label label-primary">Shipping</span></td>
                            <td>#7234421</td>
                        </tr>
                        <tr>
                            <td><img src="../files/assets/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
                            <td>PNG002344</td>
                            <td>John Deo</td>
                            <td>05-01-2017</td>
                            <td><span class="label label-danger">Failed</span></td>
                            <td>#7234486</td>
                        </tr>
                        <tr>
                            <td><img src="../files/assets/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
                            <td>PNG002653</td>
                            <td>Eugine Turner</td>
                            <td>04-01-2017</td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td>#7234417</td>
                        </tr>
                        <tr>
                            <td><img src="../files/assets/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                            <td>PNG002156</td>
                            <td>Jacqueline Howell</td>
                            <td>03-01-2017</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>#7234454</td>
                        </tr>
                        <tr>
                            <td><img src="../files/assets/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
                            <td>PNG002344</td>
                            <td>John Deo</td>
                            <td>05-01-2017</td>
                            <td><span class="label label-primary">Shipping</span></td>
                            <td>#7234489</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card statustic-card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>{{$contact->contact_title}}</h5>
                            </div>
                            <div class="col-6 text-right">
                                <strong id="openclose"></strong>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-block">
                        <p class="m-b-0">{{$contact->contact_detail}}</p> 
                    </div>
                    <div class="card-footer text-right">
                        <img src="{{asset('/public/background/2730921.jpg')}}" width="70%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    // clock
    function updateClock() {
        var currentTime = new Date();
        // Operating System Clock Hours for 12h clock
        // console.log(currentTime);
        var currentHoursAP = currentTime.getHours();
        // Operating System Clock Hours for 24h clock
        var currentHours = currentTime.getHours();
        // Operating System Clock Minutes
        var currentMinutes = currentTime.getMinutes();
        // Operating System Clock Seconds
        var currentSeconds = currentTime.getSeconds();
        // Adding 0 if Minutes & Seconds is More or Less than 10
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
        // Picking "AM" or "PM" 12h clock if time is more or less than 12
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
        // transform clock to 12h version if needed
        currentHoursAP = (currentHours > 12) ? currentHours - 12 : currentHours;
        // transform clock to 12h version after mid night
        currentHoursAP = (currentHoursAP == 0) ? 12 : currentHoursAP;
        // display first 24h clock and after line break 12h version
        var currentTimeString = currentHours + " : " + currentMinutes + " : " + currentSeconds;
        // print clock js in div #clock.
        $("#clock").html(currentTimeString);
    }
    $(document).ready(function () {
        setInterval(updateClock, 0);
    });

    var today = new Date().getHours();
    if (today >= 9.00 && today <= 19.00) {
        document.getElementById('openclose').innerHTML = "<span style='color: green;'>OPEN<span>";
    } else {
        document.getElementById('openclose').innerHTML = "<span style='color: red;'>CLOSE<span>";
    }
</script>
@endsection