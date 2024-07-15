<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionCountController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = [];

        foreach ($request->category_type as $key => $item) {
            $data['category_id'] = $key;
        }
        $data['author_id'] = $request->author_id;
// dd($data);
        $test = Test::create($data);

Session::put('test', $test);
        return redirect()->route('question_count_get', app()->getLocale());
        // return view('question-count.index', compact('test'));
    }
    public function show(){

        $test=session('test');
        // dd($test);
        return view('question-count.index', compact('test'));
    }
}
