<div class="modal fade show" id="modaladdbestseller" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Best Seller</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('backoffice/updatebestseller') }}" method="POST" enctype="multipart/form-data" id="addproduct_wheel">
                @csrf
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="dt-responsive table-responsive">
                                <table id="table-addBestSeller" class="table tbHover">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Image</th>
                                            <th style="text-align: center;">Product Name</th>
                                            <th style="text-align: center;">Brand</th>
                                            <th style="text-align: center;">Management</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $key => $item)
                                        <tr>
                                            <td class="text-center text-middle">{{$key+1}}</td>
                                            <td class="text-center"><img src="{{asset('local/storage/app/product/'.$item->product_imgcov.'')}}" width="100px" alt="Product Image"></td>
                                            <td class="text-middle">{{$item->product_name}}</td>
                                            <td class="text-center text-middle">{{ $product->getBrand != null ? $product->getBrand->brand_name : "" }}</td>
                                            <td class="text-center text-middle">
                                                <div class="border-checkbox-section">
                                                    <div class="border-checkbox-group border-checkbox-group-primary">
                                                        <input class="border-checkbox" type="checkbox" id="checkbox{{$item->product_id}}" name="getBestSeller[]" value="{{$item->product_id}}" {{ $item->product_bestseller == 1 ? "checked" : "" }}>
                                                        <label class="border-checkbox-label" for="checkbox{{$item->product_id}}"></label>
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
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="addproduct_wheel">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#table-addBestSeller").DataTable();
</script>