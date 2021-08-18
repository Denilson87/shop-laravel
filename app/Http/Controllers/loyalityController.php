<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoyalityVerifyRequest;
use Illuminate\Support\Facades\DB;
use App\fiels;

class loyalityController extends Controller
{
 public function index(){

    return view ('store.loyality');
   
 }

    public function store(LoyalityVerifyRequest $request){

        $vip = new fiels();
        $vip->name = $request->Name;
        $vip->email = $request->Email;
        $vip->phone = $request->Phone;
        $vip->save();
        // echo '<p>Registo efectuado com sucesso, sera contactado para mais informações!</p>';
         return redirect()->route('Registration.success');
        //return redirect('store.success');
    }

    public function view2(){

        return view('store.success');
    }
    

}
