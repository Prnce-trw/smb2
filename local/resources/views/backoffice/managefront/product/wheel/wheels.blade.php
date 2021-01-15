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
                <h5>Wheels</h5>
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
                    <li class="breadcrumb-item"><a href="{{ url('backoffice/indexproducttype') }}">Product Type </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url('backoffice/product') }}">Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
@include('flash-message')

@endsection
