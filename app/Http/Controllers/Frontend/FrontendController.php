<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
   {  

      $featured_products = Product::where('trending','1')->take(15)->get();
        return view('frontend.index',compact('featured_products'));
   }

   public function category()
   {    
    $category = Category::all();
   
    return view('frontend.category',compact('category'));

   }


   public function show($slug)
   {
      if( Category::where('slug', $slug)->exists())
      {
        $category= Category::where('slug',$slug)->first();
        $products = Product::where('cate_id',$category->id)->get();
        return view('frontend.product',compact('category','products'));
      }
      else
      {
        return redirect('/')->with('status',"ne exist pas");
      }
      
    }
  public function showprod($slug, $prod_name)
  {
    if( Category::where('slug', $cate_slug)->exists())
      {
        if(Product::where('slug',$prod_name)->exists())
        {
          $products = Product:: where('name',$prod_slug)->first();
          return view ('Frontend.view', compact('products'));
        }
        else
        {
          return redirect('/')->with('status',"les produit n'est exsit pas");

        }
      }
      else
      {
        return redirect('/')->with('status',"les produit n'est exsit pas");
      }
  }  
}