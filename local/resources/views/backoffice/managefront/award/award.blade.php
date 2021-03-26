@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-trophy"></i>
            </div>
            <div class="d-inline-block">
                <h5>Add Award</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Award</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/award')}}">Add Award</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Award Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" onclick="addaward()" data-target="#large-Modal"><i class="fa fa-plus"></i> Create</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Car</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($award as $key => $item)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td class="text-center text-middle">{{ $item->getCarBrand->car_brand_name }} {{ $item->getCarModel->car_model_name }}</td>
                                <td class="text-center text-middle">
                                    <a href="{{url('backoffice/award',$item->award_id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                    <button type="button" class="btn btn-danger" onclick="delaward({{$item->award_id}})" value="{{$item->award_id}}"><i class="fa fa-trash-o"></i>
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

<div id="result-modaladdaward"></div>
<form action="" method="post" id="deleteaward">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script>
    $("#example1").DataTable();

    function addaward() { 
        $.ajax({
            url: '{{ url('backoffice/award/create') }}',
            type: 'GET',
        }).done(function (data) {
            $('#result-modaladdaward').html(data);
            $("#modaladdaward").modal('show');
        });
    }

    function delaward(id) {
        var urlaction =  '{{url('backoffice/award')}}'+'/'+id;
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
                $( "#deleteaward" ).attr('action',urlaction);
                $( "#deleteaward" ).submit();
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
