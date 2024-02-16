<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        $users =  Admin::all();
        return $users;
    }

    public function login(Request $request){

        $rules = Validator::make(
            $request->all(),
        [   'username' => 'required',
            'password' => 'required',
            '_token' => 'required',
        ]);
        
        if($rules->fails()){
            return redirect('admin/login')->withErrors($rules)->withInput();    
        }
        $rules = [  'username' => $request['username'],
                    'password' => $request['password'],
                    ];
        try{
            if (Auth::guard('admin')->attempt($rules)) {
                $user = Auth::guard('admin')->user();
                if(!empty($user->remember_token)){
                    return redirect('/admin/forceLogout?ID='.$user->remember_token);
                } else{
                    $user->remember_token = $request->_token;
                }
                if($user->save()){
                session(['adminData'=>$user]);
                }
                return redirect('/admin/dashboard')->with('success', ($request['username']." Login successfully !!")); 
            }else{
                return redirect('/admin/login')->with('error', "Wrong Email or Password !! please TRY AGAIN ")->withInput();
            }
        }catch(Exception $e){
            return redirect('/admin/login')->with('error', "Something went wrong !! please TRY AGAIN ")->withInput();
        }
    }
        /**
     * Store a newly created resource in storage.
     */
    public function forceLogout(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $user->remember_token = $request->_token;
        if($user->save()){
            session(['adminData'=>$user]);
        }
        return redirect('admin/dashboard')->with('success', ($user['username']." is logged in Successfully!!"));
        // return redirect('home')->with('status', ($user['email']));
        
    }
    /**
     * Display the specified resource.
     */
    public function logout(Request $request)
    {
        $user = Auth::guard('admin')->user();
        session()->forget('adminData');
        $user->remember_token = "";
        $user->save();
        return redirect('/admin/login')->with('success', (" Logout successfully !!")); 
        
    }
}
