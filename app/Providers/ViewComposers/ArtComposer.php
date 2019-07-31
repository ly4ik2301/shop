<?php
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Category;
class ArtComposer{
    public function compose(View $view){
        $catalogs=Category::orderBy('id','DESC')->limit(5)->get();
        $view->with('catalogs',$catalogs);
    }
}