@extends('backoffice.layouts.master')
@section('css')
<!-- lightbox Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/lightbox2/css/lightbox.min.css')}}">
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-user"></i>
            </div>
            <div class="d-inline-block">
                <h5>About us / Content</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">About</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/about')}}">Content</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>About Us Setting</h5>
        {{-- <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal"
            onclick="create()">Create</button> --}}
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <h4 class="sub-title">Main Content</h4>
            <form action="{{url('backoffice/about',$about->about_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Heading</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="heading" placeholder="Heading..." value="{{$about->about_heading}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" rows="5" cols="5" class="form-control"
                                    placeholder="Content...">{{$about->about_content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" id="">
                        <div class="thumbnail">
                            <div class="thumb">
                                <a href="{{asset('local/storage/app/about/'.$about->about_img.'')}}" data-lightbox="1" data-title="">
                                    <img src="{{asset('local/storage/app/about/'.$about->about_img.'')}}" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <input type="file" class="form-control file-input" name="editimg[]" id="editimg" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                            <button type="button" class="btn btn-warning" onclick="document.getElementById('editimg').click();"><i class="fa fa-file-image-o"></i> Edit Image</button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h4 class="sub-title">Sub Content</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea name="subcontent" rows="5" cols="5" class="form-control"
                                    placeholder="Content...">{{$about->about_subcontent}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Highlight</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="highlight" placeholder="Highlight..." value="{{$about->about_hilight}}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('flash-message')
<script src="{{asset('files/bower_components/lightbox2/js/lightbox.min.js')}}"></script>
<script>
    // image preview
    function EditpreviewImages() {
        var $preview = $('#Editpreview').empty();
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
    $('.Editfile-input').on("change", EditpreviewImages);
</script>
@endsection
