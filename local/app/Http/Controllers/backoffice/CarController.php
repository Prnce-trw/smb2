<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\carbrand;
use App\carmodel;
use App\caryear;
use App\cartiresize;
use App\activitylog;
use Storage;
use Auth;
use URL;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbrand = carbrand::all();
        foreach ($carbrand as $key => $value) {
            $value->countcarmodel = $value->getCarModels->count();
        }
        $totalcarbrand = carbrand::count();
        $totalcarmodel = carmodel::count();
        $data = array(
            'carbrand' => $carbrand, 
            'totalcarbrand' => $totalcarbrand, 
            'totalcarmodel' => $totalcarmodel, 
        );
        return view('backoffice.car.car', $data);
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
        $carbrand = new carbrand();
        $carbrand->car_brand_name 	         = $request['brandname'];
        
        if ($request->file('brandlogo') !== null)
        {
            $logo = $request->file('brandlogo');
            foreach($logo as $key => $item) {
                $name = rand().time().'.'.$item->getClientOriginalExtension();
                $item->storeAs('carbrandlogo',  $name);
                $carbrand->car_brand_logo   = $name;
            }
        } else {
            $product->car_brand_logo   = 'nopic.png';
        }
        $carbrand->save();

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Create New Car Brand";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 2;
        $log->save();

        if ($carbrand->save()) {
            return redirect('backoffice/car')->with('success','New Car Brand Has Been Saved!');
        } else {
            return redirect('backoffice/car')->with('error','Something Wrong. Car Brand Can Not Saved!');
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
        $carbrand = carbrand::where('car_brand_id',$id)->first();
        $data = array('carbrand' => $carbrand, );
        return view('backoffice.car.modal.edit-brand', $data);
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
        $carbrand = carbrand::where('car_brand_id', $id)->first();
        $carbrand->car_brand_name	 = $request['name'];
        
        if ($request->file('editbrandlogo') !== null)
        {
            $imgbrand = $request->file('editbrandlogo');
            foreach($imgbrand as $key => $item) {
                unlink('local/storage/app/carbrandlogo/'.$carbrand->car_brand_logo);
                $name = rand().time().'.'.$item->getClientOriginalExtension();
                $item->storeAs('carbrandlogo',  $name);
                $carbrand->car_brand_logo = $name;
            }
        }
        $carbrand->save();

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Updated Car Brand";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 2;
        $log->log_activeon_id   = $id;
        $log->save();

        if ($carbrand->save()) {
            return redirect('backoffice/car')->withSuccess('New Car Brand Has Been Updated!');
        } else {
            return redirect('backoffice/car')->withError('Something Wrong. Car Brand Can Not Updated!');
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
        $carbrand = carbrand::find($id);
        $image_path = Storage::delete('carbrandlogo/'.$carbrand->car_brand_logo);
        $carbrand = carbrand::destroy($id);

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Deleted Car Brand";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 2;
        $log->log_activeon_id   = $id;
        $log->save();

        return back();
    }

    public function indexcarmodel($id)
    {
        $carbrand = carbrand::where('car_brand_id', $id)->first();
        $carmodel = carmodel::where('car_model_brand_id', $id)->orderBy('car_model_name', 'ASC')->get();
        $data = array(
            'carbrand' => $carbrand, 
            'carmodel' => $carmodel,
        );
        return view('backoffice.car.carmodel', $data);
    }

    public function storecarmodel(Request $request)
    {
        
        DB::beginTransaction();
        try {
            $carmodel = new carmodel();
            $carmodel->car_model_name 	         = $request['model'];
            $carmodel->car_model_pcd 	         = $request['pcd'];
            $carmodel->car_model_brand_id 	     = $request['carbrand_id'];
            $carmodel->save();

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Create New Car Model";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 2;
            $log->save();

            // if ($request['year'] != null) {
            //     foreach ($request['year'] as $key => $value) {
            //         $getCarModel = carmodel::orderBy('car_model_id', 'DESC')->first();
            //         $caryear = new caryear();
            //         $caryear->car_year_name 	         = $value;
            //         $caryear->car_year_model_id  	     = $getCarModel->car_model_id;
            //         $caryear->save();
            //     }
            // }

            $rawYear = $request->yearE - $request->yearS;
            
            for ($i = 0; $i < $rawYear ; $i++) { 
                $getCarModel = carmodel::orderBy('car_model_id', 'DESC')->first();
                $caryear = new caryear();
                $caryear->car_year_name 	         = $request['yearS']+$i;
                $caryear->car_year_model_id  	     = $getCarModel->car_model_id;
                $caryear->save();
            }

            if ($request['width'] != null || $request['overall'] != null || $request['diameter'] != null) {
                foreach ($request['width'] as $key => $value) {
                    $getCarModel = carmodel::orderBy('car_model_id', 'DESC')->first();
                    $cartiresize = new cartiresize();
                    $cartiresize->tireSize_width 	         = $value;
                    $cartiresize->tireSize_overall   	     = $request['overall'][$key];
                    $cartiresize->tireSize_diameter    	     = $request['diameter'][$key];
                    $cartiresize->tireSize_carmodel_id    	 = $getCarModel->car_model_id;
                    $cartiresize->save();
                }
            }
            DB::commit();
            return back()->withSuccess('New Car Model Has Been Saved!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withError('Something Wrong. Car Model Can Not Saved!');
        }
    }

    public function edit_carmodel($id) 
    {
        $carmodel = carmodel::find($id);
        $data = array(
            'carmodel' => $carmodel, 
        );
        return view('backoffice.car.modal.edit-carmodel', $data);
    }

    public function updatecarmodel(Request $request, $id)
    {
        $carmodel = carmodel::find($id);
        $carmodel->car_model_name 	         = $request['name'];
        $carmodel->car_model_pcd 	         = $request['pcd'];
        $carmodel->save();

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Updated Car Model";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 1;
        $log->log_activeon_id   = $id;
        $log->save();

        // แก้ไข year
        if ($request['edityear'] != null) {
            $datayear = $request['edityear'];
            foreach ($datayear as $key => $value) {
                $getYear = caryear::where('car_year_id', $key)->where('car_year_model_id', $id)->first();
                $getYear->car_year_name = $value;
                $getYear->save();
            }
        }

        // แก้ไข size
        if ($request['editwidth'] != null || $request['editoverall'] != null || $request['editdiameter'] != null) {
            $datayear = $request['editwidth'];
            foreach ($datayear as $key => $value) {
                $getSize = cartiresize::find($key);
                $getSize->tireSize_width 	         = $value;
                $getSize->tireSize_overall   	     = $request['editoverall'][$key];
                $getSize->tireSize_diameter    	     = $request['editdiameter'][$key];
                $getSize->save();
            }
        }

        // store year ใหม่
        if ($request['newcaryear'] != null) {
            foreach ($request['newcaryear'] as $key => $value) {
                $caryear = new caryear();
                $caryear->car_year_name 	         = $value;
                $caryear->car_year_model_id  	     = $id;
                $caryear->save();
            }
        }

        // store size ใหม่
        if ($request['edit_width'] != null || $request['edit_overall'] != null || $request['edit_diameter'] != null) {
            foreach ($request['edit_width'] as $key => $value) {
                $cartiresize = new cartiresize();
                $cartiresize->tireSize_width 	         = $value;
                $cartiresize->tireSize_overall   	     = $request['edit_overall'][$key];
                $cartiresize->tireSize_diameter    	     = $request['edit_diameter'][$key];
                $cartiresize->tireSize_carmodel_id    	 = $id;
                $cartiresize->save();
            }
        }

        // delete year
        if ($request->deleteyear != null) {
            foreach ($request->deleteyear as $key => $value) {
                $getYeardelete = caryear::where('car_year_id', $value)->delete();
            }
        }

        // delete size
        if ($request->deletesize != null) {
            foreach ($request->deletesize as $key => $value) {
                $getSizedelete = cartiresize::where('tireSize_id', $value)->delete();
            }
        }

        if ($carmodel->save()) {
            return back()->withSuccess('Car Model Has Been Updated!');
        } else {
            return back()->withError('Something Wrong. Car Model Can Not Updated!');
        }
    }

    public function carmodeldestroy($id)
    {
        $carmodel = carmodel::find($id);
        $caryear = caryear::where('car_year_model_id', $id)->get();

        if ($caryear != null) {
            foreach ($caryear as $key => $value) {
                $value->delete();
            }
        }
        $carmodel = carmodel::destroy($id);

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Deleted Car Model";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 1;
        $log->log_activeon_id   = $id;
        $log->save();

        return back();
    }
}
