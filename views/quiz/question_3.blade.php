@extends('layouts.quizTemp')

@section('question_number', '問3')

@section('quizImg')
<img src="{{ asset('quizImg/question_big_1.png') }}" alt="問題3" width="400">
@endsection

@section('question_text','ただし、勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '営業活動のために使用している携帯電話の利用料金￥10,000が普通預金口座から引き落とされた。')

@section('answer_url')
<form action="{{ url('/quiz/question_3') }}" method="POST">
  @endsection

  @section('debit_amount', '¥10,000')

  @section('credit_amount', '¥10,000')

  @section('option')
  <option value='' disabled selected>選択してください</option>
  <option>現金</option>
  <option>当座預金</option>
  <option>普通預金</option>
  <option>定期預金</option>
  <option>売掛金</option>
  <option>支払手形</option>
  <option>買掛金</option>
  <option>資本金</option>
  <option>売上</option>
  <option>仕入</option>
  <option>営業費</option>
  <option>通信費</option>
  <option>定期預金</option>
  </select>
  @endsection

  @section('debit_answer', '通信費')

  @section('credit_answer', '普通預金')

  @section('answer_text',
  '携帯電話の利用料金は通信費勘定で処理します。')

  @section('bottom_button')
  <form action="question_4" class="mx-auto">
    <button type="submit" class="btn btn-info">
      次の問題へ
    </button>
  </form>
  @endsection