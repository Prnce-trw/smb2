<div class="modal fade" id="editblog" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">edit Blog</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/blog', $blog->blog_id)}}" method="POST" enctype="multipart/form-data" id="blog">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Banner</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="editbanner[]" class="file-addcov" id="editbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('editbanner').click();"><i class="fa fa-camera"></i> Edit Banner</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewimgcov"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Title..." value="{{$blog->blog_title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" name="content" id="" cols="30" rows="10" placeholder="Write Something...">{!!$blog->blog_content!!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Date..." value="{{$blog->blog_date}}">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="blog">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.summernote').summernote({
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
    });
</script>