<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoyalityVerifyRequest;
use Illuminate\Support\Facades\DB;
use App\fiels;

class cardsController extends Controller
{
    public function index(){


        $result = fiels::all();

        return view ('admin_panel.cards.index')
        ->with('fielList',$result);
    }

    public function edit($id)
    {
        

        $cli = fiels::find($id);
        
        return view('admin_panel.Clients.edit')
            ->with('fielList', $result);
    }


    public function delete($id)
    {
       
        $cli = fiels::find($id);

        return view('admin_panel.Clients.delete')
            ->with('fiels', $cli);
    }

    public function destroy($id){

        $cliToDelete = fiels::find($id);
        $cliToDelete->delete();
        
        return redirect()->route('admin_panel.cards');
    }
    
}
