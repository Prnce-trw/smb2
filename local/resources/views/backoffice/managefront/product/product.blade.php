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
                <h5>Product / Add Product Type {{$brand->getProductType->p_type_name}} / Brand {{$brand->brand_name}} / Add
                    Product</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/indexproducttype')}}">Product Type {{$brand->getProductType->p_type_name}}</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/brand', $brand->getProductType->p_type_id)}}">Brand {{$brand->brand_name}}</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Add Product Series</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Product Series Setting</h4>
        <button type="button" class="btn btn-success addproduct" data-toggle="modal" data-target="#modal-addproduct"
            value="{{$brand->brand_id}}" data-product_type_id="{{$brand->getProductType->p_type_id}}"><i class="fa fa-plus"></i> Add Product Series</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table table-bordered tbHover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Product Image</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $key => $item)
                            <tr>
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td class="text-center"><img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}"
                                    width="100px" alt="Product Cover"></td>
                                <td class="text-middle">{{$item->product_name}}</td>
                                <td class="text-center text-middle">
                                    <a href="{{url('backoffice\addProductDetail', $item->product_id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#edit-Modal" onclick="modaledit({{$item->product_id}})"><i
                                            class="fa fa-edit"></i>
                                        Edit</button> --}}
                                    <button type="button" class="btn btn-danger" onclick="delproduct({{$item->product_id}})" value="{{$item->product_id}}"><i class="fa fa-trash-o"></i>
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

<div id="result-modaladdproduct"></div>
<div id="result-modaleditproduct"></div>

<form action="" method="post" id="deleteproduct">
    
    @csrf
</form>
@endsection
@section('js')
@include('flash-message') 
<script>
    $("#example1").DataTable();

    $(document).on('click', '.addproduct', function (e) {
        var brand_id = $(this).val();
        var product_type_id = $(this).attr('data-product_type_id');
        modalproduct(brand_id, product_type_id)
    })
    function modalproduct(brand_id, product_type_id) {
        // alert(brand_id + '\n' + product_type_id);
        $.ajax({
            url: '{{url('backoffice/addwheel')}}',
            type: 'GET',
            dataType: 'html',
            data: {
                brand_id: brand_id,
                product_type_id: product_type_id,
            },
        }).done(function (data) {
            $('#result-modaladdproduct').html(data);
            $("#modaladdproduct").modal('show');
        });
    }

    function modaledit(id) {
        $.ajax({
            url: '{{ url('backoffice/product') }}/' + id + '/edit',
            type: 'GET',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaleditproduct').html(data);
            $("#modaleditproduct").modal('show');
        });
    }
</script>

<script>
    function delproduct(id) {
        var urlaction =  '{{url('backoffice/productdestroy')}}'+'/'+id;
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
                    $( "#deleteproduct" ).attr('action',urlaction);
                    $( "#deleteproduct" ).submit();
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
