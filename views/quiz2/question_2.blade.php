@extends('layouts.quizTemp')

@section('question_number', '問２')

@section('quizImg')
<img src="{{ asset('quizImg/sale_big_2.png') }}" alt="問題２" width="400">
@endsection

@section('question_text','なお、当社では商品売買に係る記帳方法として三分法を採用している。勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '商品30個を＠￥80で売り上げ、代金は現金で受け取った。')

@section('answer_url')
<form action="{{ url('/quiz2/question_2') }}" method="POST">
  @endsection

  @section('debit_amount', '¥2,400')

  @section('credit_amount', '¥2,400')

  @section('option')
  <option value='' disabled selected>選択してください</option>
  <option>現金</option>
  <option>当座預金</option>
  <option>普通預金</option>
  <option>商品</option>
  <option>受取手形</option>
  <option>売掛金</option>
  <option>前払金</option>
  <option>未収入金</option>
  <option>支払手形</option>
  <option>買掛金</option>
  <option>前受金</option>
  <option>未払金</option>
  <option>売上</option>
  <option>商品売買益</option>
  <option>仕入</option>
  </select>
  @endsection

  @section('debit_answer', '現金')

  @section('credit_answer', '売上')

  @section('answer_text',
  '三分法とは商品売買の処理に関して仕入勘定、売上勘定、繰越商品勘定を使って処理する方法をいいます。三分法による記帳方法は、商品を仕入れたときは原価で仕入勘定の借方に記入し、販売したときは売価で売上勘定の貸方に記入します。')

  @section('bottom_button')
  <form action="question_3" class="mx-auto">
    <button type="submit" class="btn btn-info">
      次の問題へ
    </button>
  </form>
  @endsection