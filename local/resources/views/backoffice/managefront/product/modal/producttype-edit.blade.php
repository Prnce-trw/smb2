<div class="modal fade show" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('backoffice/updateproducttype',$producttype->p_type_id) }}" method="POST" enctype="multipart/form-data" id="editproducttype" onsubmit="return editproducttype()">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name<span style="color: #FF5370;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Product Name..." value="{{$producttype->p_type_name}}">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editproducttype">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function editproducttype () {
        var name = document.forms["editproducttype"]["name"].value;
        if (name == "") {
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
</script>