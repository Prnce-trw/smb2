<div class="modal fade show" id="modaladdproduct" tabindex="-1" role="dialog">
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
            <form action="{{ url('backoffice/updatestatusProduct', $product->product_id) }}" method="POST" id="editproduct_wheel">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image Cover</label>
                        <div class="col-sm-10">
                            <img src="{{asset('local/storage/app/product/'.$product->product_imgcov.'')}}" width="150px;" alt="">
                            <br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <div class="form-control-static">{{$product->product_name}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Series</label>
                        <div class="col-sm-10">
                            <div class="form-control-static">{{$product->product_series}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Show</label>
                        <div class="col-sm-10">
                            <div class="border-checkbox-section">
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" id="checkbox{{$product->product_id}}" name="show" value="0" {{$product->product_show_status == 1 ? 'checked' : ''}}>
                                    <label class="border-checkbox-label" for="checkbox{{$product->product_id}}"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="editproduct_wheel">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>