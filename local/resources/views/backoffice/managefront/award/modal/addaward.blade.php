<div class="modal fade" id="modaladdaward" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Award</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/award')}}" method="POST" enctype="multipart/form-data" id="award" onsubmit="return award()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car Brand <span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-5">
                            <select name="carbrand" class="form-control filtercar_award" data-count_append="1">
                                <option selected disabled>Select Car Brand...</option>
                                @foreach ($carbrand as $item)
                                <option value="{{$item->car_brand_id}}">{{$item->car_brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select name="carmodel" id="carmodel" class="form-control">
                                <option selected disabled>Select Car...</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Brand</label>
                        <div class="col-sm-5">
                            <select name="productbrand" class="form-control filterproduct_brand productbrand">
                                <option selected disabled>Select Product Brand...</option>
                                @foreach ($brand as $item)
                                <option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select name="product" id="product" class="form-control">
                                <option selected disabled>Select Product...</option>
                            </select>
                        </div>
                    </div> --}}
                    <div id="appendproduct"></div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple. (Height: 541px, width: 381px)</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <input type="file" name="img[]" class="form-control" id="" multiple>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="award">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function award () {
        var carbrand = document.forms["award"]["carbrand"].value;
        var carmodel = document.forms["award"]["carmodel"].value;
        if (carbrand == "Select Car Brand..." || carmodel == "Select Car...") {
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

    $(document).on('change', '.filtercar_award',function () {
        var carid = $(this).val();
        filtercar_award(carid);
    });

    $(document).on('change', '.filterproduct_brand', function () {
        var productBrandid = $('.productbrand').val();
        var count_append = $(this).attr('data-count_append');
        console.log($(this));
        // alert(count_append);
        filterproduct_brand(productBrandid, count_append);
    });

    var count_product = 2;
    $('#addmoreproduct').click(function () { 
        $('#appendproduct').append(
            '<div class="form-group row" id="appendproduct_'+count_product+'">'+
                '<label class="col-sm-2 col-form-label"></label>'+
                '<div class="col-sm-4">'+
                    '<select name="productbrand[]" class="form-control filterproduct_brand productbrand" data-count_append="'+count_product+'">'+
                        '<option selected disabled>Select Product Brand...</option>'+
                        '@foreach ($brand as $item)'+
                        '<option value="{{$item->brand_id}}">{{$item->brand_name}}</option>'+
                    '@endforeach'+
                    '</select>'+
                '</div>'+
                '<div class="col-sm-4">'+
                    '<select name="product[]" id="product'+count_product+'" class="form-control" id="product'+count_product+'">'+
                    '<option selected disabled>Select Product...</option>'+
                    '</select>'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<button type="button" class="btn btn-danger" onclick="delete_product('+count_product+')"><i class="fa fa-trash-o"></i></button>'+
                '</div>'+
            '</div>'
        );
        count_product++;
    });
    function delete_product(x) {
        $("#appendproduct_"+x).remove();
        count_et--;
    }

    function filterproduct_brand(productBrandid) { 
        $.ajax({
            url: '{{ url('filterproduct_brand') }}',
            type: 'GET',
            data: {productBrandid: productBrandid},
        }).done(function (data) {
            console.log(data);
            $('#product').html(data.html_product);
        });
    }

    function filtercar_award(carid) { 
        $.ajax({
            url: '{{ url('filtercar_award') }}',
            type: 'GET',
            data: {carid: carid},
        }).done(function (data) {
            $('#carmodel').html(data.html_carmodel);
        });
    }
</script>