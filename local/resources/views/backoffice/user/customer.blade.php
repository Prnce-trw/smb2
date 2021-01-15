@extends('backoffice.layouts.master')
@section('css')

@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-group"></i>
            </div>
            <div class="d-inline-block">
                <h5>Customer</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Backend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">User</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/customerIndex')}}">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Customer Setting</h4>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-addcustomer"
            onclick="modaladdcustomer()"><i class="fa fa-plus"></i> Add Account</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Last Login</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $key => $item)
                            <tr>
                                <td class="text-middle text-center">
                                    <div class="img-round text-center {{$bg[array_rand($bg)]}}">
                                        @if ($item->user_img == 'nopic.png')
                                        <strong>{{$item->name[0]}}{{$item->user_lname[0]}}</strong>
                                        @else
                                        <img src="{{asset('local/storage/app/userprofile/'.$item->user_img.'')}}" alt="">
                                        @endif
                                    </div>
                                </td>
                                <td class="text-middle">{{$item->name}} {{$item->user_lname}}</td>
                                <td class="text-center text-middle">{{$item->user_phone}}</td>
                                <td class="text-center text-middle">{{date('d/m/Y H:i:s', strtotime($item->last_login_at))}}</td>
                                <td class="text-center text-middle">
                                    <div class="dropdown-primary dropdown open">
                                        <button class="btn btn-outline-primary btn-round dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">More</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" style="z-index: 999; position: static;">
                                            <a class="dropdown-item waves-light waves-effect" href="{{url('backoffice/profile', $item->user_id)}}"><i class="fa fa-user"></i> Profile</a>
                                            <a class="dropdown-item waves-light waves-effect" onclick="modaledit({{$item->user_id}})"><i class="fa fa-edit"></i> Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-light waves-effect" onclick="deluser({{$item->user_id}})" value="{{$item->user_id}}"><i class="fa fa-trash-o"></i> Delete</a>
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

@endsection
@section('js')
@include('flash-message')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script>
    $("#example1").DataTable();

    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').html();
            }
        });
    });

    function modaladdadmin() {
        $.ajax({
            url: '{{url('backoffice/user/create')}}',
            type: 'GET',
            dataType: 'html',
        }).done(function (data) {
            $('#result-modaladdadmin').html(data);
            $("#modaladdadmin").modal('show');
        });
    }

    function modaledit(id) {
        $.ajax({
            url: '{{ url('backoffice/user') }}/' + id + '/edit',
            type: 'GET',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaledituser').html(data);
            $("#modaledituser").modal('show');
        });
    }

    function checkPasswordStrength() {
        var number = /([0-9])/;
        var alphabets = /([a-zA-Z])/;
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        if ($('#password').val().length < 6) {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('weak-password');
            $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
        } else {
            if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('strong-password');
                $('#password-strength-status').html("Strong");
            } else {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('medium-password');
                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
            }
        }
    }

    function deluser(id) {
        var urlaction =  '{{url('backoffice/user')}}'+'/'+id;
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
                    $( "#deleteuser" ).attr('action',urlaction);
                    $( "#deleteuser" ).submit();
                    
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
