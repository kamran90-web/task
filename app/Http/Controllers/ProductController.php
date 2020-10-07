<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id){
        $category = Category::find($id);
        $infos = Info::find($id);
        $products = DB::table('products')->where('category_id', $id)->get();
        return view('show', compact('products', 'category','infos'));
    }
}
