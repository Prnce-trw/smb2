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
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('local/storage/app/product/'.$product->product_imgcov.'')}}" width="150px;" alt="">
                                    <br>
                                    <input type="file" name="imgcov[]" id="editimgcov" style="display: none;">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editimgcov').click();"><i class="fa fa-file-image-o"></i> Edit Image Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name..." value="{{$product->product_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Size</label>
                        <div class="col-sm-10">

                            @foreach ($product->getProductSizes as $key => $item)
                            <div class="row" id="size_{{$item->size_id}}">
                                <div class="col-3">
                                    <input type="hidden" name="product_size_id[]" value="{{$item->size_id}}">
                                    <label class='col-sm-2 col-form-label'>{{ $key === 0 ? "Width" : "" }}</label>
                                    <input type="number" name="product_width[]" class="form-control" placeholder="Width..." value="{{$item->size_width}}">
                                </div>
                                <div class="col-3">
                                    <label class='col-sm-2 col-form-label'>{{ $key === 0 ? "Overall" : "" }}</label>
                                    <input type="number" name="product_overall[]" class="form-control" placeholder="Overall..." value="{{$item->size_overall}}">
                                </div>
                                <div class="col-3">
                                    <label class='col-sm-2 col-form-label'>{{ $key === 0 ? "Diameter" : "" }}</label>
                                    <input type="number" name="product_diameter[]" class="form-control" placeholder="Diameter..." value="{{$item->size_diameter}}">
                                </div>
                                <div class="col-3">
                                    <label class='col-sm-2 col-form-label'>{{ $key === 0 ? "" : "" }}</label>
                                    <button type="button" class="btn btn-danger form-control btn-delete-size" value="{{$item->size_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div id="resultDeleteSize"></div>
                            <div id="appendsize"></div>
                            <button type="button" class="btn btn-primary" id="addsize">Add Size</button> --}}
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
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-6">
                                    @foreach ($product->getProductSizes as $key => $item)
                                    <input type="number" name="price[]" class="form-control" placeholder="Price..." value="{{$item->size_price}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Product Images</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple.</span>
                                </span>
                            </span>
                            <input type="file" name="newimg[]" id="addimg" class="form-control" style="display: none;" multiple>
                            <button type="button" class="btn btn-primary form-control" onclick="document.getElementById('addimg').click();">Add Image</button>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                @foreach ($product->getProductImgSets as $key => $item)
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
                    '<div class="col-3">'+
                        '<input type="number" name="product_new_width[]" class="form-control" placeholder="Width..." value="">'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<input type="number" name="product_new_overall[]" class="form-control" placeholder="Overall..." value="">'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<input type="number" name="product_new_diameter[]" class="form-control" placeholder="Diameter..." value="">'+
                    '</div>'+
                    '<div class="col-3">'+
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

    $(document).ready(function () {
        $('.btn-delete-size').on('click', function () {
            var sizeId = $(this).val();
            if (sizeId != null) {
                $('#size_'+sizeId).fadeOut();
                $('#resultDeleteSize').append('<input type="hidden" name="deletesize[]" value="'+sizeId+'">');
            }
        });

        $('.btn-delete-imgset').on('click', function () {
            var imgSetId = $(this).val();
            if (imgSetId != null) {
                $('#imgset_'+imgSetId).fadeOut();
                $('#resultDeleteImgset').append('<input type="text" name="deleteimgset[]" value="'+imgSetId+'">');
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
</script>
