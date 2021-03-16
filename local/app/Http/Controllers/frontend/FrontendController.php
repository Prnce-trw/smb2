<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Auth;
use URL;
use Cart;
use Session;
use Illuminate\Support\Str;
use App\banner;
use App\product;
use App\producttype;
use App\contact;
use App\brand;
use App\pcd;
use App\size;
use App\color;
use App\carbrand;
use App\carmodel;
use App\caryear;
use App\promotion;
use App\news;
use App\ads;
use App\blog;
use App\User;
use App\activitylog;
use App\address;
use App\award;
use App\award_img;
use App\productimgset;

class FrontendController extends Controller
{
    public function home()
    {
        $ads = ads::where('ads_show_status', 1)->first();
        $size_diameter = size::groupBy('size_diameter')->get();
        $news = news::orderBy('news_id', 'DESC')->take(3)->get();
        $promotion = Promotion::orderBy('promotion_id', 'DESC')->take(2)->get();
        $blog = blog::orderBy('blog_id', 'DESC')->first();
        $banner = banner::where('banner_id', 1)->first();
        $newproduct = product::take(5)->where('product_show_status', 1)->where('product_type_id', 1)->orderBy('product_id', 'asc')->get();
        $bestseller = product::where('product_bestseller', 1)->where('product_type_id', 1)->get();
        $productdiscount = product::where('product_type_id', 1)->wherehas('getProductSizes', function ($q)
        {
            $q->where('size_promotion_status', 1);
        })->orderBy('product_id','DESC')->limit(5)->get();
        $carbrand = carbrand::all();
        $sizetire = size::groupBy('size_width')->get();
        $data = array(
            'size_diameter' => $size_diameter,
            'newproduct' => $newproduct,
            'news' => $news,
            'promotion' => $promotion,
            'blog' => $blog,
            'ads' => $ads,
            'bestseller' => $bestseller,
            'productdiscount' => $productdiscount,
            'banner' => $banner,
            'carbrand' => $carbrand,
            'sizetire' => $sizetire,
        );
        return view('frontend.index', $data);
    }

    public function product()
    {
        $product = product::where('product_type_id', 1)->paginate(12);
        $producttype = producttype::all();
        $brand = brand::all();
        $size = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $pcd = pcd::groupBy('pcd_name')->get();
        $carbrand = carbrand::all();
        $data = array(
            'product' => $product,
            'producttype' => $producttype,
            'brand' => $brand,
            'carbrand' => $carbrand,
            'pcd' => $pcd,
            'size' => $size,
            'sizetire' => $sizetire,
        );
        return view('frontend.products', $data);
    }

    public function aboutus()
    {
        return view();
    }

    public function news()
    {
        $news = news::paginate(9);
        $data = array('news' => $news, );
        return view('frontend.news', $data);
    }

    public function promotion()
    {
        $contact = contact::find(1);
        $firstPromotion = promotion::orderBy('promotion_id', 'DESC')->where('promotion_show', 1)->first();
        $promotion = promotion::where('promotion_id', '!=', $firstPromotion->promotion_id)->where('promotion_show', 1)->orderBy('promotion_id', 'DESC')->paginate(6);
        $data = array(
            'contact' => $contact,
            'promotion' => $promotion,
            'firstPromotion' => $firstPromotion,
        );
        return view('frontend.promotion', $data);
    }

    public function award()
    {
        $award = award::paginate(6);
        $carbrand = carbrand::all();
        $brand = brand::all();
        $data = array(
            'award' => $award,
            'carbrand' => $carbrand,
            'brand' => $brand,
        );
        return view('frontend.portfolio', $data);
    }

    public function contact()
    {
        $contact = contact::find(1);
        $branch = contact::where('contact_id', '!=', $contact->contact_id)->orderBy('contact_sort', 'ASC')->get();
        $data = array(
            'contact' => $contact,
            'branch' => $branch,
        );
        return view('frontend.contact', $data);
    }

    public function filterdatacar(Request $request)
    {
        $carbrandId = $request->carbrandId;
        $carmodelId = $request->carmodelId;
        if ($carbrandId != null) { // find car model
            $carmodel = carmodel::where('car_model_brand_id', $carbrandId)->orderBy('car_model_name','ASC')->get();
            $html_carmodel = '<option selected disabled>เลือก</option>';
            foreach ($carmodel as $key => $value) {
                $getFirstYear = caryear::where('car_year_model_id', $value->car_model_id)->orderBy('car_year_name', 'ASC')->first();
                $getLatedYear = caryear::where('car_year_model_id', $value->car_model_id)->orderBy('car_year_name', 'DESC')->first();
                $html_carmodel .= '<option value="'.$value->car_model_id.'">'.$value->car_model_name.' ('.$getFirstYear->car_year_name.' - '.$getLatedYear->car_year_name.') </option>';
            }
            $data = array(
                'html_carmodel' => $html_carmodel,
            );
        }
        if ($carmodelId != null) { // find car year
            $caryear = caryear::where('car_year_model_id', $carmodelId)->get();
            $html_caryear = '<option selected disabled>เลือก</option>';
            foreach ($caryear as $key => $value) {
                $html_caryear .= '<option value="'.$value->car_year_id.'">'.$value->car_year_name.'</option>';
            }
            $data = array(
                'html_caryear' => $html_caryear,
            );
        }

        return $data;
    }

