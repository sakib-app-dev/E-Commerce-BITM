<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;// Elequent ORM 2 no process er jonno
use DB;// query builder 3 no process er jonno

class CategoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }
    
    // 3 Process e data DB te save kora jay-->
    
    // -- Elequent ORM use kore 1st process--
    
    public function storeCategory(Request $request){
////        return $request->all();
        

        $this->validate($request, [
            'category_name'=>'required',
            'category_discription'=>'required'
        ]);
        
        $Category=new Category();  //use App\Category; dite hobe upore
        $Category->category_name=$request->category_name;
        $Category->category_discription=$request->category_discription;
        $Category->publication_status=$request->publication_status;
        $Category->save();
//        return "Save successfully";
//
//    }
    
    
    
    // --Elequent ORM diya arekta process--
    //  Olpo data er jonno use full
    //form er name ar Db table er attribute er name Same Dite hna
//    public function storeCategory(Request $request){
////        return $request->all();
//        Category::create($request->all());// er jonno #app->providers->Category.php tee information dite hba
//        return "Save successfully";
//

    
    
    //--Query Builder diya process DB USE korte hba upore
    
//        DB::table('categories')->insert([
//                    'category_name'=>$request->category_name,
//                    'category_discription'=>$request->category_discription,
//                    'publication_status'=>$request->publication_status,
//                ]);
        //return 'Category Info save Sucessfully';
        //return redirect('/category/add');
        return redirect('/category/manage')->with('msg','Catagory Info Save Successfully');
        //return redirect()->back();
    }
    
    
    public function manageCategory(){
        $categories= Category::all();
        return view('admin.category.manageCategory',['Categories'=>$categories]);
    }
    
    public function editCategory ($id){
        //return $id;
        $categoryById= Category::where('id',$id)->first();
        return view('admin.category.editCategory',['CategoryById'=>$categoryById]);
    }
    
    public function updateCategory(Request $request){
        //dd($request->all());
        $CategoryById= Category::Find($request->id);
        $CategoryById->category_name=$request->category_name;
        $CategoryById->category_discription=$request->category_discription;
        $CategoryById->publication_status=$request->publication_status;
        $CategoryById->save();
        return redirect('/category/manage')->with('msg','Update Successfully');
        
    }
    
    public function deleteCategory($id){
        $categoryDelete= Category::Find($id);
        $categoryDelete->delete();
        return redirect('/category/manage')->with('msg','Category Deleted Successfully');
    }
}
