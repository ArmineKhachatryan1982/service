<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class UserTestController extends Controller
{
    public function __invoke($link){
        // dd($link);
        $test = Test::where('link',$link)->first();

        return view('user.test.index',compact('test'));

    }
}
