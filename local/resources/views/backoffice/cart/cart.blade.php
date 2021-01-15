@extends('backoffice.layouts.master')
@section('css')
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="d-inline-block">
                <h5>Cart</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Backend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Cart</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/carcart')}}">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @foreach ($product as $key => $item)
    <div class="col-sm-4">
        <div class="card">
            <div class="card-block text-center">
                <div style="height: 20px;"></div>
                <div class="row">
                    <div class="col-6">
                        <p>Product Id:</p>
                        <p>Product Name:</p>
                        <p>Product Brand</p>
                    </div>
                    <div class="col-6">
                        <p>{{$item->product_id}}</p>
                        <p>{{$item->product_name}}</p>
                        <p>{{$item->getBrand->brand_name}}<p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary addporducttocart" value="{{$item->product_id}}" data-price="{{ $item->product_price_discount != null ? $item->product_price_discount : $item->product_price }}" data-name="{{$item->product_name}}">Add to Cart</button>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" name="number" class="form-control" min="1">
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('js')
@include('flash-message')
<script>
    $(document).on('click', '.addporducttocart', function () {
        var productId = $(this).val();
        var productPrice = $(this).attr('data-price');
        var productName = $(this).attr('data-name');
        var productNumber = $(".number").val();
        alert(productId+ '\n' + productPrice + '\n' + productName+ '\n' + productNumber);
        // sentProduct()
    })

    function sentProduct(productId, productPrice, productName) {
        $.ajax({
            url: '{{url('addporducttocart')}}',
            type: 'GET',
            data: {
                productId: productId,
                productPrice: productPrice,
                productName: productName,
            },
        }).done(function (data) {
            // body...
        });
    }
</script>
@endsection
