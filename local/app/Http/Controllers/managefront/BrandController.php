<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producttype;
use App\brand;
use Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('index');
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
        $brand = new brand();
        $brand->brand_name	         = $request['name'];
        $brand->brand_product_type	 = $request['fkey_producttype'];
        if ($request->file('img') !== null)
        {
            $img = $request->file('img');
            foreach($img as $key => $item) {
                $name = rand().time().'.'.$item->getClientOriginalExtension();
                $item->storeAs('brand',  $name);
                $brand->brand_img  = $name;
            }
        }
        $brand->save();

        if ($brand->save()) {
            return back()->withSuccess('New Brand Has Been Saved!');
        } else {
            return back()->withError('Something Wrong. New Brand Can Not Saved!');
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
        $producttype = producttype::where('p_type_id', $id)->first();
        $brand = brand::where('brand_product_type', $id)->get();
        // dd($brand);
        foreach ($brand as $key => $value) {
            $value->countproduct = $value->getProducts->count();
        }
        $data = array(
            'producttype' => $producttype, 
            'brand' => $brand, 
        );
        return view('backoffice.managefront.brand.brand', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        
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
        $brand = brand::where('brand_id', $id)->first();
        $brand->brand_name	 = $request['name'];
        $brand->save();
        if ($request->file('img') !== null)
        {
            $imgbrand = $request->file('img');
            foreach($imgbrand as $key => $item) {
                $dataimg = brand::where('brand_id',$id)->first();
                if ($dataimg->brand_img != null) {
                    unlink('local/storage/app/brand/'.$dataimg->brand_img);
                }
                $name = rand().time().'.'.$item->getClientOriginalExtension();
                $item->storeAs('brand',  $name);
                $dataimg->brand_img = $name;
                $dataimg->save();
            }
        }
        if ($brand->save() || $dataimg->save()) {
            return back()->withSuccess('Brand Has Been Updated!');
        } else {
            return back()->withError('Something Wrong. Brand Can Not Updated!');
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
        $brand = brand::find($id);
        $image_path = Storage::delete('brand/'.$brand->brand_img);
        $brand = brand::destroy($id);
        return back();
    }

    public function editbrand(Request $request)
    {
        $brand = brand::where('brand_id', $request->id)->first();
        $data = array(
            'brand' => $brand, 
        );
        return view('backoffice.managefront.brand.modal.edit', $data);
    }
}
