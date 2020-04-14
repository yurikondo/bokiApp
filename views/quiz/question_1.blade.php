@extends('layouts.quizTemp')

@section('question_number', '問１')

@section('quizImg')
<img src="{{ asset('quizImg/question_big_1.png') }}" alt="問題１" width="400">
@endsection

@section('question_text','ただし、勘定科目は次の中から最も適当と思われるものを選ぶこと。')

@section('question', '商品￥600,000を仕入れ、代金は現金で支払った。')

@section('answer_url')
<form action="{{ url('/quiz/question_1') }}" method="POST">
  @endsection

  @section('debit_amount', '¥600,000')

  @section('credit_amount', '¥600,000')

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

  @section('debit_answer', '仕入')

  @section('credit_answer', '現金')

  @section('answer_text',
  '商品売買に関する記帳方法について問題文自体には何の指示もありませんが、指定された勘定科目群の中に「売上」や「仕入」があり、「商品」や「商品売買益」がないことから三分法によって記帳しなければならないと判断します。')

  @section('bottom_button')
  <form action="question_2" class="mx-auto">
    <button type="submit" class="btn btn-info">
      次の問題へ
    </button>
  </form>
  @endsection