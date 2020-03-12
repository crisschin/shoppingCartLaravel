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

        $products=Product::all()->where('categoryID','desktop');
        
        return view('mainlist')->with('products',$products);
    }

    public function viewlist2(){

        $products=Product::all()->where('categoryID','laptop');
        
        return view('mainlist')->with('products',$products);
    }

    public function dell(){

        $products=Product::all()->where('brand','dell');
        
        return view('mainlist')->with('products',$products);
    }

    public function asus(){

        $products=Product::all()->where('brand','asus');
        
        return view('mainlist')->with('products',$products);
    }

    public function CPUi5(){

        $products=Product::all()->where('CPU','i5');
        
        return view('mainlist')->with('products',$products);
    }

    public function CPUi7(){

        $products=Product::all()->where('CPU','i7');
        
        return view('mainlist')->with('products',$products);
    }

    public function CPUi9(){

        $products=Product::all()->where('CPU','i9');
        
        return view('mainlist')->with('products',$products);
    }

    public function RAM8(){

        $products=Product::all()->where('RAM','8gb');
        
        return view('mainlist')->with('products',$products);
    }

    public function RAM16(){

        $products=Product::all()->where('RAM','16gb');
        
        return view('mainlist')->with('products',$products);
    }

    public function RAM32(){

        $products=Product::all()->where('RAM','32gb');
        
        return view('mainlist')->with('products',$products);
    }

    public function GPU1660(){

        $products=Product::all()->where('GPU','1660');
        
        return view('mainlist')->with('products',$products);
    }

    public function GPU2060(){

        $products=Product::all()->where('GPU','2060');
        
        return view('mainlist')->with('products',$products);
    }

    public function GPU2070(){

        $products=Product::all()->where('GPU','2070');
        
        return view('mainlist')->with('products',$products);
    }

    public function GPU2080(){

        $products=Product::all()->where('GPU','2080');
        
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
                                        ->orWhere('CPU', 'like', '%' . $keyword . '%')
                                        ->orWhere('RAM', 'like', '%' . $keyword . '%')
                                        ->orWhere('GPU', 'like', '%' . $keyword . '%')
                                        ->orWhere('brand', 'like', '%' . $keyword . '%')
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
            'brand'=>$r->brand,
            'CPU'=>$r->CPU,
            'cpudetail'=>$r->cpudetail,
            'RAM'=>$r->RAM,
            'ramdetail'=>$r->ramdetail,
            'GPU'=>$r->GPU,
            'gpudetail'=>$r->gpudetail,
            'OS'=>$r->OS,
            'storage'=>$r->storage,
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
        $products->brand=$r->brand;
        $products->CPU=$r->CPU;
        $products->cpudetail=$r->cpudetail;
        $products->RAM=$r->RAM;
        $products->ramdetail=$r->ramdetail;
        $products->GPU=$r->GPU;
        $products->gpudetail=$r->gpudetail;
        $products->price=$r->price;
        $products->storage=$r->storage;
        $products->quantity=$r->quantity;
        $products->categoryID=$r->categoryID;
        $products->image=$imageName;
        $products->save();

        Session::flash('success','Product update successfully');
        Return redirect()->route('view.product');
    }
    
}
