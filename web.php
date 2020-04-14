<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ダッシュボード表示
Route::get('/', 'QuizzesController@index');

// 各クイズの表示
Route::prefix('quiz')->group(function () {
    Route::any('question_1', 'QuizController@question_1');
    Route::any('question_2', 'QuizController@question_2');
    Route::any('question_3', 'QuizController@question_3');
    Route::any('question_4', 'QuizController@question_4');
});

Route::prefix('quiz2')->group(function () {
    Route::any('question_1', 'QuizController2@question_1');
    Route::any('question_2', 'QuizController2@question_2');
    Route::any('question_3', 'QuizController2@question_3');
    Route::any('question_4', 'QuizController2@question_4');
});
