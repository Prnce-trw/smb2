<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;
use App\product;
use App\activitylog;
use Storage;
use Auth;
use URL;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = banner::where('banner_id', 1)->first();
        $data = array(
            'banner' => $banner, 
        );
        return view('backoffice.managefront.home.banner', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('banner') !== null)
        {
            $img_banner = $request->file('banner');
            $name = rand().time().'.'.$item_banner->getClientOriginalExtension();
            $item_banner->storeAs('banner',  $name);
            $img_banner = new banner();
            $img_banner->banner_name    = $name;
            $img_banner->banner_page    = $request['page'];
            $img_banner->save();

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Create New Banner";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 4;
            $log->save();
        }
        if ($img_banner->save()) {
            return redirect('backoffice/homebanner')->withSuccess('Banner Has Been Saved!');
        } else {
            return redirect('backoffice/homebanner')->withError('Something Wrong. Banner Can Not Saved!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data_banner = $request->file('banner');
            if ($request->file('banner') != '') {
                $banner = banner::where('banner_id', $id)->first();
                unlink('local/storage/app/banner/'.$banner->banner_name);
                $name = rand().time().'.'.$data_banner->getClientOriginalExtension();
                $data_banner->storeAs('banner',  $name);
                $banner->banner_name = $name;
                $banner->save();
            }
            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Updated Banner";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 3;
            $log->log_activeon_id   = $id;
            $log->save();

            DB::commit();
            return back()->withSuccess('Banner Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withError('Something Wrong. Banner Can Not Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function homeproduct()
    {
        $productNew = product::orderBy('product_id','DESC')->limit(8)->get();
        $productBestSeller = product::where('product_bestseller', 1)->orderBy('product_id','DESC')->limit(8)->get();
        $countBestSeller = product::where('product_bestseller', 1)->count();
        $productDiscount = product::where('product_price_discount', '!=', null)->orderBy('product_id','DESC')->limit(8)->get();
        $allProduct = product::all();
        $data = array(
            'productNew' => $productNew,
            'productBestSeller' => $productBestSeller,
            'countBestSeller' => $countBestSeller,
            'productDiscount' => $productDiscount,
         );
        return view('backoffice.managefront.home.product', $data);
    }

    public function editNewProduct($id)
    {
        $product = product::where('product_id',$id)->first();
        $data = array('product' => $product, );
        return view('backoffice.managefront.home.modal.modal-edit', $data);
    }

    public function homepromotion()
    {
        return view('backoffice.managefront.home.promotion');
    }

    public function addBestSeller()
    {
        $product = product::all();
        $data = array('product' => $product, );
        return view('backoffice.managefront.home.modal.modal-addbestseller', $data);
    }

    public function updatebestseller(Request $request)
    {
        DB::beginTransaction();
        try {
            $allProduct = product::all();
            foreach ($allProduct as $key => $value) {
                $value->product_bestseller     = 0;
                $value->save();
            }

            if ($request->getBestSeller != null) {
                foreach ($request->getBestSeller as $key => $value) {
                    $getProduct = product::findOrFail($value);
                    $getProduct->product_bestseller     = 1;
                    $getProduct->save();
                }
            }

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Updated Best Seller";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 4;
            $log->save();

            DB::commit();
            return redirect('backoffice/homeproduct')->withSuccess('Best Seller Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/homeproduct')->withError('Something Wrong. Best Seller Can Not Updated!');
        }
    }

    public function updatestatusProduct(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $product = product::findOrFail($id);
            if ($request['show'] != null) {
                $product->product_show_status       = 1;
            } else {
                $product->product_show_status       = 0;
            }
            $product->save();
            DB::commit();
            return redirect('backoffice/homeproduct')->withSuccess('Best Seller Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/homeproduct')->withError('Something Wrong. Best Seller Can Not Updated!');
        }
    }
}
