@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-cubes"></i>
            </div>
            <div class="d-inline-block">
                <h5>Backend / Car Brand {{$carbrand->car_brand_name}} / Add Car Model
                    Product</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Backend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/car')}}">Car Brand {{$carbrand->car_brand_name}}</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Add Car Model </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Car Model Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#modal-addcarmodel"><i
            class="fa fa-plus"></i>Add Model</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table table-bordered tbHover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Model Name</th>
                                <th style="text-align: center;">Year</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carmodel as $key => $item)
                            <tr>
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td class="text-middle">{{$item->car_model_name}}</td>
                                <td class="text-middle">
                                    @foreach ($item->getCarYears as $number => $value)
                                        @if ($number % 5 == 0)
                                            <br>
                                        @endif
                                        {{$value->car_year_name}},
                                    @endforeach
                                </td>
                                <td class="text-center text-middle">
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#edit-Modal" onclick="modaledit({{$item->car_model_id}})"><i
                                            class="fa fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger" onclick="delcarmodel({{$item->car_model_id}})" value="{{$item->car_model_id}}"><i class="fa fa-trash-o"></i>
                                        Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-addcarmodel" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Car Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/storecarmodel')}}" method="POST" enctype="multipart/form-data" id="addcarmodel">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="carbrand_id" value="{{$carbrand->car_brand_id}}">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car Model</label>
                        <div class="col-sm-10">
                            <input type="text" name="model" class="form-control" placeholder="Car Model...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Vehicle Year</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="yearS" placeholder="Year Start...">
                            {{-- <input type="text" class="form-control datepicker" name="yearS[]" placeholder="Year End..."> --}}
                            {{-- <div id="appendyear"></div>
                            <button type="button" class="btn btn-primary" id="addyear">Add Year</button> --}}
                        </div>
                        <div class="col-sm-5">
                            {{-- <input type="text" class="form-control datepicker" name="yearS[]" placeholder="Year Start..."> --}}
                            <input type="text" class="form-control datepicker" name="yearE" placeholder="Year End...">
                            {{-- <div id="appendyear"></div>
                            <button type="button" class="btn btn-primary" id="addyear">Add Year</button> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PCD</label>
                        <div class="col-sm-10">
                            <input type="text" name="pcd" class="form-control" placeholder="PCD...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tire Size</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="number" name="width[]" class="form-control" placeholder="Width...">
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" name="overall[]" class="form-control" placeholder="Overall...">
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" name="diameter[]" class="form-control" placeholder="Diameter...">
                                </div>
                            </div>
                            <div id="appendsize"></div>
                            <button class="btn btn-primary" type="button" id="addsize">Add Size</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addcarmodel">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>
<form action="" method="post" id="deletecarmodel">
    
    @csrf
</form>
@endsection
@section('js')
@include('flash-message')

<script>
    $("#example1").DataTable();

    $(function() {
        $(".datepicker").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years",
            autoclose: true,
        })
    })
    
    // append year
    var count_year = 2;
    $('#addyear').click(function () {
        $('#appendyear').append(
            '<div id="resuleappendyear_'+count_year+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-sm-10">'+
                        '<input type="text" class="form-control datepicker" name="year[]" placeholder="Year...">'+
                    '</div>'+
                    '<div class="col-2">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_year('+count_year+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
        .promise()
        .done(function() {
            $(this).find('.datepicker').datepicker({
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
    $('#addsize').click(function () {
        $('#appendsize').append(
            '<div id="resuleappendsize_'+count_size+'">'+
                '<br>'+
                '<div class="row">'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="width[]" class="form-control" placeholder="Width...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="overall[]" class="form-control" placeholder="Overall...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<input type="number" name="diameter[]" class="form-control" placeholder="Diameter...">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<button type="button" class="btn btn-danger" onclick="delete_size('+count_size+')"><i class="fa fa-trash-o"></i></button>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
        count_size++;
    });
    function delete_size(x) {
        $("#resuleappendsize_"+x).remove();
        count_size--;
    }

    function modaledit(id) {
        $.ajax({
            url: '{{url('backoffice/edit_carmodel/')}}'+'/'+id,
            type: 'GET',
            data: {
                id: id
            },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }

    function delcarmodel(id) {
        var urlaction =  '{{url('backoffice/carmodeldestroy')}}'+'/'+id;
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            }).then((result) => {
                // alert(result.value);
                if (result.value) {
                    //   alert("ผ่าน");
                    //   alert("#deleteclass_"+id );
                    $( "#deletecarmodel" ).attr('action',urlaction);
                    $( "#deletecarmodel" ).submit();
                    // $(this).closest('form').submit();
                    
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) 
                {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Undelete Data.',
                        'error'
                    )
                }
            })
        }
</script>
@endsection
