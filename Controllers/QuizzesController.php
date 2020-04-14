<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    // ダッシュボード表示
    public function index(){
        return view('quizzes.index');

    }
}
