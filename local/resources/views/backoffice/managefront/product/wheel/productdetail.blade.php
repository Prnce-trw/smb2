@extends('backoffice.layouts.master')
@section('css')
<style>
    .swal2-container {
        z-index: 99999999999 !important;
    }
</style>
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-cubes"></i>
            </div>
            <div class="d-inline-block">
                <h5>Wheels</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Product</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url('backoffice/indexproducttype') }}">Product Type </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url('backoffice/product') }}">Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Product Detail</h4>
    </div>
    <div class="card-block">
        <form action="{{ url('backoffice/product', $product->product_id) }}" method="POST" enctype="multipart/form-data" id="addproduct_wheel" onsubmit="return addproduct_wheel()">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{$product->product_type_id}}" name="product_type">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image Cover</label>
                <div class="col-sm-4">
                    <span id="previewcov">
                        <img src="{{asset('local/storage/app/product/'.$product->product_imgcov.'')}}" width="270">
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <input type="file" name="productimgcov[]" class="imgcov" id="editimgcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editimgcov').click();"><i class="fa fa-plus"></i> Edit Cover</button>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Model Name <span style="color: #FF5370;">*</span></label>
                <div class="col-sm-4">
                    <input type="text" name="name" class="form-control" placeholder="Model Name..." value="{{$product->product_name}}" required>
                </div>
                <label class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-4">
                    <textarea name="detail" id="" cols="30" rows="10" class="form-control">{{$product->product_detail}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Property</label>
                <div class="col-sm-4">
                    <textarea name="property" id="" cols="30" rows="10" class="form-control">{{$product->product_detail}}</textarea>
                </div>
                <label class="col-sm-2 col-form-label">Warranty</label>
                <div class="col-sm-4">
                    <textarea name="warranty" id="" cols="30" rows="10" class="form-control">{{$product->product_detail}}</textarea>
                </div>
            </div>
            <div id="resultAppend">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary" id="addcolor">Add Color</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="form-group row">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-success" id="btn_form_addproduct_wheel" form="addproduct_wheel">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Color</h4>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                @foreach ($color as $key => $item)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-4 col-lg-4 text-center">
                                    <img src="{{asset('local/storage/app/productimgset/'.$item->getColorImgset[0]->product_imgset_name.'')}}" alt="" style="width: 100%;">
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <div class="row">
                                        <div class="col-6"><h5>{{$item->color_name}}</h5></div>
                                        <div class="col-6 text-right">
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-default dropdown-toggle waves-effect waves-light " type="button" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">More</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown-5" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect" href="#" onclick="Editcolor({{$item->color_id}})">Edit</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#" onclick="delcolor({{$item->color_id}})">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="dt-responsive table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Diameter</th>
                                                        <th class="text-center">Width</th>
                                                        <th class="text-center">PCD</th>
                                                        <th class="text-center">ET</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Promotion Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($item->getSizes as $itemSize)
                                                    <tr>
                                                        <td class="text-middle text-center">{{$itemSize->size_diameter}}</td>
                                                        <td class="text-middle text-center">{{$itemSize->size_width}}</td>
                                                        <td class="text-middle text-center">{{$itemSize->size_pcd}}</td>
                                                        <td class="text-middle text-center">{{$itemSize->size_et}}</td>
                                                        <td class="text-middle text-center">{{number_format($itemSize->size_price)}} B</td>
                                                        <td class="text-middle text-center">{{number_format($itemSize->size_promotion_price)}} B</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div id="result-modaleditcolor"></div>

<form action="" method="post" id="deletecolor">
    
    @csrf
</form>

@endsection
@section('js')
@include('flash-message')
<script>
    var no = 1;
    $('#addcolor').click(function () { 
            $('#resultAppend').append(
            '<div id="color_'+no+'">'+
                '<hr>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">Color Name <span style="color: #FF5370;">*</span></label>'+
                    '<div class="col-sm-4">'+
                        '<input type="text" class="form-control" name="color_name" id="color_name" placeholder="Color Name...">'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">'+
                        'Image Cover '+
                        '<span class="mytooltip tooltip-effect-5 bg-danger">'+
                            '<span class="tooltip-item">?</span>'+
                            '<span class="tooltip-content clearfix">'+
                                '<span class="tooltip-text">Choose One. (Height: 270px, width: 270px)</span>'+
                            '</span>'+
                        '</span>'+
                    '</label>'+
                    '<div class="col-sm-10">'+
                        '<div class="row">'+
                            '<div class="col-sm-6">'+
                                '<input type="file" name="imgcov[]" class="imgcolorcov btn btn-primary" id="imgcolorcov" accept="image/x-png,image/gif,image/jpeg" >'+
                            '</div>'+
                            '<div class="col-sm-6">'+
                                '<div id="previewcolorcov"></div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">'+
                        'Image Set '+
                        '<span class="mytooltip tooltip-effect-5 bg-danger">'+
                            '<span class="tooltip-item">?</span>'+
                            '<span class="tooltip-content clearfix">'+
                                '<span class="tooltip-text">Multiple. (Height: 270px, width: 270px)</span>'+
                            '</span>'+
                        '</span>'+
                    '</label>'+
                    '<div class="col-sm-10">'+
                        '<div class="row">'+
                            '<div class="col-sm-6">'+
                                '<input type="file" name="imgset[]" class="imgcolorset btn btn-primary" id="addimgset" accept="image/x-png,image/gif,image/jpeg" multiple>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label"></label>'+
                    '<div class="col-sm-10">'+
                        '<div id="previewcolorset"></div>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">Size (Inch)</label>'+
                    '<div class="col-sm-2">'+
                        '<input type="text" name="diameter[]" class="form-control" placeholder="Diameter...">'+
                    '</div>'+
                    '<div class="col-2">'+
                        '<input type="text" name="width[]" class="form-control" placeholder="Width...">'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                        '<select name="pcd[]" class="form-control">'+
                            '<option selected disabled>Select PCD...</option>'+
                            '@foreach ($carmodel as $item)'+
                            '<option value="{{$item->car_model_pcd}}">{{$item->car_model_pcd}}</option>'+
                            '@endforeach'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                        '<input type="text" name="et[]" class="form-control" placeholder="ET...">'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                        '<button type="button" class="btn btn-primary" onclick="addsize('+no+')">Add Size</button>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label">Price</label>'+
                    '<div class="col-sm-4">'+
                        '<input type="number" class="form-control" id="checkprice_'+no+'" name="color_price[]" placeholder="Price...">'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                        '<div class="border-checkbox-section">'+
                            '<div class="border-checkbox-group border-checkbox-group-primary">'+
                                '<input class="border-checkbox promotion_check" name="color_price_status[]" type="checkbox" id="promotion_check_'+no+'" data-number="'+no+'" onclick="promotion('+no+')" value="1">'+
                                '<label class="border-checkbox-label" for="promotion_check_'+no+'">Promotion</label>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                        '<input type="number" class="form-control checkproprice" name="color_price_promotion[]" id="pricepromotion_'+no+'" data-appendId="'+no+'" placeholder="Promotion Price..." style="display: none;">'+
                    '</div>'+
                '</div>'+
                '<div id="resultAppendSize_'+no+'"></div>'+
                '<div class="form-group row">'+
                    '<label class="col-sm-2 col-form-label"></label>'+
                    '<div class="col-sm-12 text-right">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_color('+no+')">Delete Detail</button>'+
                    '</div>'+
                '</div>'+
                '<hr>'+
            '</div>');
            $(this).hide();
        no++;
    });
    function delete_color(x) {
        $("#color_"+x).remove();
        no--;
    }

    $(document).on('click','.promotion_check',function () {
        var number = $(this).attr('data-number');
        if ($(this).is(":checked")) {
            $("#pricepromotion_"+number).show();
        } else {
            $("#pricepromotion_"+number).hide();
        }
    });

    var sizeno = 2;
    function addsize(appendsizeno) { 
        $('#resultAppendSize_'+appendsizeno).append('<div id="appendsize_'+sizeno+''+appendsizeno+'">'+
            '<div class="form-group row">'+
                '<label class="col-sm-2 col-form-label"></label>'+
                '<div class="col-sm-2">'+
                    '<input type="text" name="diameter[]" class="form-control" placeholder="Diameter...">'+
                '</div>'+
                '<div class="col-2">'+
                    '<input type="text" name="width[]" class="form-control" placeholder="Width...">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<select name="pcd[]" class="form-control">'+
                        '<option selected disabled>Select PCD...</option>'+
                        '@foreach ($carmodel as $item)'+
                        '<option value="{{$item->car_model_pcd}}">{{$item->car_model_pcd}}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<input type="text" name="et[]" class="form-control" placeholder="ET...">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<button type="button" class="btn btn-danger delete_size" data-deletenumber="'+sizeno+''+appendsizeno+'" data-sizeno="'+sizeno+'">Delete Size</button>'+
                '</div>'+
            '</div>'+
            '<div class="form-group row">'+
                '<label class="col-sm-2 col-form-label"></label>'+
                '<div class="col-sm-4">'+
                    '<input type="number" class="form-control" id="checkprice_'+sizeno+'" name="color_price[]" placeholder="Price...">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<div class="border-checkbox-section">'+
                        '<div class="border-checkbox-group border-checkbox-group-primary">'+
                            '<input class="border-checkbox promotion_check" name="color_price_status[]" type="checkbox" id="promotion_check_'+sizeno+'" data-number="'+sizeno+'" onclick="promotion('+sizeno+')" value="1">'+
                            '<label class="border-checkbox-label" for="promotion_check_'+sizeno+'">Promotion</label>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<input type="number" class="form-control checkproprice" name="color_price_promotion[]" id="pricepromotion_'+sizeno+'" data-appendId="'+sizeno+'" placeholder="Promotion Price..." style="display: none;">'+
                '</div>'+
            '</div>'+
        '</div>');
        sizeno++;
    }
    $(document).on('click', '.delete_size', function () {
        var delete_number = $(this).attr('data-deletenumber');
        var del_data_sizeId = $(this).attr('data-sizeno');
        var pricePromotion = $('#pricepromotion_'+del_data_sizeId).val();
        if (pricePromotion != '') {
            Swal.fire({
                icon: 'error',
                title: 'ขออภัย',
                text: 'กรุณาลบราคาโปรโมชั่นออกก่อน'
            })
        } else {
            $("#appendsize_"+delete_number).remove();
            sizeno--;
        }
    })

    // image cover preview
    function previewImagesCover() {
        var $preview = $('#previewcov').empty();
        if (this.files) $.each(this.files, readAndPreview);
        function readAndPreview(i, file) {
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
            return alert(file.name +" is not an image");
        }
        var reader = new FileReader();
        $(reader).on("load", function() {
            $preview.append($("<img>", {src:this.result, height:270, width:270}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.imgcov').on("change", previewImagesCover);

    function Editcolor(id) {
        $.ajax({
            url: '{{ url('editcolor') }}/' + id,
            type: 'GET',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaleditcolor').html(data);
            $("#modaleditcolor").modal('show');
        });
    }

    function delcolor(id) {
        var urlaction = '{{url('delete_color')}}' + '/' + id;
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Are yur sure?',
            icon: 'warning',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $("#deletecolor").attr('action', urlaction);
                $("#deletecolor").submit();
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Color has been deleted',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancel',
                    'Delete has been cancel',
                    'error'
                )
            }
        })
    }

    $(document).on('click','#imgcolorcov',function () {
        // image cover preview
        function previewImagesColorCover() {
            var $preview = $('#previewcolorcov').empty();
            if (this.files) $.each(this.files, readAndPreview);
            function readAndPreview(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                return alert(file.name +" is not an image");
            }
            var reader = new FileReader();
            $(reader).on("load", function() {
                $preview.append($("<img>", {src:this.result, height:270, width:270}));
            });
            reader.readAsDataURL(file);
            }
        }
        $('.imgcolorcov').on("change", previewImagesColorCover);
    });

    $(document).on('click','#addimgset',function () {
        // image cover preview
        function previewImagesColorCover() {
            var $preview = $('#previewcolorset').empty();
            if (this.files) $.each(this.files, readAndPreview);
            function readAndPreview(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                return alert(file.name +" is not an image");
            }
            var reader = new FileReader();
            $(reader).on("load", function() {
                $preview.append($("<img>", {src:this.result, height:270, width:270}));
            });
            reader.readAsDataURL(file);
            }
        }
        $('.imgcolorset').on("change", previewImagesColorCover);
    });

    $(document).on('keyup', '.checkproprice', function () {
        var price_pro = $(this).val();
        var appendId = $(this).attr('data-appendId');
        var getPrice = $('#checkprice_'+appendId).val();
        // alert(parseFloat(getPrice) < parseFloat(price_pro));
        if (getPrice == '') {
            Swal.fire({
                icon: 'error',
                title: 'ขออภัย',
                text: 'กรุณากรอกราคาปกติก่อน'
            });
            $(this).val('');
        } else {
            if (parseFloat(getPrice) < parseFloat(price_pro)) {
                $('#pricepromotion_'+appendId).addClass("form-bg-danger");
                $('#btn_form_addproduct_wheel').prop('disabled', true);
            } else {
                $('#pricepromotion_'+appendId).removeClass("form-bg-danger");
                $('#btn_form_addproduct_wheel').prop('disabled', false);
            }
        }
    });

    function addproduct_wheel () {
        var name = document.forms["addproduct_wheel"]["name"].value;
        if (name == "") {
            Swal.fire({
                icon: 'warning',
                type: 'warning',
                title: 'ขออภัย',
                text: 'กรุณากรอกข้อมูลที่กรุณากรอกข้อมูลให้ครบ'
            })
            return false;
        } else {
            var color_name = $('#color_name').val();
            if (color_name == '') {
                Swal.fire({
                    icon: 'warning',
                    type: 'warning',
                    title: 'ขออภัย',
                    text: 'กรุณากรอกข้อมูลที่กรุณากรอกข้อมูลให้ครบ'
                })
                return false;
            } else {
                return true;
            }
        }
    }
</script>
@endsection
