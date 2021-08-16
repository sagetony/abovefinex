<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
    public function index(){
        return view('layout.login');
    }

    public function store(Request $request){
            $this->validate($request, [

                'uname'=>'required',
                'password'=>' required',
            ]);
            
            $loginauth = $request->only('uname', 'password');
           
            if(auth::attempt($loginauth)){
                return redirect()->route('dashboard');
            }else{
                return back()->with('status', 'Invalid Login Details');
            }
    }
}
