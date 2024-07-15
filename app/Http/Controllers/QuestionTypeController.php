<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class QuestionTypeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        $test = Test::where('id',$request->test_id)->first();
        $test->question_count=$request->question_count;
        $test->save();
        return view('question-type.index',compact('test'));
    }
}
