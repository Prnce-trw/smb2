@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-history"></i>
            </div>
            <div class="d-inline-block"> 
                <h5>Activity Log</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Backend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/activitylog')}}">Activity Log </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Activity Log List</h4>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="footer-select" class="table table-bordered tbHover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Site Map</th>
                                <th style="text-align: center;">URL</th>
                                <th style="text-align: center;">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log as $key => $item)
                            <tr>
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td class="text-middle">{{$item->getUser()}}</td>
                                <td class="text-middle">{{$item->log_description}}</td>
                                <td class="text-middle text-center">{{$item->getSitemap->sitemap_name}}</td>
                                <td class="text-middle">{{$item->log_url}}</td>
                                <td class="text-middle text-center">{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Site Map</th>
                                <th style="text-align: center;">URL</th>
                                <th style="text-align: center;">Created At</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
@include('flash-message')
<script src="{{asset('files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script>
    $("#example1").DataTable();
</script>
@endsection
