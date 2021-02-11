<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\banner;
use App\brand;
use App\product;
use App\producttype;
use App\productimgset;
use App\productgallery;
use App\productcar;
use App\size;
use App\pcd;
use App\et;
use App\carbrand;
use App\carmodel;
use App\caryear;
use App\color;
use App\Services\PayUService\Exception;
use Storage;
use URL;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            if ($request['product_type'] == 1) { // Wheels
                $product = new product();
                $product->product_name	         = $request['name'];
                $product->product_detail	     = $request['detail'];
                $product->product_property	     = $request['property'];
                $product->product_warranty	     = $request['warranty'];
                $product->product_type_id	     = $request['product_type'];
                $product->product_brand_id	     = $request['brand_id'];
                // $product->product_price_min	     = $request['price_min'];
                // $product->product_price_max	     = $request['price_max'];

                // if ($request['price_discount'] != null) {
                //     $product->product_price_discount = $request['price_discount'];
                // }

                if ($request->file('imgcov') !== null)
                {
                    $img = $request->file('imgcov');
                    foreach($img as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('product',  $name);
                        $product->product_imgcov  = $name;
                    }
                } else {
                    $product->product_imgcov  = 'nopic.png';
                }

                $product->save();

                // if ($request['diameter'] != null || $request['width'] != null) {
                //     foreach ($request['diameter'] as $key => $value) {
                //         $size = new size();
                //         $size->size_diameter      = $value;
                //         $size->size_width         = $request['width'][$key];
                //         $size->size_fkey          = $product->product_id;
                //         $size->save();
                //     }
                // }

                // if ($request['pcd'] != null) {
                //     foreach ($request['pcd'] as $key => $value) {
                //         $pcd = new pcd();
                //         $pcd->pcd_name       = $value;
                //         $pcd->pcd_fkey       = $product->product_id;
                //         $pcd->save();
                //     }
                // }

                // if ($request['et'] != null) {
                //     foreach ($request['et'] as $key => $value) {
                //         $et = new et();
                //         $et->et_name        = $value;
                //         $et->et_fkey        = $product->product_id;
                //         $et->save();
                //     }
                // }

                // if ($request['select_carbrand'] == 1) {
                //     foreach ($request['carbrand'] as $key => $value) {
                //         $datacar = new productcar();
                //         $datacar->pc_carbrand_id        = $value;
                //         $datacar->pc_carmodel_id        = $request['carmodel'][$key];
                //         $datacar->pc_caryear_id         = $request['caryear'][$key];
                //         $datacar->pc_product_id         = $product->product_id;
                //         $datacar->save();
                //     }
                // }

                // if ($request['select_carbrand'] == 2) {
                //     $newcarbrand = new carbrand();
                //     $newcarbrand->car_brand_name    = $request['carbrand_name'];
                //     $newcarbrand->car_brand_logo    = 'nopic.png';
                //     $newcarbrand->save();

                //     $getlastCarbrand = carbrand::orderBy('car_brand_id', 'DESC')->first();
                //     $newcarmodel = new carmodel();
                //     $newcarmodel->car_model_name        = $request['carbrand_model'];
                //     $newcarmodel->car_model_year        = $request['carbrand_year'];
                //     $newcarmodel->car_model_brand_id    = $getlastCarbrand->car_brand_id;
                //     $newcarmodel->save();

                //     $getproduct_id = product::orderBy('product_id', 'DESC')->first();
                //     $getcarbrand_id = carbrand::orderBy('car_brand_id', 'DESC')->first();
                //     $getcarmodel_id = carmodel::orderBy('car_model_id', 'DESC')->first();
                //     $datanewcar = new productcar();
                //     $datanewcar->pc_carbrand_id        = $getcarbrand_id->car_brand_id;
                //     $datanewcar->pc_carmodel_id        = $getcarmodel_id->car_model_id;
                //     $datanewcar->pc_product_id         = $getproduct_id->product_id;
                //     $datanewcar->save();
                // }

                // if ($request->file('img') !== null) {
                //     $img = $request->file('img');
                //     foreach($img as $key => $item) {
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $productimgset = new productimgset();
                //         $productimgset->product_imgset_name        = $name;
                //         $productimgset->product_imgset_product_id  = $product->product_id;
                //         $productimgset->save();
                //     }
                // }

                // if ($request->file('imggallery') !== null) {
                //     $img = $request->file('imggallery');
                //     foreach($img as $key => $item) {
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $productgallery = new productgallery();
                //         $productgallery->product_gallery_name        = $name;
                //         $productgallery->product_gallery_product_id  = $product->product_id;
                //         $productgallery->save();
                //     }
                // }

            } elseif ($request['product_type'] == 2) { // Tires
                // dd($request->all());
                $product = new product();
                $product->product_name	         = $request['product_name'];
                $product->product_type_id	     = $request['product_type'];
                $product->product_brand_id	     = $request['brand_id'];
                $product->product_price	         = $request['price'];

                // if ($request['price_discount'] != null) {
                //     $product->product_price_discount = $request['price_discount'];
                // }

                if ($request->file('imgcov') !== null)
                {
                    $img = $request->file('imgcov');
                    foreach($img as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('product',  $name);
                        $product->product_imgcov  = $name;
                    }
                } else {
                    $product->product_imgcov  = 'nopic.png';
                }

                $product->save();

                if ($request->file('img') !== null) {
                    $img = $request->file('img');
                    foreach($img as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('productgallery',  $name);
                        $productimgset = new productimgset();
                        $productimgset->product_imgset_name        = $name;
                        $productimgset->product_imgset_product_id  = $product->product_id;
                        $productimgset->save();
                    }
                }

                if ($request['diameter'] != null || $request['width'] != null || $request['overall'] != null) {
                    foreach ($request['diameter'] as $key => $value) {
                        $size = new size();
                        $size->size_diameter      = $value;
                        $size->size_width         = $request['width'][$key];
                        $size->size_overall       = $request['overall'][$key];
                        $size->size_fkey          = $product->product_id;
                        $size->save();
                    }
                }

                
            }

            DB::commit();
            // return back()->withSuccess('New Product Has Been Saved!');
            if ($request['product_type'] == 1) {
                return redirect('backoffice/addProductDetail/'.$product->product_id.'')->withSuccess('New Product Has Been Saved!');
            } else {
                return back()->withSuccess('New Product has been Saved!');
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withError('Something Wrong. New Product Can Not Saved!');
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
        // $brand = brand::where('brand_id', $id)->first();
        // $product = product::where('product_id', $id)->first();
        // $carmodel = carmodel::orderBy('car_model_id', 'desc')->groupBy('car_model_pcd')->get();
        // $carbrand = carbrand::all();
        // $size               = $product->getProductSizes;
        // $pcd                = $product->getProductPcds;
        // $et                 = $product->getProductEts;
        // $productimgset      = $product->getProductImgSets;
        // $productimggallery  = $product->getProductImgGallerys;
        // $getdatacar         = $product->getProductCars;

        // $data = array(
        //     'productimggallery' => $productimggallery,
        //     'productimgset' => $productimgset,
        //     'carmodel' => $carmodel,
        //     'et' => $et,
        //     'pcd' => $pcd,
        //     'size' => $size,
        //     'brand' => $brand,
        //     'product' => $product,
        //     'getdatacar' => $getdatacar,
        //     'carbrand' => $carbrand,
        // );
        $product = product::findorFail($id);
        // dd($product->getProductSizes);
        // $carmodel = carmodel::orderBy('car_model_id', 'desc')->groupBy('car_model_pcd')->get();
        // $carbrand = carbrand::all();

        $data = array(
            'product' => $product,
            // 'carmodel' => $carmodel,
            // 'carbrand' => $carbrand,
        );
        if ($product->product_type_id == 1) {
            return view('backoffice.managefront.product.wheel.productdetail',$data);
        } elseif ($product->product_type_id == 2) {
            return view('backoffice.managefront.product.modal.edit-tire',$data);
        } else {
            # code...
        }
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
            if ($request['product_type'] == 1) {
                // dd($request->all(), $id);
                $product = product::where('product_id', $id)->first();
                $product->product_name	         = $request['name'];
                $product->product_detail	     = $request['detail'];
                $product->product_property	     = $request['property'];
                $product->product_warranty	     = $request['warranty'];
                if ($request->file('productimgcov') !== null)
                {
                    $imgcov = $request->file('productimgcov');
                    foreach($imgcov as $key => $item) {
                        if ($product->product_imgcov != null) {
                            unlink('local/storage/app/product/'.$product->product_imgcov);
                        }
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('product',  $name);
                        $product->product_imgcov = $name;
                    }
                }
                $product->save();
                if ($request['color_name'] != null) {
                    $color = new color();
                    $color->color_name               = $request['color_name'];
                    $color->color_product_id         = $id;
                    $color->color_material           = $request['material'];
                    $color->save();

                    // รูปปก
                    if ($request->file('imgcov') !== null) {
                        $img = $request->file('imgcov');
                        foreach($img as $keyImg => $item) {
                            $name = rand().time().'.'.$item->getClientOriginalExtension();
                            $item->storeAs('productimgset',  $name);
                            $productimgset = new productimgset();
                            $productimgset->product_imgset_name        = $name;
                            $productimgset->product_imgset_product_id  = $color->color_id;
                            $productimgset->save();
                        }
                    }

                    // รูปเซ็ท
                    if ($request->file('imgset') !== null) {
                        $img = $request->file('imgset');
                        foreach($img as $keyImg => $item) {
                            $name = rand().time().'.'.$item->getClientOriginalExtension();
                            $item->storeAs('productimgset',  $name);
                            $productimgset = new productimgset();
                            $productimgset->product_imgset_name        = $name;
                            $productimgset->product_imgset_product_id  = $color->color_id;
                            $productimgset->save();
                        }
                    }
                }

                // แก้ไข size
                // if ($request->product_diameter != null || $request->product_width != null) {
                //     $data_diameter = $request->product_diameter;
                //     foreach ($data_diameter as $key => $value) {
                //         $getDiameter = size::where('size_id', $key)->first();
                //         $getDiameter->size_diameter = $value;
                //         $getDiameter->size_width    = $request['product_width'][$key];
                //         $getDiameter->save();
                //     }
                // }

                // store size ใหม่
                if (!empty($request->diameter) || !empty($request->width) || !empty($request->pcd) || !empty($request->et)) {
                    foreach ($request['diameter'] as $key => $value) {
                        $size = new size();
                        $size->size_diameter      = $value;
                        $size->size_width         = $request['width'][$key];
                        $size->size_fkey          = $id;
                        $size->size_color_id      = $color->color_id;
                        $size->size_pcd           = $request['pcd'][$key];
                        $size->size_et            = $request['et'][$key];
                        $size->size_price         = $request['color_price'][$key];
                        if (!empty($request['color_price_status'][$key])) {
                            $size->size_promotion_status    = $request['color_price_status'][$key];
                            $size->size_promotion_price     = $request['color_price_promotion'][$key];
                        } else {
                            $size->size_promotion_status    = 0;
                            $size->size_promotion_price     = 0;
                        }
                        $size->save();
                    }
                }

                // แก้ไข pcd
                // if ($request->product_pcd != null) {
                //     $data_pcd = $request->product_pcd;
                //     foreach ($data_pcd as $key => $value) {
                //         $getPcd = pcd::where('pcd_id', $key)->first();
                //         $getPcd->pcd_name = $value;
                //         $getPcd->save();
                //     }
                // }

                // store pcd ใหม่
                // if ($request->pcd != null) {
                //     foreach ($request['pcd'] as $key => $value) {
                //         $pcd = new pcd();
                //         $pcd->pcd_name      = $value;
                //         $pcd->pcd_fkey      = $id;
                //         $pcd->save();
                //     }
                // }

                // แก้ไข et
                // if ($request->product_et != null) {
                //     $data_et = $request->product_et;
                //     foreach ($data_et as $key => $value) {
                //         $getEt = et::where('et_id', $key)->first();
                //         $getEt->et_name = $value;
                //         $getEt->save();
                //     }
                // }

                // store et ใหม่
                // if ($request->et != null) {
                //     foreach ($request['et'] as $key => $value) {
                //         $et = new et();
                //         $et->et_name      = $value;
                //         $et->et_fkey      = $id;
                //         $et->save();
                //     }
                // }

                // if ($request->file('img') !== null) {
                //     $img = $request->file('img');
                //     foreach($img as $key => $item) {
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $productimgset = new productimgset();
                //         $productimgset->product_imgset_name        = $name;
                //         $productimgset->product_imgset_product_id  = $product->product_id;
                //         $productimgset->save();
                //     }
                // }

                // if ($request->file('imggallery') !== null) {
                //     $img = $request->file('imggallery');
                //     foreach($img as $key => $item) {
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $productgallery = new productgallery();
                //         $productgallery->product_gallery_name        = $name;
                //         $productgallery->product_gallery_product_id  = $product->product_id;
                //         $productgallery->save();
                //     }
                // }

                // if ($request->file('imgset') !== null) {
                //     $imgset = $request->file('imgset');
                //     foreach($imgset as $key => $item) {
                //         $dataimgset = productimgset::where('product_imgset_id', $key)->first();
                //         unlink('local/storage/app/productgallery/'.$dataimgset->product_imgset_name);
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $dataimgset->product_imgset_name = $name;
                //         $dataimgset->save();
                //     }
                // }

                // if ($request->file('imggal') !== null) {
                //     $imggal = $request->file('imggal');
                //     foreach($imggal as $key => $item) {
                //         $dataimggal = productgallery::where('product_gallery_id', $key)->first();
                //         unlink('local/storage/app/productgallery/'.$dataimggal->product_gallery_name);
                //         $name = rand().time().'.'.$item->getClientOriginalExtension();
                //         $item->storeAs('productgallery',  $name);
                //         $dataimggal->product_gallery_name = $name;
                //         $dataimggal->save();
                //     }
                // }

                // แก้ไข car brand
                // if ($request['carbrand'] != null) {
                //     $data_car = $request['carbrand'];
                //     foreach ($data_car as $key => $value) {
                //         $productcar = productcar::where('pc_id', $key)->first();
                //         $productcar->pc_carbrand_id     = $value;
                //         $productcar->pc_carmodel_id     = $request['carmodel'][$key];
                //         $productcar->save();
                //     }
                // }

                // store car brand
                // if ($request->select_carbrand != null) {
                //     foreach ($request['select_carbrand'] as $key => $value) {
                //         $newproductcar = new productcar();
                //         $newproductcar->pc_carbrand_id      = $value;
                //         $newproductcar->pc_carmodel_id      = $request['select_carmodel'][$key];
                //         $newproductcar->pc_product_id       = $id;
                //         $newproductcar->save();
                //     }
                // }

                // delete size
                // if ($request->deletesize != null) {
                //     foreach ($request->deletesize as $key => $value) {
                //         $getSize = size::where('size_id', $value)->delete();
                //     }
                // }

                // delete pcd
                // if ($request->deletepcd != null) {
                //     foreach ($request->deletepcd as $key => $value) {
                //         $getPcd = pcd::where('pcd_id', $value)->delete();
                //     }
                // }

                // delete et
                // if ($request->deleteet != null) {
                //     foreach ($request->deleteet as $key => $value) {
                //         $getEt = et::where('et_id', $value)->delete();
                //     }
                // }

                // delete car
                // if ($request->deletecar != null) {
                //     foreach ($request->deletecar as $key => $value) {
                //         $getProductCar = productcar::where('pc_id', $value)->delete();
                //     }
                // }

                // delete imgset
                // if ($request->deleteimgset != null) {
                //     foreach ($request->deleteimgset as $key => $value) {
                //         $getProductImgset = productimgset::where('product_imgset_id', $value)->first();
                //         if ($getProductImgset->product_imgset_name != "nopic.png") {
                //             $image_path = Storage::delete('productgallery/'.$getProductImgset->product_imgset_name);
                //         }
                //         $getProductImgset = productimgset::destroy($value);
                //     }
                // }

                // delete imggal
                // if ($request->deleteimggal != null) {
                //     foreach ($request->deleteimggal as $key => $value) {
                //         $getProductImggal = productgallery::where('product_gallery_id', $value)->first();
                //         if ($getProductImggal->product_gallery_name != "nopic.png") {
                //             $image_path = Storage::delete('productgallery/'.$getProductImggal->product_gallery_name);
                //         }
                //         $getProductImggal = productgallery::destroy($value);
                //     }
                // }
            } elseif ($request['product_type'] == 2) {
                
                $product = product::where('product_id', $id)->first();
                $product->product_name	         = $request['product_name'];
                $product->product_detail	     = $request['detail'];
                $product->product_property	     = $request['property'];
                $product->product_warranty	     = $request['warranty'];
                $product->product_price	         = $request['price'];
                $product->save();

                // แก้ไข size
                if ($request->product_size_id != null) {
                    foreach ($request->product_size_id as $key => $value) {
                        $getSize = size::where('size_id', $value)->first();
                        $getSize->size_width        = $request['product_width'][$key];
                        $getSize->size_overall      = $request['product_overall'][$key];
                        $getSize->size_diameter     = $request['product_diameter'][$key];
                        $getSize->save();
                    }
                }

                // เพิ่ม size ใหม่
                if ($request->product_new_width != null || $request->product_new_overall != null || $request->product_new_diameter != null) {
                    $data_width = $request->product_new_width;
                    foreach ($data_width as $key => $value) {
                        $getDiameter = size::where('size_id', $key)->first();
                        $getDiameter->size_width        = $value;
                        $getDiameter->size_overall      = $request['product_new_overall'][$key];
                        $getDiameter->size_diameter     = $request['product_new_diameter'][$key];
                        $getDiameter->size_price        = $request['price'][$key];
                        $getDiameter->save();
                    }
                }

                // delete size
                if ($request->deletesize != null) {
                    foreach ($request->deletesize as $key => $value) {
                        $getSize = size::where('size_id', $value)->delete();
                    }
                }


                if ($request->file('newimg') !== null) {
                    $img = $request->file('newimg');
                    foreach($img as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('productgallery',  $name);
                        $productimgset = new productimgset();
                        $productimgset->product_imgset_name        = $name;
                        $productimgset->product_imgset_product_id  = $product->product_id;
                        $productimgset->save();
                    }
                }

                if ($request->file('newimggallery') !== null) {
                    $img = $request->file('newimggallery');
                    foreach($img as $key => $item) {
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('productgallery',  $name);
                        $productgallery = new productgallery();
                        $productgallery->product_gallery_name        = $name;
                        $productgallery->product_gallery_product_id  = $product->product_id;
                        $productgallery->save();
                    }
                }

                if ($request->file('imgcov') !== null) {
                    $imgcov = $request->file('imgcov');
                    foreach($imgcov as $key => $item) {
                        $dataimg = product::where('product_id', $id)->first();
                        unlink('local/storage/app/product/'.$dataimg->product_imgcov);
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('product',  $name);
                        $dataimg->product_imgcov = $name;
                        $dataimg->save();
                    }
                }

                if ($request->file('imgset') !== null) {
                    $imgset = $request->file('imgset');
                    foreach($imgset as $key => $item) {
                        $dataimgset = productimgset::where('product_imgset_id', $key)->first();
                        unlink('local/storage/app/productgallery/'.$dataimgset->product_imgset_name);
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('productgallery',  $name);
                        $dataimgset->product_imgset_name = $name;
                        $dataimgset->save();
                    }
                }

                if ($request->file('imggal') !== null) {
                    $imggal = $request->file('imggal');
                    foreach($imggal as $key => $item) {
                        $dataimggal = productgallery::where('product_gallery_id', $key)->first();
                        unlink('local/storage/app/productgallery/'.$dataimggal->product_gallery_name);
                        $name = rand().time().'.'.$item->getClientOriginalExtension();
                        $item->storeAs('productgallery',  $name);
                        $dataimggal->product_gallery_name = $name;
                        $dataimggal->save();
                    }
                }
                // delete imgset
                if ($request->deleteimgset != null) {
                    foreach ($request->deleteimgset as $key => $value) {
                        $getProductImgset = productimgset::where('product_imgset_id', $value)->first();
                        if ($getProductImgset->product_imgset_name != "nopic.png") {
                            $image_path = Storage::delete('productgallery/'.$getProductImgset->product_imgset_name);
                        }
                        $getProductImgset = productimgset::destroy($value);
                    }
                }

                // delete imggal
                if ($request->deleteimggal != null) {
                    foreach ($request->deleteimggal as $key => $value) {
                        $getProductImggal = productgallery::where('product_gallery_id', $value)->first();
                        if ($getProductImggal->product_gallery_name != "nopic.png") {
                            $image_path = Storage::delete('productgallery/'.$getProductImggal->product_gallery_name);
                        }
                        $getProductImggal = productgallery::destroy($value);
                    }
                }
            }

            DB::commit();
            return back()->with('success','Product Has Been Updated!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Something Wrong. Product Can Not Updated!');
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
        $producttype = producttype::destroy($id);
        return redirect('backoffice/product');
    }

    public function productbanner()
    {
        $banner = banner::where('banner_id', 2)->first();
        $data = array('banner' => $banner, );
        return view('backoffice.managefront.product.banner', $data);
    }

    public function productIndex($id)
    {
        $brand = brand::where('brand_id', $id)->first();

        $product = product::where('product_brand_id', $id)
        ->where('product_type_id', $brand->getProductType->p_type_id)
        ->get();
        $data = array(
            'brand' => $brand,
            'product' => $product,
        );

        return view('backoffice.managefront.product.product', $data);
    }

    public function indexproducttype()
    {
        $producttype = producttype::all();
        $data = array(
            'producttype' => $producttype,
        );
        return view('backoffice.managefront.product.producttype', $data);
    }

    public function storeproducttype(Request $request)
    {
        $producttype = new producttype();
        $producttype->p_type_name 	         = $request['name'];
        $producttype->save();
        if ($producttype->save()) {
            return redirect('backoffice/indexproducttype')->withSuccess('New Product Has Been Saved!');
        } else {
            return redirect('backoffice/indexproducttype')->withError('Something Wrong. New Product Can Not Saved!');
        }
    }

    public function editproducttype(Request $request)
    {
        $producttype = producttype::where('p_type_id', $request->id)->first();
        $data = array(
            'producttype' => $producttype,
        );
        return view('backoffice.managefront.product.modal.producttype-edit', $data);
    }

    public function updateproducttype(Request $request, $id)
    {
        $producttype = producttype::where('p_type_id', $id)->first();
        $producttype->p_type_name	 = $request['name'];
        $producttype->save();
        if ($producttype->save()) {
            return redirect('backoffice/indexproducttype')->withSuccess('New Product Has Been Updated!');
        } else {
            return redirect('backoffice/indexproducttype')->withError('Something Wrong. New Product Can Not Updated!');
        }
    }

    public function addwheel(Request $request)
    {
        if ($request->product_type_id == 1) { // Wheels
            $brand = brand::where('brand_id', $request->brand_id)->first();
            $carmodel = carmodel::orderBy('car_model_id', 'desc')
            ->groupBy('car_model_pcd')->get();
            $carbrand = carbrand::all();
            $data = array(
                'brand' => $brand,
                'carmodel' => $carmodel,
                'carbrand' => $carbrand,
            );
            return view('backoffice.managefront.product.modal.add-wheel', $data);
        } elseif ($request->product_type_id == 2) { // Tires
            $brand = brand::where('brand_id', $request->brand_id)->first();
            $data = array(
                'brand' => $brand,
            );
            return view('backoffice.managefront.product.modal.add-tire', $data);
        }
    }

    public function filtercarbrand(Request $request)
    {
        $carbrand_id = $request->carbrand_id;
        $carmodel_id = $request->carmodel_id;

        $count_append = $request->count_append;

        if ($carbrand_id != null) {
            $carmodel = carmodel::where('car_model_brand_id', $carbrand_id)->get();
            $html_carmodel = '<option selected disabled>Select Car Model...</option>';
            foreach ($carmodel as $key => $value) {
                $html_carmodel .= '<option value="'.$value->car_model_id.'">'.$value->car_model_name.'</option>';
            }
            $data = array(
                'html_carmodel' => $html_carmodel,
            );
        }
        if ($carmodel_id != null) {
            $caryear = caryear::where('car_year_model_id', $carmodel_id)->get();
            $html_caryear = '<option selected disabled>Select Car Year...</option>';
            foreach ($caryear as $key => $value) {
                $html_caryear .= '<option value="'.$value->car_year_id.'">'.$value->car_year_name.'</option>';
            }
            $data = array(
                'html_caryear' => $html_caryear,
            );
        }

        return $data;
    }

    public function product_destroy($id)
    {
        $product = product::find($id);
        $size = size::where('size_fkey', $id)->get();
        $pcd = pcd::where('pcd_fkey', $id)->get();
        $et = et::where('et_fkey', $id)->get();
        $productimgset = productimgset::where('product_imgset_product_id', $id)->get();
        $productgallery = productgallery::where('product_gallery_product_id', $id)->get();
        $productcar = productcar::where('pc_product_id', $id)->get();
        if ($size != null) {
            foreach ($size as $key => $value) {
                $value->delete();
            }
        }
        if ($pcd != null) {
            foreach ($pcd as $key => $value) {
                $value->delete();
            }
        }
        if ($et != null) {
            foreach ($et as $key => $value) {
                $value->delete();
            }
        }
        if ($productcar != null) {
            foreach ($productcar as $key => $value) {
                $value->delete();
            }
        }
        if ($product->product_imgcov != "nopic.png") {
            $image_path = Storage::delete('product/'.$product->product_imgcov);
        }
        if ($productimgset != null) {
            foreach ($productimgset as $key => $value) {
                $value = Storage::delete('productgallery/'.$value->product_imgset_name);
            }
        }
        if ($productgallery != null) {
            foreach ($productgallery as $key => $value) {
                $value = Storage::delete('productgallery/'.$value->product_gallery_name);
            }
        }
        $product = product::destroy($id);
        return back();
    }

    public function addProductDetail($id)
    {
        $product = product::findorFail($id);
        $carmodel = carmodel::orderBy('car_model_id', 'desc')->groupBy('car_model_pcd')->get();
        $carbrand = carbrand::all();
        $color = color::where('color_product_id', $id)->get();
        $data = array(
            'product' => $product,
            'carmodel' => $carmodel,
            'carbrand' => $carbrand,
            'color' => $color,
        );
        return view('backoffice.managefront.product.wheel.productdetail', $data);
    }

    public function editcolor($id)
    {
        $color = color::findOrFail($id);
        $carmodel = carmodel::orderBy('car_model_id', 'desc')->groupBy('car_model_pcd')->get();
        $size = size::where('size_color_id', $id)->get();
        $productimgset = productimgset::where('product_imgset_product_id', $id)->get();
        $data = array(
            'color' => $color,
            'carmodel' => $carmodel,
            'size' => $size,
            'productimgset' => $productimgset,
        );
        return view('backoffice.managefront.product.modal.edit-color', $data);
    }

    public function updatecolor(Request $request, $id)
    {
        // dd($request->all(), $id, $request->color_price_status[5]);
        DB::beginTransaction();
        try {
            $color = color::findOrFail($id);
            $color->color_name          = $request['name'];
            $color->save();

            // แก้ไข size
            foreach ($request['diameter'] as $key => $value) {
                $size = size::findOrFail($key);
                $size->size_diameter            = $value;
                $size->size_width               = $request['width'][$key];
                $size->size_pcd                 = $request['pcd'][$key];
                $size->size_et                  = $request['et'][$key];
                $size->size_price               = $request['color_price'][$key];
                if (!empty($request['color_price_status'][$key])) {
                    $size->size_promotion_status    = 1;
                    $size->size_promotion_price     = $request['editcolor_price_promotion'][$key];
                } else {
                    $size->size_promotion_status    = 0;
                    $size->size_promotion_price     = 0;
                }
                $size->save();
            }

            if ($request->file('imgset') != null) {
                $imgset = $request->file('imgset');
                foreach($imgset as $key => $item) {
                    $dataimgset = productimgset::where('product_imgset_id', $key)->first();
                    unlink('local/storage/app/productimgset/'.$dataimgset->product_imgset_name);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('productimgset', $name);
                    $dataimgset->product_imgset_name         = $name;
                    $dataimgset->save();
                }
            }

            // delete imgset
            if ($request->deleteimgset != null) {
                foreach ($request->deleteimgset as $key => $value) {
                    $getProductImgset = productimgset::where('product_imgset_id', $value)->first();
                    if ($getProductImgset->product_imgset_name != "nopic.png") {
                        $image_path = Storage::delete('productimgset/'.$getProductImgset->product_imgset_name);
                    }
                    $getProductImgset = productimgset::destroy($value);
                }
            }

            // store imgset
            if ($request->file('img') !== null) {
                $img = $request->file('img');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('productimgset',  $name);
                    $productimgset = new productimgset();
                    $productimgset->product_imgset_name        = $name;
                    $productimgset->product_imgset_product_id  = $id;
                    $productimgset->save();
                }
            }

            // delete size
            if ($request->deletesize != null) {
                foreach ($request->deletesize as $key => $value) {
                    $getSize = size::where('size_id', $value)->delete();
                }
            }

            // store size ใหม่
            if (!empty($request->adddiameter) || !empty($request->addwidth) || !empty($request->addpcd) || !empty($request->addet)) {
                foreach ($request['adddiameter'] as $key => $value) {
                    $size = new size();
                    $size->size_diameter      = $value;
                    $size->size_width         = $request['addwidth'][$key];
                    $size->size_fkey          = $color->color_product_id;
                    $size->size_color_id      = $id;
                    $size->size_pcd           = $request['addpcd'][$key];
                    $size->size_et            = $request['addet'][$key];
                    $size->size_price         = $request['addcolr_price'][$key];
                    if ($request['addcolor_price_status'][$key] != null) {
                        $size->size_promotion_status    = 1;
                        $size->size_promotion_price     = $request['addcolor_price_promotion'][$key];
                    } else {
                        $size->size_promotion_status    = 0;
                        $size->size_promotion_price     = 0;
                    }
                    $size->save();
                }
            }

            DB::commit();
            return back()->with('success', 'Product Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error','Something Wrong. Product Can Not Updated!');
        }
    }

    public function delete_color($id)
    {
        $size = size::where('size_color_id', $id)->get();
        $productimgset = productimgset::where('product_imgset_product_id', $id)->get();
        if ($size != null) {
            foreach ($size as $key => $value) {
                $value->delete();
            }
        }
        if ($productimgset != null) {
            foreach ($productimgset as $key => $value) {
                $value = Storage::delete('productgallery/'.$value->product_imgset_name);
            }
        }
        $color = color::destroy($id);
        return back()->withSuccess('Color Has Been Deleted!');
    }
}
