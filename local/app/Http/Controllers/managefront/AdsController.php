<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PayUService\Exception;
use App\ads;
use App\activitylog;
use Storage;
use Auth;
use URL;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = ads::all();
        $data = array('ads' => $ads, );
        return view('backoffice.managefront.ads.ads', $data);
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
        try {
            $updateStatusAds = ads::all();
            foreach ($updateStatusAds as $key => $value) {
                $value->ads_show_status = 0;
                $value->save();
            }
            $ads = new ads();
            $ads->ads_name 	         = $request['name'];
            $ads->ads_show_status 	 = 1;
            if ($request->file('img') !== null)
            {
                $img = $request->file('img');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('promotion',  $name);
                    $ads->ads_image  = $name;
                }
            }
            $ads->save();

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Create New Advertisement";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 3;
            $log->save();

            
            return redirect('backoffice/ads')->withSuccess('New Advertisement Has Been Saved!');
        } catch (\Exception $e) {
            return redirect('backoffice/ads')->withError('Something Wrong. New Advertisement Can Not Saved!');
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
        $ads = ads::find($id);
        $data = array('ads' => $ads, );
        return view('backoffice.managefront.ads.modal.editads', $data);
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
        try {
            $ads = ads::findOrFail($id);
            if ($request['showads'] == 1) {
                $updateStatusAds = ads::all();
                foreach ($updateStatusAds as $key => $value) {
                    $value->ads_show_status = 0;
                    $value->save();
                }
                // dd($ads);
                $ads->ads_show_status  	     = 1;
            } elseif ($request['showads'] == 0) {
                $ads->ads_show_status  	     = $request['showads'];
            }
            if ($request->file('editimg') !== null)
            {
                $imgads = $request->file('editimg');
                foreach($imgads as $key => $item) {
                    unlink('local/storage/app/promotion/'.$ads->ads_image);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('promotion',  $name);
                    $ads->ads_image = $name;
                }
            }
            $ads->save();

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Updated Advertisement";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 3;
            $log->log_activeon_id   = $id;
            $log->save();

            
            return redirect('backoffice/ads')->withSuccess('Advertisement Has Been Updated!');
        } catch (\Throwable $th) {
            return redirect('backoffice/ads')->withError('Something Wrong. Advertisement Can Not Updated!');
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
        try {
            $ads = ads::find($id);
            $image_path = Storage::delete('promotion/'.$ads->ads_image);
            $ads = ads::destroy($id);

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Deleted Advertisement";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 3;
            $log->log_activeon_id   = $id;
            $log->save();

            return redirect('backoffice/ads')->withSuccess('Advertisement Has Been Deleted!');
        } catch (\Throwable $th) {
            return redirect('backoffice/ads')->withError('Something Wrong. Advertisement Can Not Deleted!');
        }
        
    }
}
