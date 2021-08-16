<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Bonus;
use App\Models\package;
use Illuminate\Http\Request;

class depositController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $data = package::get();
        return view ('layout.deposit', ['data' => $data ]);
    }

    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    
    public function store(Request $request){
        $this->validate($request, [
                'package'=>'required',
                'amount'=>'required',
        ]);

                    $data = Deposit::where('id', auth()->user()->id)
                                    ->get();
                    if (Deposit::where('id', auth()->user()->id)->exists()) {
                                        Deposit::create([
                                            'transaction_id'=> $this->randomDigit(),
                                            'user_id'=> auth()->user()->userID,
                                            'username' =>auth()->user()->uname,
                                            'amount'=>$request->amount,
                                            'package'=>$request->package,
                                            'interest'=>'',
                                            'status'=>'PENDING',
                                            'dayCounter'=>'0',
                                        ]);    
                                        
                                        return redirect()->route('dashboard');

                                    } 
                     if (Deposit::where('id', auth()->user()->id)->doesntExist()) {
                     
                                                $datauser1 = User::where('id', auth()->user()->id)
                                                ->get()->first();
                                                $datauser1 = ['datauser1' => $datauser1];
                                    $referral1 = $datauser1['myreferral_id'];
                                    $referee = $datauser1['uname'];
                                    $referral1Amt = $request->amount *5/100;

                                    Bonus::create([
                                        'referral_id' => $referral1,
                                        'referee' =>  $referee,
                                        'amount' => $referral1Amt,
                                    ]);

                                    $datauser2 = User::where('myreferral_id',  $referral1)
                                                ->get();
                                                $datauser2 = ['datauser2' => $datauser2];
                                    $referral2 = $datauser2['myreferral_id'];
                                    $referee2 = $datauser2['uname'];
                                    $referral2Amt = $request->amount *3/100;

                                    Bonus::create([
                                        'referral_id' => $referral2,
                                        'referee' =>  $referee2,
                                        'amount' => $referral2Amt,
                                    ]);

                                    $datauser3 = User::where('myreferral_id',  $referral2)
                                                ->get();
                                                $datauser3 = ['datauser3' => $datauser3];
                                    $referral3 = $datauser3['myreferral_id'];
                                    $referee3 = $datauser3['uname'];
                                    $referral3Amt = $request->amount *2/100;

                                    Bonus::create([
                                        'referral_id' => $referral3,
                                        'referee' =>  $referee3,
                                        'amount' => $referral3Amt,
                                    ]);
                                    Deposit::create([
                                        'transaction_id'=> $this->randomDigit(),
                                        'user_id'=> auth()->user()->userID,
                                        'username' =>auth()->user()->uname,
                                        'amount'=>$request->amount,
                                        'package'=>$request->package,
                                        'interest'=>'',
                                        'status'=>'PENDING',
                                        'dayCounter'=>'0',
                                    ]);    
                                    
                                    return redirect()->route('dashboard');
                                        
                             }
                                
        
    }
}
