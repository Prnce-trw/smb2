<div class="modal fade show" id="modaleditcolor" tabindex="-1" role="dialog">
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
            <form action="{{url('updatecolor', $color->color_id)}}" method="POST" enctype="multipart/form-data" id="editcolor_wheels{{$color->color_id}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Color Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Color Name..." value="{{$color->color_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Color Images</span>
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
                                    <img src="{{asset('local/storage/app/productimgset/'.$item->product_imgset_name.'')}}" alt="" width="150px;">
                                    <input type="file" name="imgset[{{$item->product_imgset_id}}]" class="btn btn-warning form-control" style="display: none;" id="editimg_{{$item->product_imgset_id}}">
                                    <button type="button" class="btn btn-warning form-control" onclick="document.getElementById('editimg_{{$item->product_imgset_id}}').click();"><i class="fa fa-file-image-o"></i> Edit Product Image ({{$key+1}})</button>
                                    <button type="button" class="btn btn-danger btn-delete-imgset" value="{{$item->product_imgset_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                                @endforeach
                                <div id="resultDeleteImgset"></div>
                            </div>
                        </div>
                    </div>
                    @foreach ($size as $item)
                    <div id="size_{{$item->size_id}}">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Size (Inch)</label>
                            <div class="col-sm-2">
                                <input type="number" name="diameter[{{$item->size_id}}]" class="form-control" placeholder="Diameter..." value="{{$item->size_diameter}}">
                            </div>
                            <div class="col-sm-2">
                                <input type="number" name="width[{{$item->size_id}}]" class="form-control" placeholder="Width..." value="{{$item->size_width}}">
                            </div>
                            <div class="col-sm-2">
                                <select name="pcd[{{$item->size_id}}]" class="form-control">
                                    <option disabled>Select PCD...</option>
                                    @foreach ($carmodel as $itemcarmodel)
                                    <option value="{{$itemcarmodel->car_model_pcd}}" {{ $item->size_pcd == $itemcarmodel->car_model_pcd ? "selected" : "" }}>{{$itemcarmodel->car_model_pcd}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" name="et[{{$item->size_id}}]" class="form-control" placeholder="ET..." value="{{$item->size_et}}">
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-danger btn-deletesize" id="" value="{{$item->size_id}}"><i class="icofont icofont-bin"></i></button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="color_price[{{$item->size_id}}]" placeholder="Price..." value="{{$item->size_price}}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="resultDeletesize"></div>
                    <div id="resultAppendSizeEdit"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-primary" onclick="addsizeedit()">Add Size</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editcolor_wheels{{$color->color_id}}">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click','.btn-delete-imgset', function () {
        var id = $(this).val();
        if (id != null) {
            $('#imgset_'+id).fadeOut('slow');
            $('#resultDeleteImgset').append('<input type="hidden" name="deleteimgset['+id+']" value="'+id+'">');
        }
    });

    $(document).on('click','.btn-deletesize',function () {
        var sizeId = $(this).val();
        if (sizeId != null) {
            $('#size_'+sizeId).fadeOut('slow');
            $('#resultDeletesize').append('<input type="hidden" name="deletesize['+sizeId+']" value="'+sizeId+'">');
        }
    });

    var sizenoedit = 1;
    function addsizeedit() {
        $('#resultAppendSizeEdit').append('<div id="appendsize_'+sizenoedit+'">'+
            '<div class="form-group row">'+
                '<label class="col-sm-2 col-form-label"></label>'+
                '<div class="col-sm-2">'+
                    '<input type="number" name="adddiameter[]" class="form-control" placeholder="Diameter...">'+
                '</div>'+
                '<div class="col-2">'+
                    '<input type="number" name="addwidth[]" class="form-control" placeholder="Width...">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<select name="addpcd[]" class="form-control">'+
                        '<option selected disabled>Select PCD...</option>'+
                        '@foreach ($carmodel as $item)'+
                        '<option value="{{$item->car_model_pcd}}">{{$item->car_model_pcd}}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<input type="text" name="addet[]" class="form-control" placeholder="ET...">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<button type="button" class="btn btn-danger" onclick="delete_sizeedit('+sizenoedit+')" >Delete Size</button>'+
                '</div>'+
            '</div>'+
            '<div class="form-group row">'+
                '<label class="col-sm-2 col-form-label"></label>'+
                '<div class="col-sm-4">'+
                    '<input type="number" class="form-control" name="addcolr_price[]" placeholder="Price...">'+
                '</div>'+
            '</div>'+
        '</div>');
        sizenoedit++;
    }
    function delete_sizeedit(y) {
        console.log(y);
        $("#appendsize_"+y).remove();
        sizenoedit--;
    }
</script>