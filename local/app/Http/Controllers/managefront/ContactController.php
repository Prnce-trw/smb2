<?php

namespace App\Http\Controllers\managefront;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;
use App\contactbanner;
use Storage;
use DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::findOrFail(1);
        $contact_branch = contact::where('contact_id', '!=',  1)
        ->orderBy('contact_sort', 'ASC')
        ->get();
        $data = array(
            'contact' => $contact, 
            'contact_branch' => $contact_branch, 
        );
        return view('backoffice.managefront.contact.contact', $data);
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
            $contact = new contact();
            $contact->contact_title	         = $request['title'];
            $contact->contact_detail	     = $request['detail'];
            $contact->contact_tell  	     = $request['tel'];
            $contact->contact_opentime	     = $request['opentime'];
            $contact->contact_sat	         = $request['sat'];
            $contact->contact_facebook	     = $request['facebook'];
            $contact->contact_twitter	     = $request['twitter'];
            $contact->contact_youtube	     = $request['youtube'];
            $contact->contact_linkmap	     = $request['linkgooglemap'];
            $contact->contact_address	     = $request['address'];
            $contact->contact_sort	         = contact::count()+1;
            if ($request->file('imgcov') !== null)
            {
                $img = $request->file('imgcov');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('contact',  $name);
                    $contact->contact_img  = $name;
                }
            } else {
                $contact->contact_img  = 'nopic.png';
            }

            if ($request->file('map') !== null)
            {
                $map = $request->file('map');
                foreach($map as $key => $value) {
                    $name = rand().time().'.'.$value->getClientOriginalExtension();
                    $value->storeAs('contact',  $name);
                    $contact->contact_imgmap  = $name;
                }
            } else {
                $contact->contact_imgmap  = 'nopic.png';
            }

            $contact->save();

            if ($request->file('banner') !== null) {
                $banner = $request->file('banner');
                foreach($banner as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('contact',  $name);
                    $contactbanner = new contactbanner();
                    $contactbanner->cb_name         = $name;
                    $contactbanner->cb_contact_id   = $contact->contact_id;
                    $contactbanner->save();
                }
            }
            DB::commit();
            return redirect('backoffice/contact')->withSuccess('New Dealer Has Been Saved!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/contact')->withError('Something Wrong. New Dealer Can Not Updated!');
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
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $contact = contact::where('contact_id', $request->id)->first();
        // dd($contact->getContactBanners->first()->cb_name);
        $data = array(
            'contact' => $contact, 
        );
        return view('backoffice.managefront.contact.modal.edit', $data);
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
            $contact = contact::where('contact_id', $id)->first();
            $contact->contact_title	         = $request['title'];
            $contact->contact_detail	     = $request['detail'];
            $contact->contact_tell  	     = $request['tel'];
            $contact->contact_opentime	     = $request['opentime'];
            $contact->contact_sat	         = $request['sat'];
            $contact->contact_facebook	     = $request['facebook'];
            $contact->contact_twitter	     = $request['twitter'];
            $contact->contact_youtube	     = $request['youtube'];
            $contact->contact_line	         = $request['line'];
            $contact->contact_linkmap	     = $request['linkgooglemap'];
            $contact->contact_address	     = $request['address'];
            $contact->contact_tell	         = $request['tell'];
            if ($request->file('editimgcov') !== null) {
                $imgcov = $request->file('editimgcov');
                foreach ($imgcov as $key => $value) {
                    unlink('local/storage/app/contact/'.$contact->contact_img);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('contact',  $name);
                    $contact->contact_img = $name;
                }
            }

            // edit map
            if ($request->file('editmap') !== null) {
                $imgmap = $request->file('editmap');
                foreach ($imgmap as $key => $value) {
                    unlink('local/storage/app/contact/'.$contact->contact_imgmap);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('contact',  $name);
                    $contact->contact_imgmap = $name;
                }
            }
            $contact->save();

            // store banner
            if ($request->file('addbanner') !== null) {
                $addimgbanner = $request->file('addbanner');
                foreach ($addimgbanner as $key => $value) {
                    $name = rand().time().'.'.$value->getClientOriginalExtension();
                    $value->storeAs('contact',  $name);
                    $contactbanner = new contactbanner();
                    $contactbanner->cb_name         = $name;
                    $contactbanner->cb_contact_id   = $id;
                    $contactbanner->save();
                }
            }

            // edit banner
            if ($request->file('editbanner') !== null) {
                $imgbanner = $request->file('editbanner');
                foreach($imgbanner as $key => $item) {
                    $dataimgbanner = contactbanner::where('cb_id', $key)->first();
                    unlink('local/storage/app/contact/'.$dataimgbanner->cb_name);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('contact',  $name);
                    $dataimgbanner->cb_name = $name;
                    $dataimgbanner->save();
                }
            }

            // delete banner
            if ($request['deletebanner'] != null) {
                $banner_id = $request['deletebanner'];
                foreach ($banner_id as $key => $value) {
                    $getCB = contactbanner::find($value);
                    Storage::delete('contact/'.$getCB->cb_name);
                    $getCB = contactbanner::where('cb_id', $value)->delete();
                }
            }
            DB::commit();
            return redirect('backoffice/contact')->with('success','Contact Has Been Updated!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/contact')->with('error','Something Wrong. Contact Can Not Updated!');
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
            $contact = contact::destroy($id);
            DB::commit();
            return redirect('backoffice/contact')->with('success','Contact Has Been Deleted!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('backoffice/contact')->with('error','Something Wrong. Contact Can Not Deleted!');
        }
    }

    public function branch_sort(Request $request)
    {
        $id = $request->get('id');
        foreach($id as $Key => $item) {
            $contact = contact::where('contact_id', $item)->first();
            $contact->contact_sort = $Key+1;
            $contact->save();
        };
    }
}
