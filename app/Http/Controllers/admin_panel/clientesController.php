<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientVerifyEditRequest;
use App\Http\Requests\ClientVerifyRequest;
use Illuminate\Support\Facades\DB;
use App\Clients;

class clientesController extends Controller
{
    public function index(){


        $result = Clients::all();

        return view ('admin_panel.Clients.index')
        ->with('ClientsList',$result);
    }
    

    public function posted(ClientVerifyRequest $request){


        $cli = new Clients();
        $cli->name = $request->Name;
        $cli->email =$request->Email;
        $cli->phone = $request->Phone;
        $cli->province = $request->Province;
        $cli->city = $request->City;
        $cli->save();
        return redirect()->route('admin.Clients');

    }

    public function edit($id)
    {
        

        $cli = Clients::find($id);
        
        return view('admin_panel.Clients.edit')
            ->with('Clients', $cli);
    }

    public function update(ClientVerifyEditRequest $request, $id)
    {
      
        $cliToUpdate = Clients::find($request->id);
        $cliToUpdate->name = $request->Name;
        $cliToUpdate->email = $request->Email;
        $cliToUpdate->phone = $request->Phone;
        $cliToUpdate->province = $request->Province;
        $cliToUpdate->city = $request->City;   
        $cliToUpdate->save();
        
        return redirect()->route('admin.Clients');
    }

    public function delete($id)
    {
       
        $cli = Clients::find($id);

        return view('admin_panel.Clients.delete')
            ->with('Clients', $cli);
    }

    public function destroy($id){

        $cliToDelete = Clients::find($id);
        $cliToDelete->delete();
        
        return redirect()->route('admin.Clients');
    }
    
}
