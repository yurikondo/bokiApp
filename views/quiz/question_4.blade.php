@extends('layouts.quizTemp')

@section('question_number', '問4')

@section('quizImg')
<img src="{{ asset('quizImg/question_big_1.png') }}" alt="問題4" width="400">
@endsection

@section('question_text','ただし、勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '商品￥330,000を売り上げ、代金は他店振出しの小切手で受け取り、ただちに当座預金に預け入れた。')

@section('answer_url')
<form action="{{ url('/quiz/question_4') }}" method="POST">
  @endsection

  @section('debit_amount', '¥330,000')

  @section('credit_amount', '¥330,000')

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

  @section('debit_answer', '当座預金')

  @section('credit_answer', '売上')

  @section('answer_text',
  '受け取った小切手をただちに当座預金とした場合は、通常、現金勘定を経由せずに直接当座預金勘定を増加させます。')

  @section('bottom_button')
  <form action="/" class="mx-auto">
    <button type="submit" class="btn btn-info">
      トップページへ戻る
    </button>
  </form>
  @endsection