@extends('backoffice.layouts.master')
@section('css')
<!-- lightbox Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/lightbox2/css/lightbox.min.css')}}">
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-trophy"></i>
            </div>
            <div class="d-inline-block">
                <h5>Add Award</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Award</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/award')}}">Add Award</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<form action="{{url('backoffice/award',$award->award_id)}}" id="award_update" method="POST" >
    @csrf
    {{method_field('PUT')}}
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-block">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Car Brand</label>
            <div class="col-sm-5">
                <select name="carbrand" class="form-control filtercar_award" data-count_append="1">
                    <option selected disabled>Select Car Brand...</option>
                    @foreach ($carbrand as $item)
                    <option {{ $award->award_cardbrand == $item->car_brand_id ? "selected" : "" }} value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <select name="carmodel" id="carmodel" class="form-control">
                    <option value="{{ $award->getCarModel->car_model_id }}">{{ $award->getCarModel->car_model_name }}</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Product Brand</label>
            <div class="col-sm-5">
                <select name="productbrand_main" class="form-control filterproduct_brand productbrand">
                    <option selected disabled>Select Product Brand...</option>
                    @foreach ($brand as $item)
                    <option {{ $award->award_productbrand == $item->brand_id ? "selected" : "" }} data-number="0" value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <select name="product_main" id="product_0" class="form-control">
                    <option value="{{ $award->getProduct->product_id }}">{{ $award->getProduct->product_name }}</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Gallery</h5>
    </div>
    <div class="card-block">
        <div class="row">
            @foreach ($award->getAwardImgs as $key => $item)
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <div class="thumb">
                        <a href="{{asset('local/storage/app/award/'.$item->award_img_name.'')}}" data-lightbox="1" data-title="">
                            <img src="{{asset('local/storage/app/award/'.$item->award_img_name.'')}}" alt="" class="img-fluid img-thumbnail">
                        </a>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="file" name="img[{{$item->award_img_id}}]" class="imgcov" id="img" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                        <button type="button" class="btn btn-warning" onclick="document.getElementById('img').click();">Edit Image</button>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Set to Cover</label>
                    <div class="col-sm-5">
                        <div class="form-radio">
                            <div class="radio radio-inline">
                                <label>
                                    <input type="radio" name="cover[{{$item->award_img_id}}]" value="1">
                                    <i class="helper"></i> Cover
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Product Brand</label>
                    <div class="col-sm-5">
                        <select name="productbrand[{{$item->award_img_id}}]" class="form-control filterproduct_brand productbrand">
                            <option selected disabled>Select Product Brand...</option>
                            @foreach ($brand as $number => $itembrand)
                            <option data-number="{{$key+1}}" {{ $item->award_productbrand_id == $itembrand->brand_id ? "selected" : "" }} value="{{$itembrand->brand_id}}">{{$itembrand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select name="product[{{$item->award_img_id}}]" id="product_{{$key+1}}" class="form-control">
                            @if ($item->award_product_id != null)
                            <option selected>{{$item->getProduct->product_name}}</option>
                            @else
                            <option disabled>Select Product...</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div id="resultappend_{{$item->award_img_id}}"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-primary" onclick="addproductbrand({{$item->award_img_id}})">Add Product Brand</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary" form="award_update">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('js')
@include('flash-message')
<script src="{{asset('files/bower_components/lightbox2/js/lightbox.min.js')}}"></script>
<!-- Switch component js -->
<script src="{{asset('/files/bower_components/switchery/js/switchery.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/advance-elements/swithces.js')}}"></script>
<script>
    $('.js-switch').bootstrapSwitch();

    $(document).on('change', '.filtercar_award',function () {
        var carid = $(this).val();
        filtercar_award(carid);
    });

    function filtercar_award(carid) { 
        $.ajax({
            url: '{{ url('filtercar_award') }}',
            type: 'GET',
            data: {carid: carid},
        }).done(function (data) {
            $('#carmodel').html(data.html_carmodel);
        });
    }

    var no = $('.filterproduct_brand').attr('data-no');
    $(document).on('change', '.filterproduct_brand', function () {
        var number = $('option:selected', this).attr('data-number');
        var productBrandid = $('option:selected', this).val();
        filterproduct_brand(productBrandid, number);
    });

    function filterproduct_brand(productBrandid, number) { 
        $.ajax({
            url: '{{ url('filterproduct_brand') }}',
            type: 'GET',
            data: {productBrandid: productBrandid},
        }).done(function (data) {
            if (data != null) {
                $('#product_'+number).html(data.html_product);
            } else {
                $('#product_'+number).html();
            }
        });
    }

    var no = 1;
    function addproductbrand(id) {
        if (id != null) {
            $('#resultappend_'+id).append('<div id="#resultappendbrand_'+id+'_'+no+'">'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">Product Brand</label>'+
                        '<div class="col-sm-5">'+
                            '<select name="productbrand[{{$item->award_img_id}}]" class="form-control filterproduct_brand productbrand">'+
                                '<option selected disabled>Select Product Brand...</option>'+
                                '@foreach ($brand as $number => $itembrand)'+
                                '<option data-number="{{$key+1}}" {{ $item->award_productbrand_id == $itembrand->brand_id ? "selected" : "" }} value="{{$itembrand->brand_id}}">{{$itembrand->brand_name}}</option>'+
                                '@endforeach'+
                            '</select>'+
                        '</div>'+
                        '<div class="col-sm-5">'+
                            '<select name="product[{{$item->award_img_id}}]" id="product_{{$key+1}}" class="form-control">'+
                                '@if ($item->award_product_id != null)'+
                                '<option selected>{{$item->getProduct->product_name}}</option>'+
                                '@else'+
                                '<option disabled>Select Product...</option>'+
                                '@endif'+
                            '</select>'+
                        '</div>'+
                    '</div>'+
                '</div>');
        }
    }
</script>
@endsection
