<?php

namespace App\Http\Controllers\AuthorInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorInfoController extends Controller
{
    public function __invoke(Request $request){
// dd($request->all());
        return  view('author-info.index');
    }
}
