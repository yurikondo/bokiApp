@extends('layouts.quizTemp')

@section('question_number', '問４')

@section('quizImg')
<img src="{{ asset('quizImg/sale_big_2.png') }}" alt="問題４" width="400">
@endsection

@section('question_text','なお、当社では商品売買に係る記帳方法として三分法を採用している。勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '得意先A商店から売掛金の代金￥4,000が送金小切手で送られてきた。')

@section('answer_url')
<form action="{{ url('/quiz2/question_4') }}" method="POST">
  @endsection

  @section('debit_amount', '¥4,000')

  @section('credit_amount', '¥4,000')

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

  @section('credit_answer', '売掛金')

  @section('answer_text',
  '送金小切手は通貨代用証券なので現金勘定で処理します。')

  @section('bottom_button')
  <form action="/" class="mx-auto">
    <button type="submit" class="btn btn-info">
      トップページへ戻る
    </button>
  </form>
  @endsection