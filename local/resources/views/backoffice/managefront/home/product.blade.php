@extends('backoffice.layouts.master')
@section('css')
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-cubes"></i>
            </div>
            <div class="d-inline-block">
                <h5>Home / Product Present</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/homeproduct')}}">Product Present</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>New Product</h5>
        <div class="card-header-right">
        </div>
    </div>
    <div class="card-block p-0">
        <div class="table-responsive">
            <table class="table tbHover">
                <thead>
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Image</th>
                        <th style="text-align: center;">Product Name</th>
                        {{-- <th style="text-align: center;">Brand</th> --}}
                        <th style="text-align: center;">Show</th>
                        <th style="text-align: center;">Management</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productNew as $key => $item)
                    <tr>
                        <td class="text-center text-middle">{{$key+1}}</td>
                        <td class="text-center"><img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" width="100px" alt="prod img" class="img-fluid"></td>
                        <td class="text-middle">{{$item->product_name}}</td>
                        {{-- <td class="text-middle">{{$item->getBrand->brand_name}}</td> --}}
                        <td class="text-center text-middle">{!!$item->getProductShow()!!}</td>
                        <td class="text-center text-middle"><button type="button" class="btn btn-outline-warning" onclick="modaledit({{$item->product_id}})"><i class="fa fa-edit"></i>Edit</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h5>Best Sellers</h5>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal"
                    onclick="addBestSeller()"><i class="fa fa-cubes"></i> Select Best Seller</button>
            </div>
        </div>
    </div>
    <div class="card-block p-0">
        <div class="table-responsive">
            <table class="table tbHover">
                <thead>
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Image</th>
                        <th style="text-align: center;">Product Name</th>
                        {{-- <th style="text-align: center;">Brand</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productBestSeller as $key => $item)
                    <tr>
                        <td class="text-center text-middle">{{$key+1}}</td>
                        <td class="text-center"><img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" width="100px" alt="prod img" class="img-fluid"></td>
                        <td class="text-middle">{{$item->product_name}}</td>
                        {{-- <td class="text-center text-middle">{{$item->getBrand->brand_name}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h5>Product Sale</h5>
            </div>
            <div class="col-sm-6 text-right">
                
            </div>
        </div>
    </div>
    <div class="card-block p-0">
        <div class="table-responsive">
            <table class="table tbHover">
                <thead>
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Image</th>
                        <th style="text-align: center;">Product Name</th>
                        {{-- <th style="text-align: center;">Brand</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($productDiscount as $key => $item)
                        <tr>
                            <td class="text-center text-middle">{{$key+1}}</td>
                            <td class="text-center"><img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" width="100px" alt="prod img" class="img-fluid"></td>
                            <td class="text-middle">{{$item->product_name}}</td>
                            {{-- <td class="text-center text-middle">{{$item->getBrand->brand_name}}</td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="result-modaleditproduct"></div>
<div id="result-modaladdbestseller"></div>
@endsection
@section('js')
@include('flash-message')
<script> 
    $("#example1").DataTable();
    $("#example2").DataTable();
    $("#example3").DataTable();

    function modaledit(id) {
        $.ajax({
            url: '{{ url('backoffice/modal-editNewProduct') }}/' + id,
            type: 'GET',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaleditproduct').html(data);
            $("#modaladdproduct").modal('show');
        });
    }

    function addBestSeller() {
        $.ajax({
            url: '{{ url('backoffice/modal-addBestSeller') }}',
            type: 'GET',
        }).done(function (data) {
            $('#result-modaladdbestseller').html(data);
            $("#modaladdbestseller").modal('show');
        });
    }
</script> 
@endsection
