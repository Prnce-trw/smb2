<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;
use URL;
use App\User;
use App\activitylog;
use Storage;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bg = ['bg-1', 'bg-2', 'bg-3', 'bg-4'];
        $user = User::where('user_status', 1)->get();
        $data = array(
            'user' => $user, 
            'bg' => $bg, 
        );
        return view('backoffice.user.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.modal.createadmin');
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
            if ($request['status'] == 1) {
                $user = new User();
                $user->name 	        = $request['name'];
                $user->user_lname 	    = $request['lname'];
                $user->user_status 	    = 1;
                $user->user_phone 	    = $request['phone'];
                $user->email 	        = $request['email'];
                $user->user_img 	    = 'nopic.png';
                $user->password 	    = Hash::make($request->password);
                $user->save();
    
                // Activity Log
                $log = new activitylog();
                $log->log_user_id       = Auth::user()->user_id;
                $log->log_description   = "Create New Admin Account";
                $log->log_url           = URL::full();
                $log->log_sitemap_id    = 6;
                $log->save();
            }
            return redirect('backoffice/user')->withSuccess('New Account Has Been Saved!');
        } catch (\Throwable $th) {
            return redirect('backoffice/user')->withError('Something Wrong. New Account Can Not Saved!');
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
        $user = User::find($id);
        $data = array('user' => $user, );
        return view('backoffice.user.modal.editadmin', $data);
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
        $user = User::find($id);
        if ($request['status'] == 1) {
            $user->name 	         = $request['name'];
            $user->user_lname 	     = $request['lname'];
            $user->user_status 	     = 1;
            $user->user_phone 	     = $request['phone'];
            $user->email 	         = $request['email'];
            if ($request->password != null) {
                $user->password 	     = Hash::make($request->password);
            }
            if ($request->file('profile') != null) {
                $imgprofile = $request->file('profile');
                foreach($imgprofile as $key => $item) {
                    if ($user->user_img != 'nopic.png') {
                        unlink('local/storage/app/userprofile/'.$user->user_img);
                    }
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->storeAs('userprofile',  $name);
                    $user->user_img = $name;
                }
            }
            $user->save();

            // Activity Log
            $log = new activitylog();
            $log->log_user_id       = Auth::user()->user_id;
            $log->log_description   = "Updated Account";
            $log->log_url           = URL::full();
            $log->log_sitemap_id    = 1;
            $log->log_activeon_id   = $id;
            $log->save();
        }
        if ($user->save()) {
            return back()->withSuccess('New Account Has Been Saved!');
        } else {
            return back()->withError('Something Wrong. New Account Can Not Saved!');
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
        $user = User::find($id);
        
        $log = activitylog::where('log_activeon_id', $id)->get();
        foreach ($log as $key => $value) {
            $value->delete();
        }
        $image_path = Storage::delete('userprofile/'.$user->user_img);
        $user = User::destroy($id);
        $user->save();

        // Activity Log
        $log = new activitylog();
        $log->log_user_id       = Auth::user()->user_id;
        $log->log_description   = "Deleted Account";
        $log->log_url           = URL::full();
        $log->log_sitemap_id    = 1;
        $log->log_activeon_id   = $id;
        $log->save();
        
        return back();
    }

    public function checkemail(Request $request)
    {
        $email = User::where('email', '=', $request->email)->get();
        
        if ($email != null) {
            $html = '';
            foreach ($email as $key => $value) {
                $html .= '<span style="color: red">'.$value->email.', </span>';
            }
        } 
        $data = array(
            'html' => $html, 
        );
        return $data;
    }

    public function profile($id)
    {
        $bg = ['bg-1', 'bg-2', 'bg-3', 'bg-4'];
        $log = activitylog::where('log_user_id', $id)->orderBy('log_id','DESC')->paginate(10);
        $user = User::find($id);
        $data = array(
            'user' => $user, 
            'bg' => $bg, 
            'log' => $log, 
        );
        return view('backoffice.user.profile', $data);
    }

    public function customerIndex()
    {
        $bg = ['bg-1', 'bg-2', 'bg-3', 'bg-4'];
        $user = User::where('user_status', 2)->get();
        $data = array(
            'user' => $user, 
            'bg' => $bg, 
        );
        return view('backoffice.user.customer', $data);
    }
}
