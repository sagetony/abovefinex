<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class depositHisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 


    public function index(){
        $data = Deposit::where('id', auth()->user()->id)
        ->get();
        
        return view('layout.deposithistory', ['data'=> $data]);
    }
    
}
