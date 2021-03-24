@extends('backoffice.layouts.master')
@section('css')
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<!-- sweet alert framework -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/sweetalert/css/sweetalert.css')}}">
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-bookmark"></i>
            </div>
            <div class="d-inline-block">
                <h5>Add Promotion</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Promotion</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/promotion')}}">Add Promotion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Promotion Seting</h4>
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
                                <th style="text-align: center;">Show</th>
                                <th style="text-align: center;">Expire</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promotion as $key => $item)
                            <tr>
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td class="text-center"><img src="{{asset('local/storage/app/promotion/'.$item->promotion_img.'')}}" alt="" width="200px"></td>
                                <td class="text-middle">{{$item->promotion_header}}</td>
                                <td class="text-center text-middle">{!!$item->show()!!}</td>
                                <td class="text-center text-middle">{!!$item->checkDateExpire()!!}</td>
                                <td class="text-middle text-center">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-Modal" onclick="modaleditpromotion({{$item->promotion_id}})"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger waves-effect" onclick="delpromotion({{$item->promotion_id}})" value="{{$item->promotion_id}}"><i class="fa fa-trash-o"></i> Delete</button>
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

{{-- Store Promotion --}}
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Promotion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/promotion')}}" method="POST" enctype="multipart/form-data" id="addpromotion" onsubmit="return addpromotion()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Header <span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="header" placeholder="Header...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" class="formcontrol summernote" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Duration Time <span style="color: #FF5370;">*</span></span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Promotion Will Start and End At.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-4"><label class="col-sm-2 col-form-label">Start At.</label></div>
                                        <div class="col-8">
                                            <input type="date" class="form-control" name="datestart" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-4"><label class="col-sm-2 col-form-label">End At.</label></div>
                                        <div class="col-8">
                                            <input type="date" class="form-control" name="dateend" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Image Cover</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="img[]" class="file-img" id="addimg" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addimg').click();"><i class="fa fa-plus"></i> Add Image Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewimg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Banner</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="banner[]" class="file-banner" id="addbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addbanner').click();"><i class="fa fa-plus"></i> Add Banner</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewbanner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addpromotion">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<div id="result-modal"></div>

<form action="" method="post" id="deletepromotion">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $("#example1").DataTable();
    $(document).ready(function () {
        $('.summernote').summernote({
            placeholder: 'Write Something...',
            tabsize: 2,
            height: 200,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    })

    function modaleditpromotion(id)
    {
        $.ajax({
            url: '{{ url('backoffice/promotion') }}/' + id + '/edit',
            type: 'GET',
            data: {
                id: id
                },
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#editmodal").modal('show');
        });
    }

    function previewImages() {
        var $preview = $('#previewimg').empty();
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
    $('.file-img').on("change", previewImages);

    function previewBanner() {
        var $preview = $('#previewbanner').empty();
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
    $('.file-banner').on("change", previewBanner);
</script>

<!-- sweet alert js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    function delpromotion(id) {
        var urlaction =  '{{url('backoffice/promotion')}}'+'/'+id;
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
                    $( "#deletepromotion" ).attr('action',urlaction);
                    $( "#deletepromotion" ).submit();
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

    function addpromotion () {
        var header = document.forms["addpromotion"]["header"].value;
        var datestart = document.forms["addpromotion"]["datestart"].value;
        var dateend = document.forms["addpromotion"]["dateend"].value;
        if (header == "", datestart == "", dateend == "") {
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
