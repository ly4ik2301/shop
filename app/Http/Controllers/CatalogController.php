<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CatalogController extends Controller
{
    public function getIndex($id=null){
        $cat=Category::find($id);
        $products=Product::where('category_id',$id)->paginate(10);
        return view('catalog',compact('cat','products'));
    }
}
