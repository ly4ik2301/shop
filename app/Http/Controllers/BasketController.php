<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BasketController extends Controller
{
    public function getIndex()
    {
        $cook_arr=$this->cook_arr();
        $cook_count=$this->cook_count();
        return view ('basket',compact('cook_arr','cook_count'));
    }

    public function cook_arr()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $tov = array();
        foreach ($big_arr as $value) {
            $arr = explode(':', $value);
            if ($arr[0] != null) {
                $tov[$arr[0]] = Product::find($arr[0]);

            }
        }
        return $tov;
    }
    private function cook_count(){
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $count=[];
        foreach ($big_arr as $value){
            $arr=explode(':',$value);
            if ($arr[0] != null) {
                $count[$arr[0]] = $arr[1];
            }
        }
        return $count;
    }
}

