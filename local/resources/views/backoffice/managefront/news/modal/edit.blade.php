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
            <form action="{{url('backoffice/news',$news->news_id)}}" method="POST" enctype="multipart/form-data" id="editnews">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Title..." value="{{$news->news_title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="content" id="" cols="30" rows="10"
                                placeholder="Write Something...">{{$news->news_content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Date..." value="{{$news->news_date}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image Cover</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="editimgcover[]" class="file-editcov" id="editcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editcov').click();"><i class="fa fa-plus"></i> Edit Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewEditimgcov">
                                        <img src="{{asset('local/storage/app/news/'.$news->news_imgcover.'')}}" width="150" alt="Image Cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editnews">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function previewEditImageCover() {
        var $preview = $('#previewEditimgcov').empty();
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
    $('.file-editcov').on("change", previewEditImageCover);
</script>
