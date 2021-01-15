<div class="modal fade show" id="modaleditproduct" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('backoffice/product', $product->product_id) }}" method="POST" enctype="multipart/form-data" id="addproduct_wheel">
                @csrf
                {{method_field('PUT')}}
                <input type="hidden" value="{{$product->product_type_id}}" name="product_type">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Image Cover</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One.</span>
                                </span>
                            </span>    
                        </label>
                        <div class="col-sm-10">
                            <img src="{{asset('local/storage/app/product/'.$product->product_imgcov.'')}}" width="150px;" alt="">
                            <br>
                            <input type="file" name="imgcov[]" id="editimgcov" style="display: none;">
                            <button type="button" class="btn btn-warning" onclick="document.getElementById('editimgcov').click();"><i class="fa fa-file-image-o"></i> Edit Image Cover</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name..." value="{{$product->product_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Series</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_series" placeholder="Series..." value="{{$product->product_series}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_material" placeholder="Material..." value="{{$product->product_material}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Size (Inch)</label>
                        <div class="col-sm-10">
                            @foreach ($size as $item)
                            <div class="row" id="size_{{$item->size_id}}">
                                <div class="col-5">
                                    <select name="product_diameter[{{$item->size_id}}]" class="form-control">
                                    <option value="{{$item->size_diameter}}" selected>{{$item->size_diameter}}</option>
                                    <optgroup label="Select New Size...">
                                        @for ($i = 10; $i < 50; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </optgroup>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <select name="product_width[{{$item->size_id}}]" class="form-control">
                                        <option value="{{$item->size_width}}" selected>{{$item->size_width}}</option>
                                        <optgroup label="Select New Width...">
                                            @for ($i = 5; $i < 50; $i+=0.5)
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-size" value="{{$item->size_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            @endforeach
                            <div id="resultDeleteSize"></div>
                            <div id="appendsize"></div>
                            <button type="button" class="btn btn-primary" id="addsize">Add Size</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PCD</label>
                        <div class="col-sm-10">
                            @foreach ($pcd as $item)
                            <div class="row" id="pcd_{{$item->pcd_id}}">
                                <div class="col-10">
                                    <select name="product_pcd[{{$item->pcd_id}}]" class="form-control">
                                        <option value="{{$item->pcd_name}}">{{$item->pcd_name}}</option>
                                        <optgroup label="PCD...">
                                            @foreach ($carmodel as $value)
                                                <option value="{{$value->car_model_pcd}}">{{$value->car_model_pcd}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-pcd" value="{{$item->pcd_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            @endforeach
                            <div id="resultDeletePcd"></div>
                            <div id="appendpcd"></div>
                            <button type="button" class="btn btn-primary" id="addpcd">Add PCD</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ET</label>
                        <div class="col-sm-10">
                            @foreach ($et as $item)
                            <div class="row" id="et_{{$item->et_id}}">
                                <div class="col-10">
                                    <input type="text" name="product_et[{{$item->et_id}}]" class="form-control" placeholder="ET..." value="{{$item->et_name}}">
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-et" value="{{$item->et_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            @endforeach
                            <div id="resultDeleteEt"></div>
                            <div id="appendet"></div>
                            <button type="button" class="btn btn-primary" id="addet">Add ET</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea name="detail" class="form-control" cols="30" rows="10" placeholder="Write Something...">{{$product->product_detail}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Property</label>
                        <div class="col-sm-10">
                            <textarea name="property" class="form-control" cols="30" rows="10" placeholder="Property...">{{$product->product_property}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warranty</label>
                        <div class="col-sm-10">
                            <textarea name="warranty" class="form-control" cols="30" rows="10" placeholder="Warranty...">{{$product->product_warranty}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="price" class="form-control" placeholder="Price..." value="{{$product->product_price}}">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="price_discount" class="form-control" placeholder="Price (Discount)..." value="{{$product->product_price_discount}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car can Use</label>
                        <div class="col-sm-10">
                            @foreach ($getdatacar as $key => $item)
                            <div class="row" id="productcar_{{$item->pc_id}}">
                                <div class="col-4">
                                    <select name="carbrand[{{$item->pc_id}}]" class="form-control change_carbrand" data-carbrand="{{$key+1}}">
                                        <option value="{{$item->getCarBrands->first()->car_brand_id}}">{{$item->getCarBrands->first()->car_brand_name}}</option>
                                        <optgroup label="Select New Car Brand...">
                                            @foreach ($carbrand as $value)
                                                <option value="{{$value->car_brand_id}}">{{$value->car_brand_name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="carmodel[{{$item->pc_id}}]" class="form-control" id="change_carmodel{{$key+1}}">
                                        <option value="{{$item->getCarModels->first()->car_model_id}}">{{$item->getCarModels->first()->car_model_name}}</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="carmodel[{{$item->pc_id}}]" class="form-control" id="change_carmodel{{$key+1}}">
                                        <option value="{{$item->getCarYears->first()->car_year_id}}">{{$item->getCarYears->first()->car_year_name}}</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-productcar" value="{{$item->pc_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            <br>
                            @endforeach
                            <div id="resultDeletePc"></div>
                            <div id="appendcar"></div>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Product Images</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple.</span>
                                </span>
                            </span>
                            <input type="file" name="img[]" id="addimg" class="form-control" style="display: none;" multiple>
                            <button type="button" class="btn btn-primary form-control" onclick="document.getElementById('addimg').click();">Add Image</button>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                @foreach ($productimgset as $key => $item)
                                <div class="col-sm-4 text-center" style="border: 1px solid gray;" id="imgset_{{$item->product_imgset_id}}">
                                    <img src="{{asset('local/storage/app/productgallery/'.$item->product_imgset_name.'')}}" alt="" width="150px;">
                                    <input type="file" name="imgset[{{$item->product_imgset_id}}]" class="btn btn-warning form-control" style="display: none;" id="editimg_{{$item->product_imgset_id}}">
                                    <button type="button" class="btn btn-warning form-control" onclick="document.getElementById('editimg_{{$item->product_imgset_id}}').click();"><i class="fa fa-file-image-o"></i> Edit Product Image ({{$key+1}})</button>
                                    <button type="button" class="btn btn-danger btn-delete-imgset" value="{{$item->product_imgset_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                                @endforeach
                                <div id="resultDeleteImgset"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Product Gallery</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple.</span>
                                </span>
                            </span>
                            <input type="file" name="imggallery[]" class="form-control" multiple id="addgallery" style="display: none;">
                            <button type="button" class="btn btn-primary form-control" onclick="document.getElementById('addgallery').click();">Add Gallery</button>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                @foreach ($productimggallery as $key => $item)
                                <div class="col-sm-4 text-center" style="border: 1px solid gray;" id="imggal_{{$item->product_gallery_id}}">
                                    <img src="{{asset('local/storage/app/productgallery/'.$item->product_gallery_name.'')}}" alt="" width="150px;">
                                    <input type="file" name="imggal[{{$item->product_gallery_id}}]" class="btn btn-warning form-control" style="display: none;" id="editgal_{{$item->product_gallery_id}}">
                                    <button type="button" class="btn btn-warning form-control" onclick="document.getElementById('editgal_{{$item->product_gallery_id}}').click();"><i class="fa fa-file-image-o"></i> Edit Product Gallery ({{$key+1}})</button>
                                    <button type="button" class="btn btn-danger btn-delete-imggal" value="{{$item->product_gallery_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                                @endforeach
                                <div id="resultDeleteImggal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addproduct_wheel">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    // append size
    var count_size = 2;
    $('#addsize').click(function () {
        $('#appendsize').append(
            '<div id="resuleappendsize_'+count_size+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-5">'+
                        '<select name="diameter[]" class="form-control">'+
                            '<option selected disabled>Select Diameter...</option>'+
                            '@for ($i = 10; $i < 50; $i++)'+
                            '<option value="{{$i}}">{{$i}}</option>'+
                            '@endfor'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-5">'+
                        '<select name="width[]" class="form-control">'+
                        '<option selected disabled>Select Width...</option>'+
                        '@for ($i = 5; $i < 50; $i+=0.5)'+
                        '<option value="{{$i}}">{{$i}}</option>'+
                        '@endfor'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-2">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_size('+count_size+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        );
        count_size++;
    });
    function delete_size(x) {
        $("#resuleappendsize_"+x).remove();
        count_size--;
    }

    // append pcd
    var count_pcd = 2;
    $('#addpcd').click(function () {
        $('#appendpcd').append(
            '<div id="resuleappendpcd_'+count_pcd+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-10">'+
                        '<select name="pcd[]" class="form-control">'+
                        '<option selected disabled>Select PCD...</option>'+
                            '@foreach ($carmodel as $item)'+
                                '<option value="{{$item->car_model_pcd}}">{{$item->car_model_pcd}}</option>'+
                            '@endforeach'+
                        '</select>'+
                    '</div>'+
                    '<div>'+
                        '<button type="button" class="btn btn-danger" onclick="delete_pcd('+count_pcd+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        );
        count_pcd++;
    });
    function delete_pcd(x) {
        $("#resuleappendpcd_"+x).remove();
        count_pcd--;
    }

    // append et
    var count_et = 2;
    $('#addet').click(function () {
        $('#appendet').append(
            '<div id="resuleappendet_'+count_et+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-10">'+
                        '<input type="text" name="et[]" class="form-control" placeholder="ET...">'+
                    '</div>'+
                    '<div>'+
                        '<button type="button" class="btn btn-danger" onclick="delete_et('+count_et+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        );
        count_et++;
    });
    function delete_et(x) {
        $("#resuleappendet_"+x).remove();
        count_et--;
    }

    // add car
    var count_car = 2;
    $('#addcar').click(function () {
        $('#appendcar').append(
            '<div id="resuleappendsize_'+count_car+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-5">'+
                        '<select class="form-control select_carbrand" name="select_carbrand[]" data-selectcarbrand="'+count_car+'">'+
                            '<option selected disabled>Select Car Brand...</option>'+
                            '<optgroup label="Car Brand">'+
                            '@foreach ($carbrand as $item)'+
                                '<option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>'+
                            '@endforeach'+
                            '</optgroup>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-5">'+
                        '<select class="form-control" name="select_carmodel[]" id="select_carmodel'+count_car+'">'+
                            '<option selected disabled>Select Car Model...</option>'+
                            '<optgroup label="Car Model">'+
                            '</optgroup>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-2">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_size('+count_car+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        );
        count_car++;
    });
    function delete_car(x) {
        $("#resuleappendcar_"+x).remove();
        count_car--;
    }

    $(document).ready(function () {
        $('.btn-delete-size').on('click', function () {
            var sizeId = $(this).val();
            if (sizeId != null) {
                $('#size_'+sizeId).fadeOut(200);
                $('#resultDeleteSize').append('<input type="hidden" name="deletesize[]" value="'+sizeId+'">');
            }
        });

        $('.btn-delete-pcd').on('click', function () {
            var pcdId = $(this).val();
            if (pcdId != null) {
                $('#pcd_'+pcdId).fadeOut(200);
                $('#resultDeletePcd').append('<input type="hidden" name="deletepcd[]" value="'+pcdId+'">');
            }
        });

        $('.btn-delete-et').on('click', function () {
            var etId = $(this).val();
            if (etId != null) {
                $('#et_'+etId).fadeOut(200);
                $('#resultDeleteEt').append('<input type="hidden" name="deleteet[]" value="'+etId+'">');
            }
        });

        $('.btn-delete-productcar').on('click', function () {
            var etPc = $(this).val();
            if (etPc != null) {
                $('#productcar_'+etPc).fadeOut(200);
                $('#resultDeletePc').append('<input type="hidden" name="deletecar[]" value="'+etPc+'">');
            }
        });

        $('.btn-delete-imgset').on('click', function () {
            var imgSetId = $(this).val();
            if (imgSetId != null) {
                $('#imgset_'+imgSetId).fadeOut();
                $('#resultDeleteImgset').append('<input type="hidden" name="deleteimgset[]" value="'+imgSetId+'">');
            }
        });

        $('.btn-delete-imggal').on('click', function () {
            var imgGalId = $(this).val();
            if (imgGalId != null) {
                $('#imggal_'+imgGalId).fadeOut();
                $('#resultDeleteImggal').append('<input type="hidden" name="deleteimggal[]" value="'+imgGalId+'">');
            }
        });
    });

    // ajax filter change car model
    $(document).on('change', '.change_carbrand', function() {
        var carbrand_id = $(this).val();
        var count_car = $(this).attr('data-carbrand');
        $.ajax({
            url: '{{url('backoffice/filtercarbrand')}}',
            type: 'GET',
            data: {
                count: count_car,
                id: carbrand_id,
            },
        }).done(function (data) {
            $('#change_carmodel'+data.count).html(data.html);
        });
    });

    // ajax filter select car model
    $(document).on('change', '.select_carbrand', function() {
        var carbrand_id = $(this).val();
        var count_car_select = $(this).attr('data-selectcarbrand');
        $.ajax({
            url: '{{url('backoffice/filtercarbrand')}}',
            type: 'GET',
            data: {
                count_select: count_car_select,
                id: carbrand_id,
            },
        }).done(function (data) {
            $('#select_carmodel'+data.count_select).html(data.html);
        });
    });
</script>