    public function filterdatesize(Request $request)
    {
        $DiameterId = $request->sizeDiameter;
        $sizePcdId = $request->sizePcd;
        if ($DiameterId != null) {
            $size = size::where('size_diameter', $DiameterId)->get();
            foreach ($size as $key => $value_size) {
                $product = product::where('product_id', $value_size->size_fkey)->get();
                foreach ($product as $key => $value_product) {
                    $pcd = pcd::where('pcd_fkey', $value_product->product_id)->get();
                    $html_pcd = '<option selected disabled>เลือก</option>';
                    foreach ($pcd as $key => $value_pcd) {
                        $html_pcd .= '<option value="'.$value_pcd->pcd_name.'">'.$value_pcd->pcd_name.'</option>';
                    }
                    $data = array('html_pcd' => $html_pcd, );
                }
            }
        }
        return $data;
    }

    public function promotion_detail($id)
    {
        $promotion = promotion::findOrFail($id);
        $data = array('promotion' => $promotion, );
        return view('frontend.readmore_promotion', $data);
    }

    public function product_detail($id)
    {
        if (auth('customer')->user() != null) {
            $check = session()->has('watched_product_id');
            if ($check == true) {
                $session_product = session()->get('watched_product_id');
            } else {
                $session_product = [];
            }
            \Session::push('watched_product_id',$id);
        }
        
        $product = product::where('product_id',$id)
        // ->leftJoin('tb_brand','tb_brand.profile_employee_id','tb_employee.employee_id')
        ->first();
        $color = color::where('color_product_id', $id)->get();
        $size = $color[0]->getSizes[0]->where('size_diameter', $color[0]->getSizes[0]->size_diameter)->where('size_color_id', $color[0]->color_id)->get();
        $size_head = size::where('size_diameter', $color[0]->getSizes[0]->size_diameter)->groupBy('size_diameter')->get();
        $gallery = award_img::where('award_img_f', $id)->whereHas('getAwardProductBrand', function($query) use($id) {
            $query->where('award_product_id', '=', $id);
        })->limit(5)->get();
        // dd($product->getBrand->brand_name);
        $data = array(
            'id' => $id,
            'size' => $size,
            'size_head' => $size_head,
            'product' => $product,
            'color' => $color,
            'gallery' => $gallery,
        );
        return view('frontend.products-detail', $data);
    }

    public function news_detail($id)
    {
        $news = news::findOrFail($id);
        $data = array('news' => $news, );
        return view('frontend.readmore_news', $data);
    }

