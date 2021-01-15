@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-bullhorn"></i>
            </div>
            <div class="d-inline-block">
                <h5>Advertisement</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/ads')}}">Advertisement</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Advertisement List</h4>
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
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Show</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ads as $key => $item)
                            <tr>
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td><img src="{{asset('local/storage/app/promotion/'.$item->ads_image.'')}}" width="150px"></td>
                                <td class="text-center text-middle">{!!$item->adsStatus()!!}</td>
                                <td class="text-middle text-center">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaledit({{$item->ads_id}})"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger waves-effect" onclick="delads({{$item->ads_id}})" value="{{$item->ads_id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </div>
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
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Advertisement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/ads')}}" method="POST" enctype="multipart/form-data" id="ads">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="img[]" class="file-input" id="addadsimage" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-success" onclick="document.getElementById('addadsimage').click();"><i class="fa fa-plus"></i> Add Image</button>
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
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="ads">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>
<form action="" method="post" id="deleteads">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script>
    $("#example1").DataTable();

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

    function modaledit(id)
    {
        $.ajax({
            url: '{{ url('backoffice/ads') }}/' + id + '/edit',
            type: 'GET',
            data: {
                id: id
                },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }

    function delads(id) {
        var urlaction =  '{{url('backoffice/ads')}}'+'/'+id;
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
                $( "#deleteads" ).attr('action',urlaction);
                $( "#deleteads" ).submit();
                
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
