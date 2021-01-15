<div class="modal fade show" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Promotion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/promotion',$promotion->promotion_id)}}" method="POST" enctype="multipart/form-data" id="promotion">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Header</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="header" placeholder="Header..." value="{{$promotion->promotion_header}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="summernote2" class="formcontrol" cols="30" rows="10">{!! $promotion->promotion_content !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Duration Time</span>
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
                                            <input type="date" class="form-control" name="datestart" id="" value="{{$promotion->promotion_date_start}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-4"><label class="col-sm-2 col-form-label">End At.</label></div>
                                        <div class="col-8">
                                            <input type="date" class="form-control" name="dateend" value="{{ date('Y-m-d', strtotime('-1 day', strtotime($promotion->promotion_date_end))) }}">
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
                                    <input type="file" name="editimg[]" class="file-editimg" id="editimg" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editimg').click();"><i class="fa fa-plus"></i> Add Image Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previeweditimg">
                                        <img src="{{asset('local/storage/app/promotion/'.$promotion->promotion_img.'')}}" alt="" width="200px">
                                    </div>
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
                                    <input type="file" name="editbanner[]" class="file-editbanner" id="editbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editbanner').click();"><i class="fa fa-plus"></i> Add Banner</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previeweditbanner">
                                        <img src="{{asset('local/storage/app/promotion/'.$promotion->promotion_banner.'')}}" alt="" width="200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Show</label>
                        <div class="col-sm-10">
                            <div class="border-checkbox-section">
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" id="checkbox{{$promotion->promotion_id}}" name="show" value="1" {{$promotion->promotion_show == 1 ? 'checked' : ''}}>
                                    <label class="border-checkbox-label" for="checkbox{{$promotion->promotion_id}}"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="promotion">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    // หน้า edit
    $('#summernote2').summernote({
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

    function previewEditImageCover() {
        var $preview = $('#previeweditimg').empty();
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
    $('.file-editimg').on("change", previewEditImageCover);

    function previewEditBanner() {
        var $preview = $('#previeweditbanner').empty();
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
    $('.file-editbanner').on("change", previewEditBanner);
</script>