@extends('backoffice.layouts.master')
@section('css')
<!-- lightbox Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/lightbox2/css/lightbox.min.css')}}">
<!-- sweet alert framework -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/sweetalert/css/sweetalert.css')}}">
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-newspaper-o"></i>
            </div>
            <div class="d-inline-block">
                <h5>Add News & Event</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">News & Event</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/news')}}">Add News & Event</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">News & Event Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal"><i class="fa fa-plus"></i> Create</button>
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
                                <th style="text-align: center;">Title</th>
                                <th style="text-align: center;">Content</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                            <tr>
                                <td class="text-center text-middle">{{$item->news_id}}</td>
                                <td><img src="{{asset('local/storage/app/news/'.$item->news_imgcover.'')}}" alt="" width="200px"></td>
                                <td class="text-middle">{{$item->news_title}}</td>
                                <td class="text-middle">{{ Str::limit($item->news_content, 100) }}</td>
                                <td class="text-middle">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaledit({{$item->news_id}})"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger waves-effect" onclick="delnews({{$item->news_id}})" value="{{$item->news_id}}"><i class="fa fa-trash-o"></i> Delete</button>
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
{{-- Store Banner --}}
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add News & Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/news')}}" method="POST" enctype="multipart/form-data" id="banner">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Title...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Write Something..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Date...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image Cover</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="imgcover[]" class="file-addcov" id="addcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addcov').click();"><i class="fa fa-plus"></i> Add Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewimgcov"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="banner">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>
<input type="hidden" id="urlModal" value="{{url('backoffice/editnews')}}">

<form action="" method="post" id="deletenews">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<!-- sweet alert js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    function delnews(id) {
        var urlaction =  '{{url('backoffice/news')}}'+'/'+id;
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
                    $( "#deletenews" ).attr('action',urlaction);
                    $( "#deletenews" ).submit();
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
<!-- lightbox -->
<script src="{{asset('files/bower_components/lightbox2/js/lightbox.min.js')}}"></script>

<script>
    $("#example1").DataTable();

    function previewAddImageCover() {
        var $preview = $('#previewimgcov').empty();
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
    $('.file-addcov').on("change", previewAddImageCover);
</script>

<script>
    function modaledit(id)
    {
        $.ajax({
            url: $('#urlModal').val(),
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
@endsection
