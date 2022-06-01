<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function Home()
    {
        return view('Page.landingPage');
    }
    function About()
    {
        return view('Page.about');

    }
    function Contact()
    {
        return view('Page.contact');

    }
     function List()
     {
        $products = array();
        for($i=1;$i<=15;$i++)
        {
            $product = array("id"=>$i,
                             "name"=>"Product $i"
                            );
            $products[] = (object)$product;

        }
        return view('products.service')
                ->with('products', $products);
     }
     function teams($id)
     {
         return view('Products.teams')
                    ->with('id',$id);
     }

}
