@extends('backoffice.layouts.master')
@section('css')
<!-- lightbox Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/lightbox2/css/lightbox.min.css')}}">
<!-- sweet alert framework -->
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/sweetalert/css/sweetalert.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
<!-- Sortable -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="fa fa-user"></i>
            </div>
            <div class="d-inline-block">
                <h5>Contact</h5>
                <span>For Staff Only</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="">Frontend</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('backoffice/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Contact Setting</h4>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <form action="{{url('backoffice/contact',$contact->contact_id)}}" method="POST"
                enctype="multipart/form-data" id="contact">
                @csrf
                {{method_field('PUT')}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Header..."
                                    value="{{$contact->contact_title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Detail</label>
                            <div class="col-sm-10">
                                <textarea name="detail" id="content" cols="30" rows="10"
                                    class="form-control" placeholder="Detail...">{{$contact->contact_detail}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Open - Close Time</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="opentime" placeholder="Header..."
                                    value="{{$contact->contact_opentime}}">
                                <div class="row col-12">
                                    <p>Now is: </p>&nbsp;<strong id="openclose"></strong>&nbsp; (<p id="clock"></p>)
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Saturday</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sat" placeholder="Saturday..."
                                    value="{{$contact->contact_sat}}">
                            </div>
                        </div>
                        <br>
                        <h4 class="sub-title">Social Setting</h4>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Hotline</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tel" placeholder="Hotline..."
                                    value="{{$contact->contact_tell}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><i style="color: #3b5998" class="fa-2x ti-facebook"></i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook..."
                                    value="{{$contact->contact_facebook}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><i style="color: #00acee" class="fa-2x ti-twitter-alt"></i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter" placeholder="Twitter..."
                                    value="{{$contact->contact_twitter}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><i style="color: #e62117" class="fa-2x ti-youtube"></i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="youtube" placeholder="Youtube..."
                                    value="{{$contact->contact_youtube}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><i style="color: #00B900" class="icofont icofont-brand-line-messenger fa-2x"></i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="line" placeholder="Line..."
                                    value="{{$contact->contact_line}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><i style="color: crimson" class="fa-2x ti-location-pin"></i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="linkgooglemap" placeholder="Google Map..."
                                    value="{{$contact->contact_linkmap}}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary" form="contact">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="sub-title">Another Branch Setting</h4>
        <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#large-Modal"><i
                class="fa fa-plus"></i> Create</button>
    </div>
    <div class="card-block">
        <div class="col-sm-12">
            <div class="row">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table tbHover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Branch Name</th>
                                <th style="text-align: center;">Detail</th>
                                <th style="text-align: center;">Management</th>
                            </tr>
                        </thead>
                        <tbody class="row_position">
                            @foreach ($contact_branch as $key => $item)
                            <tr id="{{$item->contact_id}}">
                                <td class="text-center text-middle">{{$key+1}}</td>
                                <td class="text-middle">{{$item->contact_title}}</td>
                                <td class="text-middle">{{$item->contact_detail}}</td>
                                <td class="text-middle text-center">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning waves-effect" data-toggle="modal"
                                                data-target="#edit-Modal"
                                                onclick="modaleditcontact({{$item->contact_id}})">
                                                <input type="hidden" id="urlModal"
                                                    value="{{route('contact.edit', $item->contact_id)}}">
                                                <i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger waves-effect"
                                                onclick="delcontact({{$item->contact_id}})"
                                                value="{{$item->contact_id}}"><i class="fa fa-trash-o"></i>
                                                Delete</button>
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
                <h4 class="modal-title">Create Another Branch</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/contact')}}" method="POST" enctype="multipart/form-data" id="banner">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><span class="mytooltip tooltip-effect-5">
                            <span class="tooltip-item">Image Cover</span>
                            <span class="tooltip-content clearfix">
                                <span class="tooltip-text">Choose One.</span>
                            </span>
                        </span></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="imgcov[]" class="file-input" id="addcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addcov').click();"><i class="fa fa-plus"></i> Add Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Branch Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Branch Name...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="tel" class="form-control" placeholder="Phone...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea name="detail" class="form-control" cols="30" rows="10" placeholder="Write Something..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Address..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Link Google Map</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="linkgooglemap" placeholder="Link Google Map...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                            <span class="tooltip-item">Banner Gallery</span>*
                            <span class="tooltip-content clearfix">
                                <span class="tooltip-text">Multiple.</span>
                            </span>
                        </span></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="banner[]" class="Bannerfile-input" id="addbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg" multiple>
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addbanner').click();"><i class="fa fa-photo"></i> Add Banner Gallery</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewBanner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Map</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="map[]" class="filemap" id="addmap" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addmap').click();"><i class="fa fa-map"></i> Add Map</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewMap"></div>
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

<form action="" method="post" id="deletecontact">

    @csrf
    {{ method_field('delete') }}
</form>
@endsection
@section('js')
@include('flash-message')
<script>
    $("#example1").DataTable();

    function modaleditcontact(id) {
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

    function sort(id) {
        $.ajax({
            url: '{{ url('branch_sort') }}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: id,
            },
        }).done(function (data) {
            alert('Branch has been Updated!');
            window.location.reload();
        });
    }

    $( ".row_position" ).sortable({
        delay: 0,
        stop: function() {
            var selectedData = new Array();
            $('.row_position tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            sort(selectedData);
        }
    });

    // clock
    function updateClock() {
        var currentTime = new Date();
        // Operating System Clock Hours for 12h clock
        // console.log(currentTime);
        var currentHoursAP = currentTime.getHours();
        // Operating System Clock Hours for 24h clock
        var currentHours = currentTime.getHours();
        // Operating System Clock Minutes
        var currentMinutes = currentTime.getMinutes();
        // Operating System Clock Seconds
        var currentSeconds = currentTime.getSeconds();
        // Adding 0 if Minutes & Seconds is More or Less than 10
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
        // Picking "AM" or "PM" 12h clock if time is more or less than 12
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
        // transform clock to 12h version if needed
        currentHoursAP = (currentHours > 12) ? currentHours - 12 : currentHours;
        // transform clock to 12h version after mid night
        currentHoursAP = (currentHoursAP == 0) ? 12 : currentHoursAP;
        // display first 24h clock and after line break 12h version
        var currentTimeString = currentHours + " : " + currentMinutes + " : " + currentSeconds;
        // print clock js in div #clock.
        $("#clock").html(currentTimeString);
    }
    $(document).ready(function () {
        setInterval(updateClock, 0);
    });

    var today = new Date().getHours();
    if (today >= 9.00 && today <= 19.00) {
        document.getElementById('openclose').innerHTML = "<span style='color: green;'>OPEN<span>";
    } else {
        document.getElementById('openclose').innerHTML = "<span style='color: red;'>CLOSE<span>";
    }

    // image Cover preview
    function previewIBanners() {
        var $preview = $('#previewBanner').empty();
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
    $('.Bannerfile-input').on("change", previewIBanners);

    // banner preview
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

    // map preview
    function previewMap() {
        var $preview = $('#previewMap').empty();
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
    $('.filemap').on("change", previewMap);
</script>

<!-- sweet alert js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    function delcontact(id) {
        var urlaction = '{{url('backoffice/contact')}}' + '/' + id;
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
                $("#deletecontact").attr('action', urlaction);
                $("#deletecontact").submit();
                // $(this).closest('form').submit();

                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'ยกเลิกการลบข้อมูล',
                    'error'
                )
            }
        })
    }

</script>
@endsection
