<div class="modal fade" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Another Branch</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/contact',$contact->contact_id)}}" method="POST" enctype="multipart/form-data" id="contactbranch">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Image Cover
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="editimgcov[]" class="editfilecov" id="editcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editcov').click();"><i class="fa fa-edit"></i> Edit Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="editpreviewCover">
                                        <img src="{{asset('local/storage/app/contact/'.$contact->contact_img.'')}}" width="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Branch Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Branch Name..." value="{{$contact->contact_title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea name="detail" class="form-control" cols="30" rows="10" placeholder="Write Something...">{{$contact->contact_detail}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Address...">{{$contact->contact_address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Link Google Map</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="linkgooglemap" placeholder="Link Google Map..." value="{{$contact->contact_linkmap}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hotline</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tell" placeholder="Tell..." value="{{$contact->contact_tell}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Banner Gallery
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Multiple.</span>
                                </span>
                            </span>
                            <input type="file" name="addbanner[]" class="addfilebanner" id="editaddbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg" multiple>
                            <button type="button" class="btn btn-primary form-control" onclick="document.getElementById('editaddbanner').click();"><i class="fa fa-photo"></i> Add Banner Gallery</button>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                @foreach ($contact->getContactBanners as $key => $item)
                                <div class="col-sm-4 text-center" style="border: 1px solid gray;" id="del_{{$item->cb_id}}">
                                        <img src="{{asset('local/storage/app/contact/'.$item->cb_name.'')}}" width="150">
                                    <input type="file" name="editbanner[{{$item->cb_id}}]" class="editfilebanner" id="editbanner_{{$item->cb_id}}" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editbanner_{{$item->cb_id}}').click();"><i class="fa fa-edit"></i> Edit Banner ({{$key+1}})</button>
                                    <button type="button" class="btn btn-danger" id="deletebanner" value="{{$item->cb_id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                                @endforeach
                                <div id="previewaddBanner"></div>
                                <div id="appendDeleteBanner"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Map
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="editmap[]" class="editfilemap" id="editmap" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editmap').click();"><i class="fa fa-edit"></i> Edit Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="editpreviewMap">
                                        <img src="{{asset('local/storage/app/contact/'.$contact->contact_imgmap.'')}}" width="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="contactbranch">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Edit image Cover preview
    function editpreviewIBanners() {
        var $preview = $('#editpreviewCover').empty();
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
    $('.editfilecov').on("change", editpreviewIBanners);

    // Add image banner preview
    function addpreviewIBanners() {
        var $preview = $('#previewaddBanner').empty();
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
    $('.addfilebanner').on("change", addpreviewIBanners);

    // edit Map preview
    function editpreviewIMap() {
        var $preview = $('#editpreviewMap').empty();
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
    $('.editfilemap').on("change", editpreviewIMap);

    // delete banner
    $(document).on('click', '#deletebanner', function () {
        var bannerId = $(this).val();
        if (bannerId != null) {
            $('#del_'+bannerId+'').fadeOut()
            $('#appendDeleteBanner').append('<input type="hidden" name="deletebanner[]" value="'+bannerId+'">');
        }
    })
</script>