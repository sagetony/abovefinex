<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function index(Request $request){
        $referral = ['referral' => $request->ref]; 
        return view('layout.register', $referral);
    }
    public function rand(){
        $userid = rand(1000000000000, 0000000000000);
        return $userid;
    }

    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    
    public function store(Request $request){

        $this->validate($request, [
            'lname' => 'required',
            'fname'=> 'required',
            'uname'=> 'required',
            'email'=> 'required',
            'phone'=>'required',
            'password'=>['required', 'max:39', 'min:8'],
            'inlineCheckbox1' =>'required',

        ]);

             User::create([
            'userID' => $this->randomDigit(),
            'fname'=> $request->fname,
            'lname' => $request->lname,
            'uname'=> $request->uname,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'myreferral_id'=> $this->randomDigit(),
            'referral'=> $request->referral,
            'password'=>Hash::make($request->password),
            'photo' => 'assets/images/AvatarMaker.png',
            
            ]);

            return redirect()->route('login');
    }

    
      
}
