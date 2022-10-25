<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CurrencyService;
use App\Contracts\CurServiceInterfase;

class CatalogController extends Controller
{
    //private $service;

    public function __construct(){
        //$this->service = $service; (CurServiceInterfase $service)
        //$this->service = $currencyService; (CurrencyService $currencyService)
    }
    public function __invoke(Request $request){
        //dd(session()->getId('_token'));
        // session()->put('test', [1, 2, 3]);
        // session()->push('test2', '12345');
        // dump(session()->all());
//        $this->service->hello();
//        $this->service->getRate();
        //$this->service->getRate();
        $products = Product::query()
        ->where('active', 1)
        ->limit(9)
        ->with('category')
        //->latest()
        ->get();
        $categories = Category::withCount('products')->get();
        return view('site.store', compact('products', 'categories'));
    }

    public function product($category_id, $product_id){
        $product  = Product::where('category_id', $category_id)
        ->where('id', $product_id)
        ->where('active', 1)
        ->firstOrFail();
        return view("site.product", compact("product"));
    }

}
