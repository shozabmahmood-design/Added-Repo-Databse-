<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Type;
use App\Models\Brand;
use App\Models\visitor;
class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortByDesc('created_at');
        $types = Type::all();
        $brands = Brand::all();
        $blogs = Blog::all()->sortByDesc('id');
        $clientIP = request()->ip(); 
        $ipCheck = visitor:: where('ip', $clientIP)->first();
        // dd($ipCheck);
        if($ipCheck == null){

            $visitor= new visitor;
            $visitor->ip = $clientIP;
    
            $visitor->save();
        };

        $totalVisitor = visitor::all()->count();
        $totalProducts = $products->count();




        return view('pages.home', get_defined_vars());

    }

    public function singleproduct($id)
    {
        $product = Product::where('id',$id)->first();
        $product->increment('views');
        $product->save;
        $images = ProductImage::where('product_id', $id)->get();
        
        return view('pages.singlecar', compact('product', 'images'));
    }

    public function about()
    {
        $brands = Brand::all();
        return view('pages.aboutus', compact('brands'));
    }
    public function contact()
    {
        return view('pages.contactus');
    }

    public function search(Request $request)
    {
        $input = $request->input('search');
        $products = Product::where('title', 'LIKE', '%'.$input.'%')->orwhere('model', 'LIKE', '%'.$input.'%')->paginate(12);
        // dd($products->toArray());
            $brands = Brand::all();
            $types = Type::all();
        if(count($products) > 0)
            return view('pages.products', compact('products', 'brands', 'types'));
        else
            return redirect('/');
    }
}
