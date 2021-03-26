<div class="modal fade" id="addblog" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Blog</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/blog')}}" method="POST" enctype="multipart/form-data" id="blog" onsubmit="return blog()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cover 
                            <span class="mytooltip tooltip-effect-5 bg-danger">
                                <span class="tooltip-item">?</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Choose One. (Height: 270px, width: 330px)</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="imgcover[]" class="file-addcov" id="addcov" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addcov').click();"><i class="fa fa-plus"></i> Add Cover</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewimgcov"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Banner
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
                                    <input type="file" name="imgbanner[]" class="file-banner" id="addbanner" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('addbanner').click();"><i class="fa fa-plus"></i> Add Banner</button>
                                </div>
                                <div class="col-sm-6">
                                    <div id="previewimgbanner"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title <span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Title...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" name="content" id="" cols="30" rows="10" placeholder="Write Something..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date <span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Date...">
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
    function blog () {
        var title = document.forms["blog"]["title"].value;
        var date = document.forms["blog"]["date"].value;
        if (title == "" && date == "") {
            Swal.fire({
                icon: 'warning',
                type: 'warning',
                title: 'ขออภัย',
                text: 'กรุณากรอกข้อมูลที่กรุณากรอกข้อมูลให้ครบ'
            })
            return false;
        } else {
            return true;
        }
    }

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