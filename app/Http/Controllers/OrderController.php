<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use Auth;
class OrderController extends Controller
{
    public function postIndex(OrderRequest $r){

        $obj=new Order;
        $obj->name=$r['name'];
        $obj->phone=$r['phone'];
        $obj->address=$r['address'];
        $obj->body=$_COOKIE['basket'];
        $obj->ip=$_SERVER['REMOTE_ADDR'];
        $obj->user_id=Auth::user()->id;
        $obj->comment='';
        $obj->status='';
        $obj->save();
        setcookie('basket','',time()+3600,'/');
        return redirect('/');

    }
    public function getAll(){
        $orders=Order::where('user_id',Auth::user()->id)->get();
    }
}
