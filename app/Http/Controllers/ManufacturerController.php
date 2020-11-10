<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class ManufacturerController extends Controller
{
    public function createManufacturer(){
        return view('admin.manufacturer.createManufacturer');
    }
    public function storeManufacturer(Request $request){
        //return $request->all();
        $this->validate($request,[
            'manufacturer_name'=>'required',
            'manufacturer_discription'=>'required',
        ]);
        
        $manufacturer=new Manufacturer;
        $manufacturer->manufacturer_name=$request->manufacturer_name;
        $manufacturer->manufacturer_discription=$request->manufacturer_discription;
        $manufacturer->publication_status=$request->publication_status;
        $manufacturer->save();
        return redirect('/manufacturer/add')->with('msg','Manufacturer Info create Successfully');
    }
    
    public function manageManufacturer(){
        $manufactures=Manufacturer::all();
        return view('admin.manufacturer.manageManufacturer',['Manufacturers'=>$manufactures]);
    }
    
    public function editManufacturer($id){
        //return $id;
        $manufacturerById=Manufacturer::where('id',$id)->first();
        return view('admin.manufacturer.editManufacturer',['ManufacturerByID'=>$manufacturerById]);
    }
    
    public function updateManufacturer(Request $request){
        $manufacturerById=Manufacturer::find($request->id);
        $manufacturerById->manufacturer_name=$request->manufacturer_name;
        $manufacturerById->manufacturer_discription=$request->manufacturer_discription;
        $manufacturerById->publication_status=$request->publication_status;
        $manufacturerById->save();
        return redirect('/manufacturer/manage')->with('msg','Manufacturer Info Update Successfully');
    }
    public function deleteManufacturer($id){
        //return $id;
        $deletemanufacture=Manufacturer::find($id);
        $deletemanufacture->delete();
        return redirect('/manufacturer/manage')->with('msg','Manufacturer Deleted Successfully',['class','text text-danger']);
    }
}
