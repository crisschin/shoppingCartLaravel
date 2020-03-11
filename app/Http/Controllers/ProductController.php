<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Product; //step 1
use Session;

//Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create(){
        return view('addProduct');
    }

    public function view(){

        $products=Product::all(); //get all data from product

        return view('product')->with('products',$products);; //passing data to html
        //
    }

    public function delete($id){
       
        $products =Product::find($id);
        $products->delete();
        return redirect()->route('view.product');
    }

    public function edit($id){

        $products=Product::all()->where('id',$id);
        
        return view('editProduct')->with('products',$products);
        
    }


    public function viewlist(){

        $products=Product::all();
        
        return view('mainlist')->with('products',$products);
    }

    public function detail($id){
       
        $products =Product::all()->where('id',$id);
        
        return view('productdetail')->with('products',$products);
    }

    public function search(){       
        $r=request();
        $keyword=$r->searchProduct;
        $products =DB::table('products')->where('name', 'like', '%' . $keyword . '%')
                                        ->orWhere('description', 'like', '%' . $keyword . '%')
                                        ->get();
        return view('mainlist')->with('products',$products);
    }


    public function store(){ //step 2
        $r=request(); // step 3 get data from HTML
        $image=$r->file('product-image');
        $image->move('pic',$image->getClientOriginalName());
        //pic is the location
        $imageName=$image->getClientOriginalName();

        $addProduct=Product::create([ // step 4 bind data
            'id'=>$r->id, // add on
            'name'=>$r->fullname, //fullname from HTML
            'description'=>$r->description,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'categoryID'=>$r->categoryID,
            'image'=>$imageName
        ]);
        Session::flash('success','Insert Product successfully');
        Return redirect()->route('view.product'); // step 5 back to last page

    }

    public function update(){ //step 2
        $r=request(); // step 3 get data from HTML
        $image=$r->file('product-image');
        $image->move('pic',$image->getClientOriginalName());
        //pic is the location
        $imageName=$image->getClientOriginalName();

        $products =Product::find($r->id);
        $products->name=$r->fullname;
        $products->description=$r->description;
        $products->price=$r->price;
        $products->quantity=$r->quantity;
        $products->categoryID=$r->categoryID;
        $products->image=$imageName;
        $products->save();

        Session::flash('success','Product update successfully');
        Return redirect()->route('view.product');
    }
    
}
