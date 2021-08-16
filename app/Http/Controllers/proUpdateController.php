<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
class proUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('layout.profile');
    }

    public function photoupdate(Request $request){
            $this->validate($request, [
                'file' => 'required | image',
            ]);
            $data = User::find(auth()->user()->id);
            $input = $request->all();
  
        if ($image = $request->file('file')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data ->photo = "image/$profileImage";
        }else{
            unset($input['photo']);
        }
          
        $data->save();
           
            return back();
    
            // $filename=$request->file('file')->getClientOriginalName() ;
            // $data->photo = $request->file('file')->storeAs('public/image', $filename) ;
            // $data->save();
            // return back();
    }
    public function updateprofile(Request $request){
            $this->validate($request, [

                'lname' => 'required',
                'fname'=> 'required',
                'uname'=> 'required',
                'email'=> 'required',
                'phone'=>'required',
                'nationality'=> 'required',
            ]);
            $data = User::find(auth()->user()->id);
            $data->lname = $request->lname;
            $data->fname = $request->fname;
            $data->uname = $request->uname;
            $data->email = $request->email;
            $data->nationality = $request->nationality;

            $data->save();
           
            return back();
    }

    public function updatepassword(Request $request){
        $this->validate($request, [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
    ]);

    $data = User::find(auth()->user()->id);
    $data->password = Hash::make($request->new_password);
    $data->save();
        return redirect()->route('login');
    

    }
}
