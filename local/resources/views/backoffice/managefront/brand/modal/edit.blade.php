<div class="modal fade show" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add News & Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/brand',$brand->brand_id)}}" method="POST" enctype="multipart/form-data" id="editbrand">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Brand Name..." value="{{$brand->brand_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image Cover</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="img[]" id="editimgcov" class="form-control Editfile-input" style="display: none;">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editimgcov').click();"><i class="fa fa-file-image-o"></i> Edit Image Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="Editpreview">
                                        <img src="{{asset('local/storage/app/brand/'.$brand->brand_img.'')}}" width="150px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editbrand">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

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