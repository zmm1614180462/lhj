<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\PdtContent;
use App\Entity\PdtImages;
use App\Entity\CartItem;

class IndexController extends Controller
{
    public function index($value='')
    {
        $categorys = Category::all();
        foreach ($categorys as $item)
        {
            $item->data = Product::where('category_id','=',$item->id)->take(20)->get();
        }
        //return $categorys;
        return view('index')->with('categorys', $categorys);
    }

}
