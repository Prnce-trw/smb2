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
                <i class="fa fa-picture-o"></i>
            </div>
            <div class="d-inline-block">
                <h5>About us / Banner</h5>
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
                    <li class="breadcrumb-item"><a href="{{url('backoffice/aboutbanner')}}">Banner</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>Banner Setting</h5>
        {{-- <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal"
            onclick="create()">Create</button> --}}
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <div class="thumbnail">
                        <div class="thumb">
                            <a href="{{asset('local/storage/app/banner/'.$banner->banner_name.'')}}" data-lightbox="1"
                                data-title="{{$banner->banner_page}}">
                                <img src="{{asset('local/storage/app/banner/'.$banner->banner_name.'')}}" alt=""
                                    class="img-fluid img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="{{url('backoffice/homebanner',$banner->banner_id)}}" method="POST"
                                enctype="multipart/form-data" id="edit_banner" name="changebanner" onsubmit="return checkform()">
                                @csrf
                                {{method_field('PUT')}}
                                <input type="file" class="btn btn-warning" name="banner" id="">
                            </form>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" form="edit_banner" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('flash-message')
<script src="{{asset('files/bower_components/lightbox2/js/lightbox.min.js')}}"></script>
@endsection
