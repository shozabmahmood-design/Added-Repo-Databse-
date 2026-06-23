<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Request;
class ProductController extends Controller
{
    public function products()
    {
        $brands = Brand::all();
        $types = Type::all();
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('pages.products', compact('products', 'types', 'brands'));
    }

    public function filter(Request $request)
    {   
        // echo $request->type;
        $brand = $request->get('brand') ? $request->get('brand') : null;
        $type = $request->get('type') ? $request->get('type') : null;
        $model = $request->input('model') ? $request->input('model') : null;
        // dd($type,  $brand, $model);
       

        
        // $products = Product::where(function($query) use($request) {
        //     $query->where('brand_id', $request->brand)->orWhere('type_id', $request->type)->orWhere('model', 'LIKE', '%'.$request->model.'%');
        // })->get();

        // $products = Product::query()->where('brand_id', $brand)->orWhere('type_id', $type)->orWhere('model', 'LIKE', '%'.$model.'%')->get();
        // $products = DB::table('products')->where('brand_id', $brand)->where('type_id', $type)->where('model', 'LIKE', '%'.$model.'%')->get();
        // dd($products->toArray());

        
        
        if($type ==null && $model ==null && $brand != null){
            $products = Product::where('brand_id', $brand)->paginate(12);
        }

        if($brand ==null && $model ==null && $type !=null){
            $products = Product::where('type_id', $type)->paginate(12);
            // dd($products->toArray());
        }

        if($brand ==null && $type ==null && $model !=null){
           
            $products = Product::where('title', 'LIKE', '%'.$model.'%')->orWhere('model', 'LIKE', '%'.$model.'%')->paginate(12);

        }

        // dd($products->toArray());

        if($model == null && $type != null && $brand != null){
            $products = Product::where('brand_id', $brand)->where('type_id', $type)->paginate(12);
        }

        if($type == null && $model != null && $brand != null){
            $products = Product::where('brand_id', $brand)->where('title', 'LIKE', '%'.$model.'%')->orWhere('model', 'LIKE', '%'.$model.'%')->paginate(12);
        }

        if($brand == null && $model != null && $type != null){
            $products = Product::where('type_id', $type)->where('title', 'LIKE', '%'.$model.'%')->orWhere('model', 'LIKE', '%'.$model.'%')->paginate(12);
        }
        
        if($model !== null && $type !== null && $brand !== null){
            $products = Product::where('brand_id', $brand)->where('type_id', $type)->orWhere('model', 'LIKE', '%'.$model.'%')->paginate(12);
        }

        $brands = Brand::all();
        $types = Type::all();
        // dd($products->toArray());
        if(count($products) > 0){
            // $count = count($products);
            return view('pages.products', compact('products', 'types', 'brands'));
        }
        else
         return view('pages.products', compact('products', 'types', 'brands'));
    }
    
    public function filterbytype($id){
        $products = Product::where('type_id', $id)->paginate(12);
        $brands = Brand::all();
        $types = Type::all();
        return view('pages.products', compact('products', 'types', 'brands'));
    }
}
