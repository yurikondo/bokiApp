@extends('layouts.app')

@section('title','クイズ一覧')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">日商簿記３級・問題アプリ</h1>
    <p class="lead">独学でも安心の分かりやすい解説</p>
    <hr class="my-4">
    <p>日商簿記３級試験対策の問題アプリです。</p>
    <p>すべて無料でわかりやすい解説も付いているので独学でも安心です。ぜひチャレンジしてみてください。</p>
  </div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">問題</th>
        <th scope="col">内容</th>
        <th scope="col">難易度</th>
        <th scope="col">　　</th>
        <th scope="col">　　</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><img src="quizImg/cash_1.png" width="150" alt="問題１"></td>
        <td>現金預金の仕訳問題</td>
        <td>★☆☆☆☆</td>
        <td colspan="2"><a class="btn btn-info" href="{{ url('quiz/question_1') }}" role="button">スタート</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><img src="quizImg/sale.png" width="150" alt="問題２"></td>
        <td>現三分法による商品売買の仕訳問題</td>
        <td>★★☆☆☆</td>
        <td colspan="2"><a class="btn btn-info" href="{{ url('quiz2/question_1') }}" role="button">スタート</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td><img src="quizImg/cash_3.png" width="150" alt="問題３"></td>
        <td>当座借越と複数口座を開設している場合の仕訳問題</td>
        <td>★★★☆☆</td>
        <td colspan="2"><a class="btn btn-info" href="#" role="button">スタート</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection