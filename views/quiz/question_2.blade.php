@extends('layouts.quizTemp')

@section('question_number', '問2')

@section('quizImg')
<img src="{{ asset('quizImg/question_big_1.png') }}" alt="問題2" width="400">
@endsection

@section('question_text','ただし、勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '商品￥800,000を売上げ、代金は他店振出しの小切手で受け取った。')

@section('answer_url')
<form action="{{ url('/quiz/question_2') }}" method="POST">
  @endsection

  @section('debit_amount', '¥800,000')

  @section('credit_amount', '¥800,000')

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

  @section('debit_answer', '現金')

  @section('credit_answer', '売上')

  @section('answer_text',
  '他社振出しの小切手は通貨代用証券として現金勘定で処理します。')

  @section('bottom_button')
  <form action="question_3" class="mx-auto">
    <button type="submit" class="btn btn-info">
      次の問題へ
    </button>
  </form>
  @endsection