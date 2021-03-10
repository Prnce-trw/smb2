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
                <h5>Product / Add Product</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Product</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/product')}}">Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Product Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal"><i
            class="fa fa-plus"></i> Create</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table table-bordered tbHover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($producttype as $item)
                            <tr>
                                <td class="text-center text-middle">{{$item->p_type_id}}</td>
                                <td class="text-middle">{{$item->p_type_name }}</td>
                                <td class="text-middle">
                                    <a href="{{ url('backoffice/brand',$item->p_type_id) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</a>
                                    <button class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaleditproducttype({{$item->p_type_id}})"><i class="fa fa-edit"></i> Edit</button>
                                    {{-- <input type="hidden" id="urlModal" value="{{url('backoffice/editproducttype', $item->p_type_id)}}"> --}}
                                    <button class="btn btn-danger waves-effect" onclick="delproducttype({{$item->p_type_id}})" value="{{$item->p_type_id}}"><i class="fa fa-trash-o"></i> Delete</button>
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

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/storeproducttype')}}" method="POST" enctype="multipart/form-data" id="addproducttype" onsubmit="return addproducttype()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name<span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Product Name...">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addproducttype">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>

<form action="" method="post" id="deleteproducttype">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script> 
    $("#example1").DataTable();

    function modaleditproducttype(id)
    {
        $.ajax({
            url: '{{url('backoffice/editproducttype')}}',
            type: 'GET',
            data: {
                id: id
                },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }

    function delproducttype(id) {
        var urlaction =  '{{url('backoffice/product')}}'+'/'+id;
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
                $( "#deleteproducttype" ).attr('action',urlaction);
                $( "#deleteproducttype" ).submit();
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

    function addproducttype () {
        var name = document.forms["addproducttype"]["name"].value;
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
@endsection
