<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mail;

class ApiController extends Controller {

    public $successStatus = 200;

    public function homeQuestions() {
        $question = Question::with('answers')->with('correctAnswers')->first()->toArray();
        array_walk_recursive($question, function(&$item) {
            $item = strval($item);
        });
        return response()->json(array("response" => array("status" => "1", "message" => "Question Answers", 'data' => $question)), $this->successStatus);
    }

}
