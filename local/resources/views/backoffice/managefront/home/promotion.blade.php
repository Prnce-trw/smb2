@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-bookmark"></i>
            </div>
            <div class="d-inline-block">
                <h5>Home / Promotion</h5>
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
                    <li class="breadcrumb-item"><a href="{{url('backoffice/homepromotion')}}">Promotion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Promotion Seting</h4>
        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal"
            onclick="create()">Create</button>
    </div>
    <div class="card-block">
        
    </div>
</div>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Banner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/homebanner')}}" method="POST" enctype="multipart/form-data" id="banner">
                @csrf
                <div class="modal-body">
                    <h5>Add Banner</h5>
                    <input type="file" name="banner[]" class="form-control" id="">
                    <input type="text" name="page" class="form-control" id="" placeholder="Page...">
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

@endsection
@section('js')
@include('flash-message')
@endsection
