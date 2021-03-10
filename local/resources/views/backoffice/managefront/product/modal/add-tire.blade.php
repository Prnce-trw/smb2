<div class="modal fade show" id="modaladdproduct" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('backoffice/product') }}" method="POST" enctype="multipart/form-data" id="addproduct_tire" onsubmit="return addproduct_tire()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Image Cover
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One. (Height: 270px, width: 270px)</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="hidden" name="brand_id" value="{{$brand->brand_id}}"> <!-- brand id -->
                                    <input type="hidden" name="product_type" value="{{$brand->brand_product_type}}"> <!-- product type id -->
                                    <input type="file" name="imgcov[]" class="imgcov" id="addimgcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addimgcov').click();"><i class="fa fa-plus"></i> Add Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewcov"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name<span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Size</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" name="width" class="form-control" placeholder="Width...">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="overall" class="form-control" placeholder="Overall...">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="diameter" class="form-control" placeholder="Diameter...">
                                </div>
                            </div>
                            {{-- <div id="appendsize"></div>
                            <button type="button" class="btn btn-primary" id="addsize">Add Size</button> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="price" class="form-control" id="checkprice" placeholder="Price...">
                                </div>
                                <div class="col-sm-2">
                                    <div class="border-checkbox-section">
                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                            <input class="border-checkbox promotion_check" name="color_price_status" type="checkbox" data-number="1" id="promotion_check" value="1">
                                            <label class="border-checkbox-label" for="promotion_check">Promotion</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control checkproprice" name="color_price_promotion" id="pricepromotion" placeholder="Promotion Price..." style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Images Detail
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="file" name="img[]" class="imgset" id="addimgset" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addimgset').click();"><i class="fa fa-plus"></i> Add Image Detail</button>
                                </div>
                                <div class="col-sm-12">
                                    <div id="previewset"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_addproduct_tire" form="addproduct_tire">Save
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
            $preview.append($("<img>", {src:this.result, height:270, width: 270}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.imgcov').on("change", previewImagesCover);

    // image set preview
    function previewImagesSet() {
        var $preview = $('#previewset').empty();
        if (this.files) $.each(this.files, readAndPreview);
        function readAndPreview(i, file) {
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
            return alert(file.name +" is not an image");
        }
        var reader = new FileReader();
        $(reader).on("load", function() {
            $preview.append($('<img>', {src:this.result, height:270, width: 600,}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.imgset').on("change", previewImagesSet);

    $(document).ready(function () {
        $("#discount").click(function(event){
            var checkCount = $(this).val();
            event.preventDefault();
            $(".removiediscount").prop('disabled', function (_, val) {
                return ! val;
            });
        });
    })

    // append size
    var count_size = 2;
    $('#addsize').click(function () {
        $('#appendsize').append(
            '<div id="resuleappendsize_'+count_size+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-sm-3">'+
                        '<input type="text" name="width[]" class="form-control" placeholder="Width...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                    '<input type="text" name="overall[]" class="form-control" placeholder="Overall...">'+
                        '</div>'+
                    '<div class="col-sm-3">'+
                        '<input type="text" name="diameter[]" class="form-control" placeholder="Diameter...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
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

    $(document).on('click','.promotion_check',function () {
        if ($(this).is(":checked")) {
            $("#pricepromotion").show();
        } else {
            $("#pricepromotion").hide();
        }
    });


    $(document).on('keyup', '.checkproprice', function () {
        var price_pro = $(this).val();
        var getPrice = $('#checkprice').val();
        if (getPrice == '') {
            Swal.fire({
                icon: 'error',
                title: 'ขออภัย',
                text: 'กรุณากรอกราคาปกติก่อน'
            });
            $(this).val('');
        } else {
            if (parseFloat(getPrice) < parseFloat(price_pro)) {
                $('#pricepromotion').addClass("form-bg-danger");
                $('#btn_addproduct_tire').prop('disabled', true);
            } else {
                $('#pricepromotion').removeClass("form-bg-danger");
                $('#btn_addproduct_tire').prop('disabled', false);
            }
        }
    });

    function addproduct_tire () {
        var name = document.forms["addproduct_tire"]["product_name"].value;
        if (name == "") {
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
</script>
