<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class welcomeController extends Controller
{
    public function index(){
        $PublishedProduct=Product::where('publication_status',1)->get();
        return view('frontEnd.home.homeContent',['PublishedProducts'=>$PublishedProduct]);       
        
    }
    public function Catagory($id){
        $published_Category_Product=Product::where('categoryID',$id)
                ->where('publication_status',1)
                ->get();
        
        return view('frontEnd.category.catagoryContent',['PublishedCategoryProducts'=>$published_Category_Product]);  
    }
    public function ProductContent($id){
  
        $products_info=Product::where('id',$id)->first();
        return view('frontEnd.product.productContent',['product_info'=>$products_info]);       
        
    }
    public function Contact(){
  
        return view('frontEnd.contact.contact');       
        
    }
}
