<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rules = Validator::make(
            $request->all(),
                [
                    'email' => 'required|unique:users|email',
                    'username' => 'required|unique:users',
                    'password' => 'required|min:8',
                    'terms' => 'required',
                    '_token' => 'required',
                    'confirm-password' => 'required_with:password|same:password|min:8'
                ]
            );
        
        if($rules->fails()){
            return redirect('signup')->withErrors($rules)->withInput();
        }
        try{
            $user = new user;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->remember_token = $request->_token;
            if($user->save()){
                session(['Alldata'=>$user]);
            }
            return redirect('home')->with('success', ($request['username']." is registered !!"));
        }catch(Exception $e){
            return redirect('signup')->with('error', "Something went wrong !! please TRY AGAIN ")->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function forceLogout(Request $request)
    {
        $user = Auth::guard('web')->user();
        $user->remember_token = $request->_token;
        if($user->save()){
            session(['Alldata'=>$user]);
        }
        return redirect('home')->with('success', ($user['username']." is logged in Successfully!!"));
        // return redirect('home')->with('status', ($user['email']));
        
    }

    public function login(Request $request){

        $rules = Validator::make(
            $request->all(),
        [   'email' => 'required|email',
            'password' => 'required|min:8',
            '_token' => 'required',
        ]);
        
        if($rules->fails()){
            return redirect('login')->withErrors($rules)->withInput();    
        }
        $rules = [  'email' => $request['email'],
                    'password' => $request['password'],
                    ];
        try{
            if (Auth::guard('web')->attempt($rules)) {
                $user = Auth::guard('web')->user();
                if(!empty($user->remember_token)){
                    return redirect('forceLogout?ID='.$user->remember_token);
                } else{
                    $user->remember_token = $request->_token;
                }
                if($user->save()){
                session(['Alldata'=>$user]);
                }
                return redirect('home')->with('success', ($request['username']." Login successfully !!")); 
            }else{
                return redirect('login')->with('error', "Wrong Email or Password !! please TRY AGAIN ")->withInput();
            }
        }catch(Exception $e){
            return redirect('login')->with('error', "Something went wrong !! please TRY AGAIN ")->withInput();
        }
    
    }
    /**
     * Display the specified resource.
     */
    public function logout(Request $request)
    {
        $user = Auth::guard('web')->user();
        session()->forget('Alldata');
        $user->remember_token = "";
        $user->save();
        return redirect('login')->with('success', (" Logout successfully !!")); 
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
