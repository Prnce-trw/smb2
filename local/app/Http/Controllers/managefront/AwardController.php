<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\award;
use App\award_img;
use App\award_probrand;
use App\carbrand;
use App\carmodel;
use App\brand;
use App\product;
use DB;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award = award::all();
        $data = array('award' => $award, );
        return view('backoffice.managefront.award.award', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carbrand = carbrand::all();
        $brand = brand::all();
        $data = array(
            'carbrand' => $carbrand,
            'brand' => $brand, 
        );
        return view('backoffice.managefront.award.modal.addaward', $data);
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
            $award = new award;
            $award->award_cardbrand	     = $request['carbrand'];
            $award->award_carmodel	     = $request['carmodel'];
            $award->award_productbrand	 = $request['productbrand'];
            $award->award_product	     = $request['product'];
            $award->save();

            if ($request->file('img') !== null) {
                $img = $request->file('img');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('award',  $name);
                    $award_img = new award_img();
                    $award_img->award_img_name              = $name;
                    $award_img->award_img_f                 = $award->award_id;
                    $award_img->save();
                }
            }
            DB::commit();
            return redirect('backoffice/award/'.$award->award_id.'/edit')->with('success', 'New Award Has Been Saved!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/award')->with('error', 'Something Wrong. New Award Can Not Saved!');
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
        $award = award::findOrFail($id);
        $carbrand = carbrand::all();
        $brand = brand::all();
        // dd($award->getAwardImgs[0]->getAwardProductBrand[0]->AwardgetBrand);
        $data = array(
            'award' => $award, 
            'carbrand' => $carbrand, 
            'brand' => $brand, 
        );
        return view('backoffice.managefront.award.award_edit', $data);
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
            // dd( $request->all(), $id);
            $award = award::findOrFail($id);
            $award->award_cardbrand     = $request['carbrand'];
            $award->award_carmodel      = $request['carmodel'];
            $award->save();

            if ($request->file('img') != null) { 
                $imgset = $request->file('img');
                foreach($imgset as $key => $item) {
                    $dataimgset = award_img::where('award_img_id', $key)->first();
                    unlink('local/storage/app/award/'.$dataimgset->award_img_name);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('award', $name);
                    $dataimgset->award_img_name         = $name;
                    $dataimgset->save();

                    
                }
            }

            if ($request['productbrand'] != null || $request['product'] != null) {
                foreach ($request['productbrand'] as $number => $value) {
                    $award_probrand = new award_probrand();
                    $award_probrand->award_img_id           = $number;
                    $award_probrand->award_brand_id         = $request['productbrand'][$number];
                    $award_probrand->award_product_id       = $request['product'][$number];
                    $award_probrand->save();
                }
            }

            

            // if ($request['cover'] != null) {
            //     foreach ($request['cover'] as $keyCover => $valueCover) {
            //         $award_cover = award_img::where('award_img_id', $keyCover)->wheere('award_img_f', $id)->first();
            //         if ($award_cover != null) {
            //             $award_cover->award_cover = $valueCover;
            //         } else {
            //             # code...
            //         }
            //         $award_cover->save();
            //     }
            // }

            DB::commit();
            return back()->with('success','Award Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error','Something Wrong. Award Can Not Updated!');
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
        $award = award::destroy($id);
        return redirect('backoffice/award');
    }

    public function filtercar_award(Request $request)
    {
        $carmodel = carmodel::where('car_model_brand_id', $request->carid)->get();
        if ($carmodel != null) {
            $html_carmodel = '<option selected disabled>Select Car...</option>';
            foreach ($carmodel as $key => $value) {
                $html_carmodel .= '<option value="'.$value->car_model_id.'">'.$value->car_model_name.'</option>';
            }
        }
        $data = array('html_carmodel' => $html_carmodel, );
        return $data;
    }

    public function filterproduct_brand(Request $request)
    {
        $product = product::where('product_brand_id', $request->productBrandid)->get();
        if ($product != null) {
            $html_product = '<option selected disabled>Select Product...</option>';
            foreach ($product as $key => $value) {
                $html_product .= '<option value="'.$value->product_id.'">'.$value->product_name.'</option>';
            }
        }
        $data = array('html_product' => $html_product, );
        return $data;
    }
}
