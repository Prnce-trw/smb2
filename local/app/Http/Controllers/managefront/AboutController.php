<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\about;
use App\banner;
use App\activitylog;
use Storage;
use Auth;
use URL;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = about::where('about_id', 1)->first();
        $data = array(
            'about' => $about, 
        );
        return view('backoffice.managefront.about.about', $data);
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
        $about = new about();
        $about->about_heading	         = $request['heading'];
        $about->about_content	         = $request['content'];
        $about->about_hilight	         = $request['highlight'];
        $about->about_subcontent	     = $request['subcontent'];
        if ($request->file('editimg') !== null)
        {
            $img = $request->file('editimg');
            foreach($img as $key => $item) {
                $name = rand().time().'.'.$item->getClientOriginalExtension();
                $item->storeAs('about',  $name);
                $about->about_img  = $name;
            }
        }
        $about->save();

        if ($about->save()) {
            return redirect('backoffice/about')->withSuccess('Content Has Been Saved!');
        } else {
            return redirect('backoffice/about')->withError('Something Wrong. Content Can Not Saved!');
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
        try {
            $about = about::where('about_id', $id)->first();
            $about->about_heading	 = $request['heading'];
            $about->about_content	 = $request['content'];
            $about->about_hilight	 = $request['highlight'];
            $about->about_subcontent = $request['subcontent'];
            $about->save();
            if ($request->file('editimg') !== null)
            {
                $aboutimg = $request->file('editimg');
                foreach($aboutimg as $key => $item) {
                    $dataimg = about::where('about_id',$id)->first();
                    unlink('local/storage/app/about/'.$dataimg->about_img);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('about',  $name);
                    $dataimg->about_img = $name;
                    $dataimg->save();
                }
            }
            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Updated Advertisement";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 5;
            $log->log_activeon_id   = $id;
            $log->save();

            return redirect('backoffice/about')->withSuccess('Content Has Been Updated!');
        } catch (\Throwable $th) {
            return redirect('backoffice/about')->withError('Something Wrong. Content Can Not Updated!');
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
        files::where('file_user_f',$id)->delete();
    }

    public function aboutbanner()
    {
        $banner = banner::where('banner_id',3)->first();
        $data = array(
            'banner' => $banner, 
        );
        return view('backoffice.managefront.about.banner', $data);
    }
}
