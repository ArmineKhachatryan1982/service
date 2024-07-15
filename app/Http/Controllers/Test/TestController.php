<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TestController extends Controller
{
    public function __invoke(TestRequest $request){
// dd($request->all());
        $test=Test::create([
            'author_id'=>$request->author_id,
            'category_id'=>$request->category_id
        ]);
        foreach($request->question as $item){
            $data['test_id'] = $test->id;
            $data['text'] = $item['text'];
            $data['point'] = $item['point'];

            $question = Question::create($data);

            if($question){

                foreach($item['answer_option'] as $key=>$opt){

                    $opt_data['question_id'] = $question->id;
                    $opt_data['text'] = $opt['name'];

                    if(isset($opt['radio'])){
                        $opt_data['true_answer']=1;
                    }else{
                        $opt_data['true_answer']=0;
                    }
                    $answer_opt = AnswerOption::create($opt_data);


                }
            }

        }
        $link_code = Str::random(10);
        $test->link = $link_code;
        $test->save();
        $returned_link=env('APP_URL')."/test/".$link_code;


        return response()->json(["message"=> $returned_link]);
    }
}
