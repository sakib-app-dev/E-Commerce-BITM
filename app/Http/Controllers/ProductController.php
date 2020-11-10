<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createProduct(){
        $category=Category::where('publication_status',1)->get();
        $manufacturer= Manufacturer::where('publication_status',1)->get();
        return view('admin.product.createProduct',['categories'=>$category,'manufacturers'=>$manufacturer]);
    }
    public function storeProduct(Request $req){
        $this->validate($req,[
            'product_name'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        
        $product_image=$req->file('image');
        $imageName=$product_image->getClientOriginalName();
        $uploadPath='public/imgProduct/';
        $product_image->move($uploadPath,$imageName);
        $imgUrl=$uploadPath.$imageName;
        $this->saveProduct($req,$imgUrl);
        
//        echo '<pre>';
//        print_r($product_image);
//        return $req->all();
//        exit();
        return redirect('/product/manage')->with('msg','Product Save Successfully');
    }
    public function saveProduct($req,$imgUrl){
        $product=new Product();
        $product->product_name=$req->product_name;
        $product->categoryID=$req->categoryID;
        $product->menufacturarID=$req->menufacturarID;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->category_short_discription=$req->category_short_discription;
        $product->category_long_discription=$req->category_long_discription;
        $product->image=$imgUrl;
        $product->publication_status=$req->publication_status;
        $product->save();
        
    }
    public function manageProduct(){
        $productInfo=DB::table('products')
                ->join('categories','products.categoryID','=','categories.id')
                ->join('manufacturers','products.menufacturarID','=','manufacturers.id')
                ->select('products.*','categories.category_name','manufacturers.manufacturer_name')
                ->get();
        return view('admin.Product.manageProduct',['Products'=>$productInfo]);
    }
    
    public function viewProduct($id){
        $productInfoById=DB::table('products')
                ->join('categories','products.categoryID','=','categories.id')
                ->join('manufacturers','products.menufacturarID','=','manufacturers.id')
                ->where('products.id',$id)
                ->select('products.*','categories.category_name','manufacturers.manufacturer_name')
                ->first();
        return view('admin.Product.viewProduct',['ProductsById'=>$productInfoById]);
    }
    public function editProduct($id){
        $category=Category::where('publication_status',1)->get();
        $manufacturer= Manufacturer::where('publication_status',1)->get();
        $productInfo=Product::where('id',$id)->first();
        return view('admin.Product.editProduct',['ProductInfoById'=>$productInfo,'categories'=>$category,'manufacturers'=>$manufacturer]);
    }
    
    public function updateProduct(Request $req){
        $this->validate($req,[
            'product_name'=>'required',
            'price'=>'required',
        ]);
        $imgUrl= $this->imageExistStatus($req); 
        
//        dd($req->all());
        
        $ProductById=Product::Find($req->product_id);
        
        $ProductById->product_name=$req->product_name;
        $ProductById->categoryID=$req->categoryID;
        $ProductById->menufacturarID=$req->menufacturarID;
        $ProductById->price=$req->price;
        $ProductById->quantity=$req->quantity;
        $ProductById->category_short_discription=$req->category_short_discription;
        $ProductById->category_long_discription=$req->category_long_discription;
        $ProductById->image=$imgUrl;
        $ProductById->publication_status=$req->publication_status;
        $ProductById->save();
        
        return redirect('product/manage')->with('msg','Product info Updated SuccessFully');
       
       
       
    }
    
    private function imageExistStatus($req){
//        echo 'hello';
        $productById=Product::where('id',$req->product_id)-> first();
        $productImage=$req->file('image');
        if($productImage){
            unlink($productById->image);           
            $ImageName=$productImage->getClientOriginalName();
            $uploadPath='public/imgProduct/';
            $productImage->move($uploadPath,$ImageName);
            $imageURL=$uploadPath.$ImageName;
            
        }else{
//            echo 'hey';
            $imageURL=$productById->image;
            //echo $imageURL;
        }
        return $imageURL;
    }


    public function deleteProduct($id){
        $deleteProduct=Product::Find($id);
        $deleteProduct->delete();
        return redirect('/product/manage')->with('msg','Product Deleted Successfully');
    }
}
