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
                                    <span class="tooltip-text">Choose One.</span>
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
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Series</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_series" placeholder="Series...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_material" placeholder="Material...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Size (Inch)</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-5">
                                    <select name="diameter[]" class="form-control">
                                        <option selected disabled>Select Diameter...</option>
                                        @for ($i = 10; $i <= 50; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-5">
                                    <select name="width[]" class="form-control">
                                        <option selected disabled>Select Width...</option>
                                        @for ($i = 5; $i < 50; $i+=0.5)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                
                            </div>
                            <div id="appendsize"></div>
                            <button type="button" class="btn btn-primary" id="addsize">Add Size</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PCD</label>
                        <div class="col-sm-10">
                            <select name="pcd[]" class="form-control">
                                <option selected disabled>Select PCD...</option>
                                @foreach ($carmodel as $item)
                                <option value="{{$item->car_model_pcd}}">{{$item->car_model_pcd}}</option>
                                @endforeach
                            </select>
                            <div id="appendpcd"></div>
                            <button type="button" class="btn btn-primary" id="addpcd">Add PCD</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ET</label>
                        <div class="col-sm-10">
                            <input type="text" name="et[]" class="form-control" placeholder="ET...">
                            <div id="appendet"></div>
                            <button type="button" class="btn btn-primary" id="addet">Add ET</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea name="detail" class="form-control" cols="30" rows="10" placeholder="Write Something..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Property</label>
                        <div class="col-sm-10">
                            <textarea name="property" class="form-control" cols="30" rows="10" placeholder="Property..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warranty</label>
                        <div class="col-sm-10">
                            <textarea name="warranty" class="form-control" cols="30" rows="10" placeholder="Warranty..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="price" class="form-control" placeholder="Price...">
                                </div>
                                <div class="col-6 input-group">
                                    <span>
                                        {{-- <input type="checkbox" name="discount" id="discount" value="1" aria-label="Text input with dropdown button"> --}}
                                        <button type="button" id="discount" name="discount" value="1" class="btn btn-default"><i class="fa fa-certificate"></i></button>
                                    </span>
                                    <input type="number" name="price_discount" class="form-control removiediscount" placeholder="Price (Discount)..." disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car can Use</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-5">
                                    <input type="radio" name="select_carbrand" value="1" checked> Select Brand
                                </div>
                                
                            </div>
                            <div class="select_carbrand" id="box1">
                                <br>
                                <div class="row">
                                    <div class="col-4">
                                        <select class="form-control filtercar carbrand" name="carbrand[]" id="carbrand" data-count_append="1">
                                            <option selected disabled>Select Car Brand...</option>
                                            <optgroup label="Car Brand">
                                                @foreach ($carbrand as $item)
                                                    <option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control filtercar carmodel" name="carmodel[]" id="carmodel">
                                            <option selected disabled>Select Car Model...</option>
                                            <optgroup label="Car Model">
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control" name="caryear[]" id="caryear">
                                            <option selected disabled>Select Car Year...</option>
                                            <optgroup label="Car Year">
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div id="appendcar"></div>
                                <button type="button" class="btn btn-primary" id="addcar">Add Car</button>
                            </div>
                            <div class="select_carbrand" id="box2" style="display: none;">
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="carbrand_name">Car Brand Name</label>
                                        <input type="text" name="carbrand_name" class="form-control" placeholder="Car Brand Name...">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="carbrand_model">Model Name</label>
                                        <input type="text" name="carbrand_model" class="form-control" placeholder="Model Name...">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="carbrand_model">Year</label>
                                        <input type="text" name="carbrand_year" class="form-control" placeholder="Year..." id="datepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Product Images Set</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="file" name="img[]" class="imgset" id="addimgset" style="display: none;" accept="image/x-png,image/gif,image/jpeg" multiple>
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addimgset').click();"><i class="fa fa-plus"></i> Add Image Set</button>
                                </div>
                                <div class="col-sm-12">
                                    <div id="previewset"></div>
                                </div>
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
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="file" name="imggallery[]" class="gallery" id="addimggal" style="display: none;" accept="image/x-png,image/gif,image/jpeg" multiple>
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addimggal').click();"><i class="fa fa-plus"></i> Add Gallery</button>
                                </div>
                                <div class="col-sm-12">
                                    <div id="previewgal"></div>
                                </div>
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

    // append car
    var count_car = 2;
    $('#addcar').click(function () {
        $('#appendcar').append(
            '<div id="resuleappendsize_'+count_car+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-4">'+
                        '<select class="form-control filtercar" name="carbrand[]" data-count_append="'+count_car+'">'+
                            '<option selected disabled>Select Car Brand...</option>'+
                            '<optgroup label="Car Brand">'+
                            '@foreach ($carbrand as $item)'+
                                '<option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>'+
                            '@endforeach'+
                            '</optgroup>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-4">'+
                        '<select class="form-control filtercar" name="carmodel[]" id="carmodel'+count_car+'">'+
                            '<option selected disabled>Select Car Model...</option>'+
                            '<optgroup label="Car Model">'+
                            '</optgroup>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-4">'+
                        '<select class="form-control" name="caryear[]" id="caryear'+count_car+'">'+
                            '<option selected disabled>Select Car Year...</option>'+
                            '<optgroup label="Car Year">'+
                            '</optgroup>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-12 text-right">'+
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

    // switch div 
    $(document).ready(function () {
        $("input[name$='select_carbrand']").click(function () {
            var test = $(this).val();

            $("div.select_carbrand").hide(100);
            $("#box" + test).show(100);
        });

        $("#discount").click(function(event){
            var checkCount = $(this).val();
            event.preventDefault();
            $(".removiediscount").prop('disabled', function (_, val) {
                return ! val; 
            });
        });
    });

    $(document).on('change', '.filtercar', function () {
        var carbrand_id = $('.carbrand').val();
        var carmodel_id = $('.carmodel').val();
        // count append
        var count_append = $(this).attr('data-count_append');

        filtercar(carbrand_id, carmodel_id, count_append);
    })

    // ajax filter data car
    function filtercar(carbrand_id, carmodel_id , count_append) {
        $.ajax({
            url: '{{url('backoffice/filtercarbrand')}}',
            type: 'GET',
            data: {
                carbrand_id: carbrand_id,
                carmodel_id: carmodel_id,
                count_append: count_append,
            },
        }).done(function (data) {
            $('#carmodel').html(data.html_carmodel);
            $('#caryear').html(data.html_caryear);
        })
    }

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
            $preview.append($("<img>", {src:this.result, height:150}));
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
            $preview.append($("<img>", {src:this.result, height:150}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.imgset').on("change", previewImagesSet);

    // image gallery preview
    function previewImagesGal() {
        var $preview = $('#previewgal').empty();
        if (this.files) $.each(this.files, readAndPreview);
        function readAndPreview(i, file) {
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
            return alert(file.name +" is not an image");
        }
        var reader = new FileReader();
        $(reader).on("load", function() {
            $preview.append($("<img>", {src:this.result, height:150}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.gallery').on("change", previewImagesGal);

    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true,
    });

    function validate()
    {
        if(document.addproduct_wheel.carbrand.selectedIndex=="")
        {
            alert ( "Please select Car Brand!");
            return false;
        }
    }
</script>