<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorInfoRequest;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthorInfoStoreController extends Controller
{
    public function __invoke(AuthorInfoRequest $request){

         $author=Author::create($request->all());
         $author_id = $author->id;
         $request['author_id']=$author_id;
         session(['author_id'=>$author_id]);

        $category_type = Category::with('category_translations')->get();

        //  return view('category.index',compact('author_id','category_type'));
        // return redirect()->route('category-type',app()->getLocale(),$author_id);
        // return redirect('/'.app()->getLocale().'/author/category-type/'.$author_id);
        return Redirect::route('category_type', app()->getLocale());
        // return redirect('/en/author/category-type/?auth=140');

    }
}