    public function search_wheelBySize(Request $request)
    {
        $priceMin = $request->wheels_pricemin;
        $priceMax = $request->wheels_pricemax;
        $wheelSize = $request->wheelsSize;
        $wheelsPcd = $request->wheelsPcd;

        $product = product::where('product_type_id', 1)->paginate(12);
        $producttype = producttype::all();
        $brand = brand::all();
        $size_diameter = size::groupBy('size_diameter')->get();
        // dd($size);
        $pcd = pcd::groupBy('pcd_name')->get();
        $carbrand = carbrand::all();
        $sizetire = size::groupBy('size_width')->get();

        $datasize = size::where('size_diameter', $wheelSize)->where('size_pcd', $wheelsPcd)->groupBy('size_fkey')->get();
        // $dataPcd = DB::table('tb_pcd')->where('pcd_name', $wheelsPcd)->pluck('pcd_fkey');
        // $datapcd_array = $dataPcd->toArray();
        $html_product = '';
        foreach ($datasize as $key => $value_size) {
            $filterproduct_size = product::where('product_id', $value_size->size_fkey)
            // ->WhereIn('product_id', $datapcd_array)
            ->where('product_type_id', 1)->get();
            
            foreach ($filterproduct_size as $key => $value) {
                $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
                $path = url("product_detail/".$value->product_id."");
                $html_product .=
                '<div class="col-xl-3 col-md-6">
                    <div class="img_product text-center">
                        <img src="'.$pathimg.'" alt="Avatar" class="image_product" width="270" height="270">
                    </div>
                    <div class="text_product">
                        <div class="product-name">
                            <div class="about-us">
                                <a href="'.$path.'">
                                    <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;">'.$value->product_name.'</h6>
                                    <p>'.$value->product_series.'</p>
                                </a>
                            </div>
                            <div class="product-price">
                                
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        $data = array(
            'html_product' => $html_product,
            'product' => $product,
            'producttype' => $producttype,
            'brand' => $brand,
            'carbrand' => $carbrand,
            'pcd' => $pcd,
            'size_diameter' => $size_diameter,
            'sizetire' => $sizetire,
        );
        return view('frontend.productresult-search', $data);
    }

    public function branch()
    {
        $contact = contact::find(1);
        $branch = contact::where('contact_id', '!=', $contact->contact_id)->orderBy('contact_sort', 'ASC')->get();
        $count_branch = contact::where('contact_id', '!=', $contact->contact_id)->orderBy('contact_sort', 'ASC')->count();
        $data = array(
            'contact' => $contact,
            'count_branch' => $count_branch,
            'branch' => $branch,
        );
        return view('frontend.stores', $data);
    }

    public function branch_detail($id)
    {
        $branch = contact::find($id);
        $data = array(
            'branch' => $branch,
        );
        return view('frontend.bangna', $data);
    }

    public function searchbyname(Request $request)
    {
        $producttype = producttype::all();
        $carbrand = carbrand::all();
        $brand = brand::all();
        $size_diameter = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $product = product::where('product_name', 'LIKE', "%{$request->product_name}%")->paginate(12);
        $html_product = '';
        foreach ($product as $key => $value) {
            $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
            $path = url("product_detail/".$value->product_id."");
            $dataSize = '';
            $dataPcd = '';
            $dataEt = '';
            foreach ($value->getProductSizes as $key => $valueSize) {
                $dataSize .= $valueSize->size_diameter.'x'.$valueSize->size_width.', ';
            }
            foreach ($value->getProductPcds as $key => $valuePcd) {
                $dataPcd .= $valuePcd->pcd_name;
            }
            foreach ($value->getProductEts as $key => $valueEt) {
                $dataEt .= $valueEt->et_name;
            }
            if ($value->product_price_discount != null) {
                $html_product .= '
                <div class="col-xl-3 col-md-6">
                    <div class="img_product">
                        <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
                    </div>
                    <div class="text_product">
                        <div class="product-name">
                            <div class="about-us">
                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
                            </div>
                            Size: '.$dataSize.'
                            <br>PCD: '.$dataPcd.'
                            <br>ET: '.$dataEt.'
                            <div class="product-price"><del>฿'.$value->product_price.' ‎</del><a id="orange19"> ฿'.$value->product_price_discount.'</a></div>
                            <div class="product-price2 text-center">
                                <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="products-detail.php"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
                            </div>
                        </div>
                    </div>
                </div>';
            } else {
                $html_product .= '
                <div class="col-xl-3 col-md-6">
                    <div class="img_product">
                        <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
                    </div>
                    <div class="text_product">
                        <div class="product-name">
                            <div class="about-us">
                                <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
                            </div>
                            Size: '.$dataSize.'
                            <br>PCD: '.$dataPcd.'
                            <br>ET: '.$dataEt.'
                            <div class="product-price"><a id="orange19"> ฿'.$value->product_price.'</a></div>
                            <div class="product-price2 text-center">
                                <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="'.$path.'"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
                            </div>
                        </div>
                    </div>
                </div>';
            }

        }
        $data = array(
            'html_product' => $html_product,
            'brand' => $brand,
            'producttype' => $producttype,
            'carbrand' => $carbrand,
            'size_diameter' => $size_diameter,
            'sizetire' => $sizetire,
            'product' => $product,
        );
        return view('frontend.productresult-search', $data);
    }

    public function search_wheelByCar(Request $request)
    {
        $producttype = producttype::all();
        $carbrand = carbrand::all();
        $brand = brand::all();
        $size_diameter = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $html_product = '';
        if ($request->wheelsCarmodel != null) {
            $carModel = carmodel::where('car_model_id', $request->wheelsCarmodel)->where('car_model_brand_id', $request->wheelsCarbrand)->first();
            $getSize = size::where('size_pcd', '=', $carModel->car_model_pcd)->groupBy('size_fkey')->get();
            // dd($request->all(), $getSize, $carModel);
            foreach ($getSize as $key => $value_size) {
                $filterproduct_size = product::where('product_id', $value_size->size_fkey)
                ->where('product_type_id', 1)->get();
                foreach ($filterproduct_size as $key => $value) {
                    $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
                    $path = url("product_detail/".$value->product_id."");
                    $html_product .=
                    '<div class="col-xl-3 col-md-6">
                        <div class="img_product text-center">
                            <img src="'.$pathimg.'" alt="Avatar" class="image_product" width="270" height="270">
                        </div>
                        <div class="text_product">
                            <div class="product-name">
                                <div class="about-us">
                                    <a href="'.$path.'">
                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;">'.$value->product_name.'</h6>
                                        <p>'.$value->product_series.'</p>
                                    </a>
                                </div>
                                <div class="product-price">

                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
        }
        // if ($request->wheelsCarmodel != null) {
        //     $carModel = carmodel::where('car_model_id', $request->wheelsCarmodel)->where('car_model_brand_id', $request->wheelsCarbrand)->first();
        //     $getPcd = pcd::where('pcd_name', '=', $carModel->car_model_pcd)->get();
        //     foreach ($getPcd as $key => $value_pcd) {
        //         $product = product::where('product_id', $value_pcd->pcd_fkey)->where('product_type_id', 1)->get();
        //         foreach ($product as $key => $value) {
        //             $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
        //             $path = url("product_detail/".$value->product_id."");
        //             $dataSize = '';
        //             $dataPcd = '';
        //             $dataEt = '';
        //             foreach ($value->getProductSizes as $key => $valueSize) {
        //                 $dataSize .= $valueSize->size_diameter.'x'.$valueSize->size_width.', ';
        //             }
        //             foreach ($value->getProductPcds as $key => $valuePcd) {
        //                 $dataPcd .= $valuePcd->pcd_name;
        //             }
        //             foreach ($value->getProductEts as $key => $valueEt) {
        //                 $dataEt .= $valueEt->et_name;
        //             }
        //             if ($value->product_price_discount != null) {
        //                 $html_product .= '
        //                 <div class="col-xl-3 col-md-6">
        //                     <div class="img_product">
        //                         <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
        //                     </div>
        //                     <div class="text_product">
        //                         <div class="product-name">
        //                             <div class="about-us">
        //                                 <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
        //                             </div>
        //                             Size: '.$dataSize.'
        //                             <br>PCD: '.$dataPcd.'
        //                             <br>ET: '.$dataEt.'
        //                             <div class="product-price"><del>฿'.$value->product_price.' ‎</del><a id="orange19"> ฿'.$value->product_price_discount.'</a></div>
        //                             <div class="product-price2 text-center">
        //                                 <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="products-detail.php"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>';
        //             } else {
        //                 $html_product .= '
        //                 <div class="col-xl-3 col-md-6">
        //                     <div class="img_product">
        //                         <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
        //                     </div>
        //                     <div class="text_product">
        //                         <div class="product-name">
        //                             <div class="about-us">
        //                                 <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
        //                             </div>
        //                             Size: '.$dataSize.'
        //                             <br>PCD: '.$dataPcd.'
        //                             <br>ET: '.$dataEt.'
        //                             <div class="product-price"><a id="orange19"> ฿'.$value->product_price.'</a></div>
        //                             <div class="product-price2 text-center">
        //                                 <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="'.$path.'"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>';
        //             }
        //         }
        //     }
        // }
        $data = array(
            'html_product' => $html_product,
            'brand' => $brand,
            'producttype' => $producttype,
            'carbrand' => $carbrand,
            'size_diameter' => $size_diameter,
            'sizetire' => $sizetire,
        );
        return view('frontend.productresult-search', $data);
    }

    public function producttype($id)
    {
        $product = product::where('product_type_id', $id)->paginate(12);
        $producttype = producttype::all();
        $brand = brand::all();
        $size = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $pcd = pcd::groupBy('pcd_name')->get();
        $carbrand = carbrand::all();
        $data = array(
            'id' => $id,
            'product' => $product,
            'producttype' => $producttype,
            'brand' => $brand,
            'carbrand' => $carbrand,
            'pcd' => $pcd,
            'size' => $size,
            'sizetire' => $sizetire,
        );
        if ($id == 1) {
            return view('frontend.producttype', $data);
        } else  {
            return view('frontend.product-tyre', $data);
        }

    }

    public function productbrand($id)
    {
        $product = product::where('product_brand_id', $id)->paginate(12);
        $producttype = producttype::all();
        $brand = brand::all();
        $size = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $pcd = pcd::groupBy('pcd_name')->get();
        $carbrand = carbrand::all();
        $data = array(
            'product' => $product,
            'producttype' => $producttype,
            'brand' => $brand,
            'carbrand' => $carbrand,
            'pcd' => $pcd,
            'size' => $size,
            'sizetire' => $sizetire,
        );
        return view('frontend.producttype', $data);
    }

    public function blog()
    {
        $blog = blog::paginate(6);
        $data = array('blog' => $blog, );
        return view('frontend.blog', $data);
    }

    public function blog_detail($id)
    {
        $blog = blog::find($id);
        $recommended = blog::where('blog_id', '!=', $id)->orderBy('blog_id', 'DESC')->limit(3)->get();
        $data = array(
            'blog' => $blog,
            'recommended' => $recommended,
        );
        return view('frontend.blog-detail', $data);
    }

    public function signin()
    {
        return view('frontend.login-register');
    }

    public function userregister(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $check = User::where('email', $request['email'])->first();
            if ($check != null) {
                return redirect('signin')->with('warning', 'เกิดข้อผิดพลาด! เนื่องจากอีเมลนี้ได้ถูกสมัครมาก่อนแล้ว');
            } else {
                if ($request['password'] != $request['Confirmpassword']) {
                    return redirect('signin')->with('warning', 'รหัสผ่านไม่ตรงกัน กรุณาตรวจสอบใหม่อีกครั้ง');
                } else {
                    $user = new User();
                    $user->name 	        = $request['name'];
                    $user->user_lname 	    = $request['lname'];
                    $user->user_status 	    = 2;
                    $user->user_phone 	    = $request['phone'];
                    $user->email 	        = $request['email'];
                    $user->user_img 	    = 'nopic.png';
                    $user->password 	    = Hash::make($request->password);
                    $user->save();
    
                    // Activity Log
                    $log = new activitylog();
                    $log->log_user_id       = $user->user_id;
                    $log->log_description   = "New Customer Account";
                    $log->log_url           = URL::full();
                    $log->log_sitemap_id    = 6;
                    $log->save();
    
                    DB::commit();
                    // return view('frontend.index');
                    if (Auth::guard('customer')->attempt(['email' => $request->email , 'password' => $request->password, 'user_status' => '2'] )) {
                        // return redirect(url('/'));
                        return Redirect::route('index')->with('login_success', 'คุณ'+$request->name+' '+$request->lname);
                    }
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return Redirect::route('index')->with('error', 'เกิดข้อผิดพลาก! ไม่สามารถสมัครสมาชิกได้');
        }
    }

    public function searchnews(Request $request)
    {
        $news = news::where('news_title', 'LIKE', "%{$request->name}%")->paginate(9);
        if ($news != null) {
            $html_news = '';
            foreach ($news as $key => $value) {
                $pathimg = asset("local/storage/app/news/".$value->news_imgcover."");
                $date = date('d/m/Y', strtotime($value->news_date));
                $content = Str::limit($value->news_content, 150);
                $pathlink = url('news_detail', $value->news_id);
                $html_news .= '
                <div class="card col-12 col-md-6">
                    <img class="card-img-top img-fluid" src="'.$pathimg.'" alt="Card image cap" style="height: 270px;">
                    <div class="card-body" id="cardT">
                        <p class="card-text" style="margin-bottom: 0px;margin-top: 10px"><small class="text-muted" style="font-weight: 400;font-size: 14px;"></i> '.$date.'</small></p>
                        <h4 class="card-title">'.$value->news_title.'</h4>
                        <p class="card-text">'.$content.'</p>
                        <a id="text-white" href="'.$pathlink.'" class="btn btn-black rounded-0" style="padding: 5px 0.75rem;">Readmore</a>
                    </div>
                </div>
                ';
            }
        }
        return $html_news;
    }

    public function cart()
    {
        $getProductCart = Cart::getContent();
        $watched_product = \Session::get('watched_product_id');
        $productTotal = Cart::getTotalQuantity();
        $productPriceTotal = Cart::getTotal();
        // dd($getProductCart[4]->attributes->product_type);

        $html = '';
        foreach ($getProductCart as $key => $value) {
            // dd($value->attributes->product_type);
            if ($value->attributes->product_type == 1) {
                $size = size::where('size_id', $value->id)->first();
                $product = product::where('product_id', $size->size_fkey)->first();
                $color = color::where('color_id', $size->size_color_id)->first();
                $img_cover = productimgset::where('product_imgset_product_id', $size->size_color_id)->first();
                // dd($img_cover);
                $pathimg = asset("local/storage/app/productimgset/".$img_cover->product_imgset_name."");
                $html .= '
                <div id="deleteCart_'.$value->id.'" class="card col-12 col-md-12 col-lg-12 col-xl-12 bg_boxcart border shadow-sm  mb-5 bg-white rounded" style="padding: 0px">
                    <div class="card">
                        <div class="card-header container-fluid" id="newsHeading">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="close btn-delcart" aria-label="Close" id="btnclose" onclick="delProCart('.$value->id.')" value="'.$value->id.'">
                                        <span aria-hidden="true">X</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-3">
                            <div class="row cart_cartshop">
                                <div class="col-lg-3 col-sm-12">
                                    <img src="'.$pathimg.'" width="100%">
                                </div>
                                <div class="col-lg-5 col-sm-12">
                                    <div class="card-body" id="cardT">
                                        <h4 class="card-title">'.$value->name.' ('.$size->size_diameter.' x '.$size->size_width.') </h4>
                                        <p class="card-text">'.Str::limit($product->product_detail, 200).'</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="product-quantity">
                                        <div class="product-quantity-subtract">
                                            <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                            </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                        </div>
                                        <div>
                                            <input type="text" id="product-quantity-input-checkout" placeholder="'.$value->quantity.'" value="'.$value->quantity.'">
                                        </div>
                                        <div class="product-quantity-add">
                                            <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                            </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card-body" id="cardT">
                                        <h4 class="card-title text-center">'.number_format($value->price * $value->quantity).'</h4>
                                        <p class="card-text text-center">'.number_format($value->price).' / วง</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            } else {
                $product = product::where('product_id', $value->id)->first();
                $size = size::where('size_fkey', $value->id)->first();
                $pathimg = asset("local/storage/app/product/".$product->product_imgcov."");
                $html .= '
                <div id="deleteCart_'.$value->id.'" class="card col-12 col-md-12 col-lg-12 col-xl-12 bg_boxcart border shadow-sm  mb-5 bg-white rounded" style="padding: 0px">
                    <div class="card">
                        <div class="card-header container-fluid" id="newsHeading">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="close btn-delcart" aria-label="Close" id="btnclose" onclick="delProCart('.$value->id.')" value="'.$value->id.'">
                                        <span aria-hidden="true">X</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-3">
                            <div class="row cart_cartshop">
                                <div class="col-lg-3 col-sm-12">
                                    <img src="'.$pathimg.'" width="100%">
                                </div>
                                <div class="col-lg-5 col-sm-12">
                                    <div class="card-body" id="cardT">
                                        <h4 class="card-title">'.$value->name.' ('.$size->size_width.'/'.$size->size_overall.'ZR'.$size->size_diameter.') </h4>
                                        <p class="card-text">'.Str::limit($product->product_detail, 200).'</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="product-quantity">
                                        <div class="product-quantity-subtract">
                                            <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                            </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                        </div>
                                        <div>
                                            <input type="text" id="product-quantity-input-checkout" placeholder="'.$value->quantity.'" value="'.$value->quantity.'">
                                        </div>
                                        <div class="product-quantity-add">
                                            <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                            </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card-body" id="cardT">
                                        <h4 class="card-title text-center">'.number_format($value->price * $value->quantity).'</h4>
                                        <p class="card-text text-center">'.number_format($value->price).' / วง</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
            
        $data = array(
            'html' => $html,
            'getProductCart' => $getProductCart,
            'productTotal' => $productTotal,
            'productPriceTotal' => $productPriceTotal,
        );
        if ($watched_product != null) {
            $getWatchProduct = product::WhereIn('product_id', $watched_product)->get();
            $data['getWatchProduct'] = $getWatchProduct;
        } else {
            $data['getWatchProduct'] = null;
        }
        return view('frontend.cart', $data);
    }

    public function filtertire(Request $request)
    {
        $sizeWidth = $request->TireWidth;
        $sizeOverall = $request->TireOverall;

        if ($sizeWidth != null) {
            $size = size::where('size_width', $sizeWidth)->where('size_color_id', '=', null)->groupBy('size_width')->get();
            $html_Overall = '<option>เลือก</option>';
            foreach ($size as $key => $value_overall) {
                $html_Overall .= '<option value="'.$value_overall->size_overall.'">'.$value_overall->size_overall.'</option>';
            }
            $data = array('html_Overall' => $html_Overall, );
        }
        if ($sizeOverall != null) {
            $size = size::where('size_overall', $sizeOverall)->where('size_width', $sizeWidth)->get();
            $html_Diameter = '<option>เลือก</option>';
            foreach ($size as $key => $value_diameter) {
                $html_Diameter .= '<option value="'.$value_diameter->size_diameter.'">'.$value_diameter->size_diameter.'</option>';
            }
            $data = array('html_Diameter' => $html_Diameter, );
        }

        return $data;
    }

    public function search_tireBySize(Request $request)
    {
        // dd($request->all());
        $priceMin = $request->tire_pricemin;
        $priceMax = $request->tire_pricemax;
        $tireWidth = $request->TireWidth;
        $tiresOverall = $request->TireOverall;
        $tireDiameter = $request->tireDiameter;

        $product = product::where('product_type_id', 2)->paginate(12);
        $producttype = producttype::all();
        $brand = brand::all();
        $size = size::groupBy('size_diameter')->get();
        $pcd = pcd::groupBy('pcd_name')->get();
        $carbrand = carbrand::all();
        $sizetire = size::groupBy('size_width')->get();

        $datasize = size::where('size_width', $tireWidth)->Where('size_overall', $tiresOverall)->Where('size_diameter', $tireDiameter)->get();
        $html_product = '';
        foreach ($datasize as $key => $value_sizeProductId) {
            $getProduct = product::where('product_id', $value_sizeProductId->size_fkey)->where('product_type_id', 2)->get();
            foreach ($getProduct as $key => $value) {
                $pathimgband = asset('local/storage/app/brand/'.$value->getBrand->brand_img."");
                $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
                $path = url("product_detail/".$value->product_id."");
                if ($value_sizeProductId->product_price_discount == 1) {
                    $html_product .= '
                    <div class="pd-tyre row">
                            <div class="img_product col-12 col-md-4">
                               <span class="label"><img src=""></span>
                                <img src="'.$pathimg.'" alt="Avatar" class="image_product" width="144" height="155">
                            </div>
                            <div class="text_product col-12 col-md-8">
                                <div class="about-us">
                                    <div class="col-left">
                                        <div class="product-text">
                                            <img src="'.$pathimgband.'">
                                            <p class="series-mobel">'.$value_sizeProductId->product_name.'</p>
                                            <p class="size-mobel">
                                                
                                            </p>
                                            <div class="sub-item">
                                                <p><span>ราคาปกติ</span>เส้นละ <span class="font-large">3,000</span> บาท</p>
                                                <p class="price-special"><span class="color_pm" style="margin-left: 35px;">พิเศษ</span><br>ราคาเส้นละ <span class="bg-pm font-large">2,990</span> บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right">
                                        
                                    </div>
                                    <div class="sub-bottom">
                                        <ul>
                                            <li>
                                                <div class="product-quantity" id="pq">
                                                    <div class="product-quantity-subtract">
                                                        <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                    </div>
                                                    <div>
                                                        <input type="text" id="product-quantity-input" placeholder="0" value="0">
                                                    </div>
                                                    <div class="product-quantity-add">
                                                        <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="cart.php" class="btn btn-black rounded-0" style="color: #fff;" id="lk">ใส่ตะกร้าสินค้า</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                } else {
                    $html_product .= '
                    <div class="pd-tyre row">
                            <div class="img_product col-12 col-md-4">
                               <span class="label"><img src=""></span>
                                <img src="'.$pathimg.'" alt="Avatar" class="image_product">
                            </div>
                            <div class="text_product col-12 col-md-8">
                                <div class="about-us">
                                    <div class="col-left">
                                        <div class="product-text">
                                            <img src="'.$pathimgband.'">
                                            <p class="series-mobel">'.$value_sizeProductId->product_name.'</p>
                                            <p class="size-mobel">
                                                
                                            </p>
                                            <div class="sub-item">
                                                <p><span>ราคาปกติ</span>เส้นละ <span class="font-large">3,000</span> บาท</p>
                                                <p class="price-special"><span class="color_pm" style="margin-left: 35px;">พิเศษ</span><br>ราคาเส้นละ <span class="bg-pm font-large">2,990</span> บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right">
                                        
                                    </div>
                                    <div class="sub-bottom">
                                        <ul>
                                            <li>
                                                <div class="product-quantity" id="pq">
                                                    <div class="product-quantity-subtract">
                                                        <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                                                    </div>
                                                    <div>
                                                        <input type="text" id="product-quantity-input" placeholder="0" value="0">
                                                    </div>
                                                    <div class="product-quantity-add">
                                                        <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="cart.php" class="btn btn-black rounded-0" style="color: #fff;" id="lk">ใส่ตะกร้าสินค้า</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
                
            }
        }

        $data = array(
            'html_product' => $html_product ,
            'product' => $product,
            'producttype' => $producttype,
            'brand' => $brand,
            'carbrand' => $carbrand,
            'pcd' => $pcd,
            'size' => $size,
            'sizetire' => $sizetire,
        );
        return view('frontend.productresult-search-tyre', $data);
    }

    public function search_tireByCar(Request $request)
    {
        $producttype = producttype::all();
        $carbrand = carbrand::all();
        $brand = brand::all();
        $size = size::groupBy('size_diameter')->get();
        $sizetire = size::groupBy('size_width')->get();
        $size_diameter = size::groupBy('size_diameter')->get();
        $html_product = '';
        if ($request->tire_carmodel != null) {
            $carModel = carmodel::where('car_model_id', $request->tire_carmodel)->where('car_model_brand_id', $request->tire_carbrand)->first();
            $getPcd = pcd::where('pcd_name', '=', $carModel->car_model_pcd)->get();
            foreach ($getPcd as $key => $value_pcd) {
                $product = product::where('product_id', $value_pcd->pcd_fkey)->where('product_type_id', 2)->get();
                foreach ($product as $key => $value) {
                    $pathimg = asset("local/storage/app/product/".$value->product_imgcov."");
                    $path = url("product_detail/".$value->product_id."");
                    $dataSize = '';
                    $dataPcd = '';
                    $dataEt = '';
                    foreach ($value->getProductSizes as $key => $valueSize) {
                        $dataSize .= $valueSize->size_diameter.'x'.$valueSize->size_width.', ';
                    }
                    foreach ($value->getProductPcds as $key => $valuePcd) {
                        $dataPcd .= $valuePcd->pcd_name;
                    }
                    foreach ($value->getProductEts as $key => $valueEt) {
                        $dataEt .= $valueEt->et_name;
                    }
                    if ($value->product_price_discount != null) {
                        $html_product .= '
                        <div class="col-xl-3 col-md-6">
                            <div class="img_product">
                                <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
                            </div>
                            <div class="text_product">
                                <div class="product-name">
                                    <div class="about-us">
                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
                                    </div>
                                    Size: '.$dataSize.'
                                    <br>PCD: '.$dataPcd.'
                                    <br>ET: '.$dataEt.'
                                    <div class="product-price"><del>฿'.$value->product_price.' ‎</del><a id="orange19"> ฿'.$value->product_price_discount.'</a></div>
                                    <div class="product-price2 text-center">
                                        <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="products-detail.php"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else {
                        $html_product .= '
                        <div class="col-xl-3 col-md-6">
                            <div class="img_product">
                                <img src="'.$pathimg.'" width="100%" alt="Avatar" class="image_product">
                            </div>
                            <div class="text_product">
                                <div class="product-name">
                                    <div class="about-us">
                                        <h6 id="black-lr" class="color-orange-1-padding" style="padding-left: 5px;margin-bottom: 0px!important">'.$value->product_name.'</h6>
                                    </div>
                                    Size: '.$dataSize.'
                                    <br>PCD: '.$dataPcd.'
                                    <br>ET: '.$dataEt.'
                                    <div class="product-price"><a id="orange19"> ฿'.$value->product_price.'</a></div>
                                    <div class="product-price2 text-center">
                                        <button type="button" class="btn btn-black-unavialable rounded-0 text-center" style="color: #fff;"><a href="'.$path.'"><img src="smb-frontend/images/cart_small.png"> ADD PRODUCTS</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                }
            }
        }
        $data = array(
            'html_product' => $html_product,
            'brand' => $brand,
            'producttype' => $producttype,
            'carbrand' => $carbrand,
            'size' => $size,
            'sizetire' => $sizetire,
            'size_diameter' => $size_diameter,
        );
        return view('frontend.productresult-search', $data);
    }

    public function AddtoCart(Request $request)
    {
        Cart::add(array(
            'id' => $request->size_id,
            'name' => $request->price_name,
            'price' => $request->price,
            'quantity' => $request->amountProduct,
            'attributes' => array(
                'product_type' => $request->Product_type,
            )
        ));
        $cartCollection = Cart::getContent();
    }

    public function account_customer(Request $request)
    {
        $getProductCart = Cart::getContent();
        $productTotal = Cart::getTotalQuantity();
        $productPriceTotal = Cart::getTotal();
        $id = auth('customer')->user()->user_id;
        $getUser = User::find($id);
        $getAddress = address::where('address_user_id', $getUser->user_id)->get();
        $data = array(
            'productTotal' => $productTotal,
            'productPriceTotal' => $productPriceTotal,
            'getProductCart' => $getProductCart,
            'getAddress' => $getAddress,
            'getUser' => $getUser,
        );
        return view('frontend.my-account-customer', $data);
    }

    public function account_customer_payment(Request $request)
    {
        return view('frontend.my-account-payment');
    }

    public function delProductInCart(Request $request)
    {
        Cart::remove($request->id);
    }

    public function new_address(Request $request)
    {
        $user = User::find($request->user_id);
        DB::beginTransaction();
        try {
            $address = new address;
            $address->address_user_id                   = $request['user_id'];
            $address->address_user_name                 = $request['name'];
            $address->address_user_lname                = $request['lname'];
            $address->address_1                         = $request['address1'];
            $address->address_2                         = $request['address2'];
            $address->address_sub_district              = $request['sub_district'];
            $address->address_county                    = $request['county'];
            $address->address_province                  = $request['province'];
            $address->address_postalcode                = $request['postalcode'];
            $address->address_email                     = $request['email'];
            $address->address_phone                     = $request['phone'];
            $address->address_email_delivery            = $request['email_delivery'];
            $address->address_phone_delivery            = $request['phone_delivery'];
            $address->save();

            DB::commit();
            return back()->withSuccess('New Addredd Has Been Saved!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withError('Something Wrong. New Addredd Can Not Saved!');
        }
    }

    public function searchaward(Request $request)
    {
        dd($request->all());
        $car = carbrand::orderBy('car_brand_id');
    }

    public function filter_size(Request $request, $id)
    {
        // dd($request->all());
        $size = size::where('size_diameter', $request->size_no)->where('size_color_id', $id)->where('size_fkey', $request->product_id)->orderBy('size_diameter','ASC')->get();
        $html = '';
        foreach ($size as $key => $value) {
            $html .= '
            <li class="size checkSizePrice" data-sizeId="'.$value->size_id.'">
                <span class="col-size">'.$value->size_diameter.' x '.$value->size_width.'</span>
                <span class="col-ET">'.$value->size_et.'</span>
                <span class="col-PCD">'.$value->size_pcd.'</span>
            </li>
            ';
        }
        if ($size[0]->size_promotion_status == 1) {
            $html_price = '<div class="through">ราคาปกติวงละ<span>'.$size[0]->size_price.'</span>บาท</div>';
            $html_price_promotion = '<div class="special-price">ราคาพิเศษวงละ<span style="background: #ed1e25; color:#fff;" id="price">'.$size[0]->size_promotion_price.'</span>บาท</div>';
        } else {
            $html_price = '<div class="special-price">ราคาปกติวงละ<span style="background: #ed1e25; color:#fff;" id="price">'.$size[0]->size_price.'</span>บาท</div>';
            $html_price_promotion = '';
        }
        $data = array(
            'size' => $size,
            'html' => $html,
            'html_price' => $html_price,
            'html_price_promotion' => $html_price_promotion,
        );
        return $data;
    }

    public function pickcolor(Request $request, $id)
    {
        // dd($request->all());
        $size = size::where('size_color_id', $id)->groupBy('size_diameter')->get();
        $html = '';
        foreach ($size as $key => $value) {
            if ($key == 0) {
                $html .= '
                <li class="nav-item">
                    <a class="nav-link filter_size active" id="size'.$key.'-tab" data-toggle="tab" href="#size'.$key.'" role="tab" aria-controls="size'.$key.'" aria-selected="true" data-color_id="'.$value->size_color_id.'" data-product_id="'.$value->size_fkey.'">'.$value->size_diameter.'</a>
                </li>
                ';
            } else {
                $html .= '
                <li class="nav-item">
                    <a class="nav-link filter_size " id="size'.$key.'-tab" data-toggle="tab" href="#size'.$key.'" role="tab" aria-controls="size'.$key.'" aria-selected="true" data-color_id="'.$value->size_color_id.'" data-product_id="'.$value->size_fkey.'" data-size_diameter="'.$value->size_diameter.'">'.$value->size_diameter.'</a>
                </li>
                ';
            }
        }

        $data = array('html' => $html,);
        return $data;
    }

    public function sizeCheckPrice(Request $request)
    {
        $size = size::where('size_id', $request->sizeID)->first();
        $htmlPrice = '';
        $htmlPromotionPrice = '';
        if ($size->size_promotion_status == 1) {
            $htmlPrice = '<div class="through">ราคาปกติวงละ<span>'.$size->size_price.'</span>บาท</div>';
            $htmlPromotionPrice = '<div class="special-price">ราคาพิเศษวงละ<span style="background: #ed1e25; color:#fff;" id="price">'.$size->size_promotion_price.'</span>บาท</div>';
        } else {
            $htmlPrice = '<div class="special-price">ราคาปกติวงละ<span style="background: #ed1e25; color:#fff;" id="price">'.$size->size_price.'</span>บาท</div>';
            $htmlPromotionPrice = '';
        }
        $data = array('htmlPrice' => $htmlPrice, 'htmlPromotionPrice' => $htmlPromotionPrice, 'size' => $size);
        return $data;
    }

    public function filterdatawheels(Request $request)
    {
        if ($request->WheelSize != 'เลือก') {
            $size = size::where('size_diameter', $request->WheelSize)->orderBy('size_diameter', 'ASC')->groupBy('size_pcd')->get();
            $html_pcd = '<option selected disabled>เลือก</option>';
            foreach ($size as $key => $value) {
                if ($value->size_pcd == null) {
                    $html_pcd .= '';
                } else {
                    $html_pcd .= '<option value="'.$value->size_pcd.'">'.$value->size_pcd.'</option>';
                }
            }
            $data = array(
                'html_pcd' => $html_pcd,
            );
        }
        return $data;
    }
}
