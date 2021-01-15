<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\promotion;
use App\banner;
use Storage;
use DB;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion = promotion::all();
        $data = array('promotion' => $promotion, );
        return view('backoffice.managefront.promotion.promotion', $data);
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
        DB::beginTransaction();
        try {
            $promotion = new promotion();
            $promotion->promotion_header 	         = $request['header'];
            $promotion->promotion_content 	         = $request['content'];
            $promotion->promotion_date_start 	     = $request['datestart'];
            $nextdate = date('Y-m-d', strtotime('+1 day', strtotime($request['dateend'])));
            $promotion->promotion_date_end 	         = $nextdate;
            if ($request->file('img') !== null)
            {
                $img = $request->file('img');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('promotion',  $name);
                    $promotion->promotion_img   = $name;
                }
            }

            if ($request->file('banner') !== null)
            {
                $banner = $request->file('banner');
                foreach($banner as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('promotion',  $name);
                    $promotion->promotion_banner   = $name;
                }
            }
            $promotion->save();

            DB::commit();
            return redirect('backoffice/promotion')->withSuccess('New Promotion Has Been Saved!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/promotion')->withError('Something Wrong. New Promotion Can Not Saved!');
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
        $promotion = promotion::where('promotion_id', $id)->first();
        $data = array(
            'promotion' => $promotion, 
        );
        return view('backoffice.managefront.promotion.modal.edit', $data);
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
            $promotion = promotion::where('promotion_id', $id)->first();
            $promotion->promotion_header	 = $request['header'];
            $promotion->promotion_content	 = $request['content'];
            $promotion->promotion_date_start = $request['datestart'];
            $promotion->promotion_date_end   = $request['dateend'];
            if ($request->show == 1) {
                $promotion->promotion_show	     = 1;
            } else {
                $promotion->promotion_show	     = 0;
            }

            if ($request->file('editimg') != null)
            {
                $imgcov = $request->file('editimg');
                if ($promotion->promotion_img != null) {
                    foreach($imgcov as $key => $item) {
                        unlink('local/storage/app/promotion/'.$promotion->promotion_img);
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('promotion',  $name);
                        $promotion->promotion_img = $name;
                        $promotion->save();
                    }
                } else {
                    foreach($imgcov as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('promotion',  $name);
                        $promotion->promotion_img   = $name;
                    }
                }
            }

            if ($request->file('editbanner') != null)
            {
                $banner = $request->file('editbanner');
                if ($promotion->promotion_banner != null) {
                    foreach($banner as $key => $item) {
                        unlink('local/storage/app/promotion/'.$promotion->promotion_banner);
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('promotion',  $name);
                        $promotion->promotion_banner = $name;
                        $promotion->save();
                    }
                } else {
                    foreach($banner as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('promotion',  $name);
                        $promotion->promotion_banner   = $name;
                    }
                }
            }

            $promotion->save();

            DB::commit();
            return redirect('backoffice/promotion')->withSuccess('Promotion Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/promotion')->withError('Something Wrong. Promotion Can Not Updated!');
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
        DB::beginTransaction();
        try {
            $promotion = promotion::find($id);
            $image_path = Storage::delete('promotion/'.$promotion->promotion_img);
            $promotion = promotion::destroy($id);
            DB::commit();
            return redirect('backoffice/promotion')->withSuccess('Promotion Has Been Deleted!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/promotion')->withError('Something Wrong. Promotion Can Not Deleted!');
        }
    }

    public function promotionbanner()
    {
        $banner = banner::where('banner_id', 5)->first();
        $data = array('banner' => $banner, );
        return view('backoffice.managefront.promotion.banner', $data);
    }
}
