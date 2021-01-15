@extends('backoffice.layouts.master')
@section('css')
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-car"></i>
            </div>
            <div class="d-inline-block">
                <h5>Add Cars</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Backend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Cars</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/car')}}">Add Cars</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="sub-title">Car Setting</h4>
                <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal"><i
                    class="fa fa-plus"></i> Create Brand</button>
            </div>
            <div class="col-sm-6">
                <h4 class="sub-title">Total</h4>
                <div class="row">
                    <div class="col-6">
                        <p>Total Brand</p>
                        <p>Total Car Model</p>
                    </div>
                    <div class="col-6">
                        <p>{{$totalcarbrand}}</p>
                        <p>{{$totalcarmodel}}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row">
    @foreach ($carbrand as $key => $item)
    <div class="col-sm-4">
        <div class="card h-100">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5>{{$item->car_brand_name}}</h5>
                    </div>
                    <div class="col-6 text-right">
                        <div class="dropdown open">
                            <button class="btn waves-effect waves-light btn-round" type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a type="button" class="dropdown-item waves-light waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaledit({{$item->car_brand_id}})"><i class="fa fa-edit"></i> Edit</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="dropdown-item waves-light waves-effect" onclick="delcarbrand({{$item->car_brand_id}})" value="{{$item->car_brand_id}}"><i class="fa fa-trash-o"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="{{asset('local/storage/app/carbrandlogo/'.$item->car_brand_logo.'')}}" width="150">
                </div>
                <hr>
                <div style="height: 20px;"></div>
                <div class="row">
                    <div class="col-6">
                        <p>Brand No:</p>
                        <p>Model:</p>
                    </div>
                    <div class="col-6 text-right">
                        <p>{{$key+1}}</p>
                        <p>{{$item->countcarmodel}}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{url('backoffice/indexcarmodel',$item->car_brand_id)}}" class="btn btn-primary form-control"><i class="fa fa-cubes"></i> Add Model</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
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
            <form action="{{url('backoffice/car')}}" method="POST" enctype="multipart/form-data" id="addcarbrand">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Brand Logo</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="brandlogo[]" class="form-control file-input" id="addlogo" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addlogo').click();"><i class="fa fa-plus"></i> Add Logo</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Car Brand</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="brandname" placeholder="Car Brand...">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addcarbrand">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>

<form action="" method="post" id="deletecarbrand">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script>
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

    function modaledit(id) {
        $.ajax({
            url: '{{url('backoffice/car/')}}'+'/'+id+'/edit',
            type: 'GET',
            data: {
                id: id
            },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }
</script>

<script>
    function delcarbrand(id) {
        var urlaction =  '{{url('backoffice/car')}}'+'/'+id;
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
                if (result.value) {
                    $( "#deletecarbrand" ).attr('action',urlaction);
                    $( "#deletecarbrand" ).submit();
                    
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
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
