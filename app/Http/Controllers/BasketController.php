<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BasketController extends Controller
{
    public function getIndex()
    {
        $cook_arr=$this->cook_arr();
        if($cook_arr == 0){
            return redirect('/');
        }else{
            $cook_count=$this->cook_count();
            return view ('basket',compact('cook_arr','cook_count'));
        }

    }
    public function getDelete($id=null){
        $count_arr=$this->cook_count();
        $arr=$this->cook_arr();
        $str='';
        unset($arr[$id]);
        foreach ($arr as $key=>$value){
            $str=$key.':'.$value->price.':'.$count_arr[$value->id].',';
        }

        setcookie('basket',$str,time()+3600,'/');
        return redirect('basket');
    }
    public function cook_arr()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        if($cook!= 0){
            $big_arr = explode(',', $cook);
            $tov = array();
            foreach ($big_arr as $value) {
                $arr = explode(':', $value);
                if ($arr[0] != null) {
                    $tov[$arr[0]] = Product::find($arr[0]);

                }
            }
        }else{
            $tov = 0;
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

