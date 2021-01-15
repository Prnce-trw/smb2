<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\blog;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = blog::all();
        $data = array('blog' => $blog, );
        return view('backoffice.managefront.blog.blog', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.managefront.blog.modal.addblog');
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
            $blog = new blog();
            $blog->blog_title           = $request['title'];
            $blog->blog_date	        = $request['date'];
            $blog->blog_content         = $request['content'];
            if ($request->file('imgcover') !== null)
            {
                $img = $request->file('imgcover');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('blog',  $name);
                    $blog->blog_banner  = $name;
                }
            } else {
                $blog->blog_banner  = 'nopic.png';
            }
            $blog->save();
            return redirect('backoffice/blog')->with('success', 'New Blog Has Been Saved!');
        } catch (\Throwable $th) {
            return redirect('backoffice/blog')->with('error', 'Something Wrong. New Blog Can Not Saved!');
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
        $blog = blog::find($id);
        $data = array('blog' => $blog, );
        return view('backoffice.managefront.blog.modal.editblog', $data);
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
            $blog = blog::findOrFail($id);
            $blog->blog_title           = $request['title'];
            $blog->blog_date	        = $request['date'];
            $blog->blog_content         = $request['content'];
            if ($request->file('editbanner') !== null)
            {
                $img = $request->file('editbanner');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('blog',  $name);
                    $blog->blog_banner  = $name;
                }
            }
            $blog->save();
            return redirect('backoffice/blog')->with('success', 'Blog Has Been Updated!');
        } catch (\Throwable $th) {
            return redirect('backoffice/blog')->with('error', 'Something Wrong. Blog Can Not Updated!');
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
            $blog = blog::find($id);
            if ($blog->blog_banner != 'nopic.png') {
                $image_path = Storage::delete('blog/'.$blog->blog_banner);
            }
            $blog = blog::destroy($id);
            return redirect('backoffice/blog')->with('success', 'Blog Has Been Updated!');
        } catch (\Throwable $th) {
            return redirect('backoffice/blog')->with('error', 'Something Wrong. Blog Can Not Updated!');
        }
    }
}
