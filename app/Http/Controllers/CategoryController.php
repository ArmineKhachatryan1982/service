<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function __invoke(Request $request){

  
        $category_type = Category::with('category_translations')->get();

        return view('category.index',compact('category_type'));


    }
}
