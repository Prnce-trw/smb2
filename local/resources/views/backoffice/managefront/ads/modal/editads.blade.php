<div class="modal fade show" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Advertisement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/ads',$ads->ads_id)}}" method="POST" enctype="multipart/form-data" id="editbrand">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{asset('local/storage/app/promotion/'.$ads->ads_image.'')}}" alt="Ads" width="150px">
                                </div>
                                <div class="col-6">
                                    <div id="previeweditads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="file" name="editimg[]" class="editads" id="editadsimage" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                            <button type="button" class="btn btn-warning" onclick="document.getElementById('editadsimage').click();"><i class="fa fa-edit"></i> Edit Image</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Show Status</label>
                        <div class="col-sm-10 form-radio">
                            <div class="radio radiofill radio-primary radio-inline">
                                <label>
                                    <input type="radio" name="showads" value="1" {{ $ads->ads_show_status == 1 ? "checked" : "" }}>
                                    <i class="helper"></i>Show
                                </label>
                            </div>
                            <div class="radio radiofill radio-danger radio-inline">
                                <label>
                                    <input type="radio" name="showads" value="0" {{ $ads->ads_show_status == 0 ? "checked" : "" }}>
                                    <i class="helper"></i>Off
                                </label>
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
    function previewEditAds() {
        var $previewlogo = $('#previeweditads').empty();
        if (this.files) $.each(this.files, readAndPreview);
        function readAndPreview(i, file) {
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
            return alert(file.name +" is not an image");
        }
        var reader = new FileReader();
        $(reader).on("load", function() {
            $previewlogo.append($("<img>", {src:this.result, height:150}));
        });
        reader.readAsDataURL(file);
        }
    }
    $('.editads').on("change", previewEditAds);
</script>