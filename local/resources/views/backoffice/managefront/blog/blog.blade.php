@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="icofont icofont-social-blogger"></i>
            </div>
            <div class="d-inline-block">
                <h5>Blog</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/blog')}}">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Blog Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal" onclick="addblog()"><i class="fa fa-plus"></i> Create</button>
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
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $key => $item)
                                <tr>
                                    <td class="text-center text-middle">{{$key+1}}</td>
                                    <td class="text-middle">
                                        <img src="{{asset('local/storage/app/blog/'.$item->blog_banner.'')}}" width="150" alt="">
                                    </td>
                                    <td class="text-middle">{{$item->blog_title}}</td>
                                    <td class="text-middle text-center">{{date("d / m / Y", strtotime($item->blog_date))}}</td>
                                    <td class="text-center text-middle">
                                        <button type="button" class="btn btn-warning waves-effect" onclick="editblog({{$item->blog_id}})"><i class="fa fa-edit"></i> Edit</button>
                                        <button type="button" class="btn btn-danger waves-effect"  onclick="delblog({{$item->blog_id}})"><i class="fa fa-trash-o"></i> Delete</button>
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
<div id="result-modal"></div>
<div id="result-modaledit"></div>

<form action="" method="post" id="deleteblog">
    
    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script>
    function addblog() {
        $.ajax({
            url: '{{url('backoffice/blog/create')}}',
            type: 'GET',
        }).done(function (data) {
            $('#result-modal').html(data);
            $("#addblog").modal('show');
        });
    }

    function editblog(id) {
        $.ajax({
            url: '{{ url('backoffice/blog') }}/' + id + '/edit',
            type: 'GET',
            data: {
                id: id
            },
        }).done(function (data) {
            $('#result-modaledit').html(data);
            $("#editblog").modal('show');
        });
    }

    function delblog(id) {
        var urlaction =  '{{url('backoffice/blog')}}'+'/'+id;
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
                $( "#deleteblog" ).attr('action',urlaction);
                $( "#deleteblog" ).submit();
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
