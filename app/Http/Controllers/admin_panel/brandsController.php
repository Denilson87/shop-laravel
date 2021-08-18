<?php

namespace App\Http\Controllers\admin_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsEditVerifyRequest;
use App\Http\Requests\BrandsVerifyRequest;
use Illuminate\Support\Facades\DB;
use App\Brands;
use App\Product;




class brandsController extends Controller
{
    public function index()
    {
        $result = Brands::all();

    	return view('admin_panel.Brands.index')
    		->with('Brandslist', $result);
        
    }
    
    public function posted( BrandsVerifyRequest $request)
    {
        $bra = new brands();
        $bra->name = $request->Name;
        $bra->type = $request->Type;
        $bra->save();
        return redirect()->route('admin.Brands');
    }
    
    public function edit($id)
    {
        

        $bra = Brands::find($id);
        
        return view('admin_panel.Brands.edit')
            ->with('Brands', $bra);
    }

    public function update(BrandsEditVerifyRequest $request, $id)
    {
      
        $braToUpdate = Brands::find($request->id);
        $braToUpdate->name = $request->Name;
        $braToUpdate->type = $request->Type;
        $braToUpdate->save();
        
        return redirect()->route('admin.Brands');
    }
    
    public function delete($id)
    {
       
        $bra = Brands::find($id);

        return view('admin_panel.Brands.delete')
            ->with('Brands', $bra);
    }

    public function destroy(Request $request)
    {   //Deleting Marca related Products
        $prdsToDelete = Product::all()->where('Brands_id', $request->id);
        
        foreach ($prdsToDelete as $prdToDelete)
        {   
          //deleting image folder
        try{
            $src='uploads/products/'.$prdToDelete->id.'/';
            $dir = opendir($src);
            while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    rrmdir($full);
                }
                else {
                    unlink($full);
                }
                }
            }
            closedir($dir);
            rmdir($src);
        }
        catch(\Exception $e){

        }
        //deleting image folder done
        $prdToDelete->delete();

        }
        
        $braToDelete = Brands::find($request->id);
        $braToDelete->delete();

        

        return redirect()->route('admin.Brands');
    }
}
