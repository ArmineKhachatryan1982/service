<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function __invoke($count){
        // dd(777);
        return view('components.test-section',compact('count'));
    }
}
