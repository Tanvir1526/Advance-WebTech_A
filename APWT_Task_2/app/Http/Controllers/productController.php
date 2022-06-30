<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
    
    public function CreateProduct()
    {
        return view('Pages.CreateProduct');
    }
    public function ProductList()
    {
        $products= Product::all();

        return view('Pages.ProductList')
                ->with('products',$products);
    }
    public function ProductDetails(Request $req)
    {
        $products = product::where('id', '=', $req->id)
        ->select('name','id','price')
        ->first();
        return view('Pages.ProductDetails')
        ->with('products', $products);
    }

    function createSubmit(Request $req){

        $this->validate($req,
             [
                "name"=>"required|max:10",
                "price"=>"required",
             ],
             [
                 "name.required"=> "Please provide Product name",
                 "price.required"=> "Please provide Product Price",

             ]
            );

            $p1 = new product();

            $p1->name = $req->name;
            $p1->price = $req->price;
           
            $p1->save(); //insert query will run

        return "Submitted with valid value";
    }
}
