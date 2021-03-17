<div class="modal fade show" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Car Model</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/updatecarmodel',$carmodel->car_model_id)}}" method="POST" enctype="multipart/form-data" id="editbrand">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car Model</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Car Model..." value="{{$carmodel->car_model_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Vehicle Year</label>
                        <div class="col-sm-10">
                            @foreach ($carmodel->getCarYears as $item)
                            <div class="row" id="year_{{$item->car_year_id}}">
                                <div class="col-10">
                                    <input type="text" class="form-control Editdatepicker" name="edityear[{{$item->car_year_id}}]" placeholder="Vehicle Year..." value="{{$item->car_year_name}}">
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-year" value="{{$item->car_year_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            <br>
                            @endforeach
                            <div id="resultDeleteYear"></div>
                            <div id="appendedityear"></div>
                            <button type="button" class="btn btn-primary" id="addedityear">Add Year</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PCD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pcd" placeholder="PCD..." value="{{$carmodel->car_model_pcd}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tire Size</label>
                        <div class="col-sm-10">
                            @foreach ($carmodel->getCarTireSizes as $item)
                            <div class="row" id="size_{{$item->tireSize_id}}">
                                <div class="col-sm-4">
                                    <input type="number" name="editwidth[{{$item->tireSize_id}}]" class="form-control" placeholder="Width..." value="{{$item->tireSize_width}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" name="editoverall[{{$item->tireSize_id}}]" class="form-control" placeholder="Overall..." value="{{$item->tireSize_overall}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" name="editdiameter[{{$item->tireSize_id}}]" class="form-control" placeholder="Diameter..." value="{{$item->tireSize_diameter}}">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger form-control btn-delete-size" value="{{$item->tireSize_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                            <br>
                            @endforeach
                            <div id="edit-appendsize"></div>
                            <button class="btn btn-primary" type="button" id="edit-addsize">Add Size</button>
                            <div id="resultDeleteSize"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editbrand">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(".Editdatepicker").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true,
    });

    // append edit year
    var count_edityear = 2;
    $('#addedityear').click(function () {
        $('#appendedityear').append(
            '<div id="resuleappendyear_'+count_year+'">'+
                '<div class="row">'+
                    '<div class="col-sm-10">'+
                        '<input type="text" class="form-control Editdatepicker" name="newcaryear[]" placeholder="Year...">'+
                    '</div>'+
                    '<div class="col-2">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_year('+count_year+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
                '<br>'+
            '</div>'
        )
        .promise()
        .done(function() {
            $(this).find('.Editdatepicker').datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years",
                autoclose: true,
            })
        })
        count_year++;
    });
    function delete_year(x) {
        $("#resuleappendyear_"+x).remove();
        count_year--;
    }

    // append size
    var count_size = 2;
    $('#edit-addsize').click(function () {
        $('#edit-appendsize').append(
            '<div id="edit-resuleappendsize_'+count_size+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="edit_width[]" class="form-control" placeholder="Width...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="edit_overall[]" class="form-control" placeholder="Overall...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="edit_diameter[]" class="form-control" placeholder="Diameter...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<button type="button" class="btn btn-danger" onclick="edit_delete_size('+count_size+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
        count_size++;
    });
    function edit_delete_size(x) {
        $("#edit-resuleappendsize_"+x).remove();
        count_size--;
    }

    $(document).ready(function() {
        $('.btn-delete-year').on('click', function () {
            var yearId = $(this).val();
            if (yearId != null) {
                $('#year_'+yearId).fadeOut(200);
                $('#resultDeleteYear').append('<input type="hidden" name="deleteyear[]" value="'+yearId+'">');
            }
        });

        $('.btn-delete-size').on('click', function () {
            var sizeId = $(this).val();
            if (sizeId != null) {
                $('#size_'+sizeId).fadeOut(200);
                $('#resultDeleteSize').append('<input type="hidden" name="deletesize[]" value="'+sizeId+'">');
            }
        });
    })
</script>