<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\news;
use Storage;
use App\banner;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        $data = array(
            'news' => $news, 
        );
        return view('backoffice.managefront.news.news', $data);
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
            $news = new news();
            $news->news_title	         = $request['title'];
            $news->news_content	         = $request['content'];
            $news->news_date	         = $request['date'];
            if ($request->file('imgcover') !== null)
            {
                $img = $request->file('imgcover');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('news',  $name);
                    $news->news_imgcover  = $name;
                }
            }
            $news->save();
            DB::commit();
            return redirect('backoffice/news')->withSuccess('News and Event Has Been Saved!');
        } catch (\Throwable $th) {
            return redirect('backoffice/news')->withError('Something Wrong. News and Event Can Not Saved!');
            DB::rollback();
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
            $news = news::where('news_id', $id)->first();
            $news->news_title	 = $request['title'];
            $news->news_content	 = $request['content'];
            $news->news_date	 = $request['date'];
            $news->save();
            if ($request->file('editimgcover') !== null)
            {
                $newscover = $request->file('editimgcover');
                foreach($newscover as $key => $item) {
                    $dataimg = news::where('news_id',$id)->first();
                    unlink('local/storage/app/news/'.$dataimg->news_imgcover);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('news',  $name);
                    $dataimg->news_imgcover = $name;
                    $dataimg->save();
                }
            }
            DB::commit();
            return redirect('backoffice/news')->withSuccess('News and Event Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/news')->withError('Something Wrong. News and Event Can Not Updated!');
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
            $news = news::find($id);
            $image_path = Storage::delete('news/'.$news->news_imgcover);
            $news = news::destroy($id);
            DB::commit();
            return redirect('backoffice/news')->withSuccess('News and Event Has Been Deleted!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/news')->withError('Something Wrong. News and Event Can Not Deleted!');
        }
    }

    public function editnews(Request $request)
    {
        $news = news::where('news_id', $request->id)->first();
        $data = array(
            'news' => $news, 
        );
        return view('backoffice.managefront.news.modal.edit', $data);
    }

    public function newsbanner()
    {
        $banner = banner::where('banner_id', 4)->first();
        $data = array('banner' => $banner, );
        return view('backoffice.managefront.news.banner', $data);
    }
}
