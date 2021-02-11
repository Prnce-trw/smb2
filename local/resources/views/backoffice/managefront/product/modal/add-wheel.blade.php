<div class="modal fade show" id="modaladdproduct" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product Series</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('backoffice/product') }}" method="POST" enctype="multipart/form-data" id="addproduct_wheel" name="addproduct_wheel" onsubmit="return validate()"> 
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="brand_id" value="{{$brand->brand_id}}"> <!-- brand id -->
                    <input type="hidden" name="product_type" value="{{$brand->brand_product_type}}"> <!-- product type id -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Image Cover</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One. (Height: 270px, width: 270px)</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="imgcov[]" class="imgcov" id="addimgcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addimgcov').click();"><i class="fa fa-plus"></i> Add Logo</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewcov"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Model Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Model Name...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea name="detail" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Property</label>
                        <div class="col-sm-10">
                            <textarea name="property" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warranty</label>
                        <div class="col-sm-10">
                            <textarea name="warranty" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price Rate</label>
                        <div class="col-sm-5">
                            <input type="number" name="price_min" class="form-control" placeholder="Min...">
                        </div>
                        <div class="col-sm-5">
                            <input type="number" name="price_max" class="form-control" placeholder="Max...">
                        </div>
                    </div> --}}
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
</script>