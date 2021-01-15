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
                <h5>Product / Product Type {{$producttype->p_type_name}} / Brand</h5>
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
                    <li class="breadcrumb-item"><a href="{{url('backoffice/indexproducttype')}}">Add Product Type
                            {{$producttype->p_type_name}}</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Brand</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Brand Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal"><i
            class="fa fa-plus"></i> Create</button>
    </div>
</div>

<div class="row">
    @foreach ($brand as $key => $item)
    <div class="col-sm-3">
        <div class="card h-100">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5>{{$item->brand_name}}</h5>
                    </div>
                    <div class="col-6 text-right">
                        <div class="dropdown open">
                            <button class="btn waves-effect waves-light btn-round" type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a type="button" class="dropdown-item waves-light waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaledit({{$item->brand_id}})"><i class="fa fa-edit"></i> Edit</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="dropdown-item waves-light waves-effect" onclick="delbrand({{$item->brand_id}})" value="{{$item->brand_id}}"><i class="fa fa-trash-o"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="{{asset('local/storage/app/brand/'.$item->brand_img.'')}}" width="170px" class="img-fluid" alt="product">
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>Brand No:</p>
                        <p>Total Product:</p>
                    </div>
                    <div class="col-6 text-right">
                        <p>{{$key+1}}</p>
                        <p>{{$item->countproduct}}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-12">
                        <a href="{{url('backoffice/productIndex',$item->brand_id)}}" class="btn btn-primary form-control"><i class="fa fa-cubes"></i> Product</a>
                        {{-- <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#modal-addproduct" onclick="modalproduct({{$item->brand_id}})"><i class="fa fa-plus"></i> Add Product</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- modal store Brand--}}
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/brand')}}" method="POST" enctype="multipart/form-data" id="brand">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="fkey_producttype" value="{{$producttype->p_type_id}}">
                    <!-- fkey ของ product type -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Brand Name..." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="img[]" class="file-input" id="addlogo" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addlogo').click();"><i class="fa fa-plus"></i> Add Logo</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="brand">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>
<div id="result-modaladdproduct"></div>

<form action="" method="post" id="deletebrand">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')

<script>
    function modaledit(id) {
        $.ajax({
            url: '{{url('backoffice/editbrand')}}',
            type: 'GET',
            data: {
                id: id
            },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }

    function modalproduct(id)
    {
        $.ajax({
            url: '{{url('backoffice/addwheel')}}',
            type: 'GET',
            dataType: 'html',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaladdproduct').html(data);
            $("#modaladdproduct").modal('show');
        });
    }

    // image preview
    function previewImages() {
        var $preview = $('#preview').empty();
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
    $('.file-input').on("change", previewImages);
</script>

<script>
    function delbrand(id) {
        var urlaction =  '{{url('backoffice/brand')}}'+'/'+id;
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
                $( "#deletebrand" ).attr('action',urlaction);
                $( "#deletebrand" ).submit();
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
