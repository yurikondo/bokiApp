@extends('layouts.app')

@section('title','問題')

@section('content')
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        @section('quizImg')
        @show
      </div>
      <div class="col-lg-6 pt-5">
        <p class="lead">以下の各取引について仕訳しなさい。</p>
        <p class="lead">@yield('question_text')</p>
      </div>
    </div>

    <hr class="my-4">
    <div class="row">
      <div class="col-lg-6 pb-3">
        <h5>@yield('question_number')</h5>
        <p class="pt-3">@yield('question')</p>
        @isset($arart_msg)
        <p class="text-danger">{{ $arart_msg}}</p>
        @endisset
      </div>
      <div class="form-group col-lg-3">
        @section('answer_url')
        @show
        @csrf
        <label for="exampleFormControlSelect1"> 借方の勘定科目　@yield('debit_amount')</label>
        <select name="debit" class="form-control" id="exampleFormControlSelect1">
          @section('option')
          @show
      </div>
      <div class="form-group col-lg-3">
        <label for="exampleFormControlSelect1"> 貸方の勘定科目　@yield('credit_amount')</label>
        <select name="credit" class="form-control" id="exampleFormControlSelect1">
          @section('option')
          @show
      </div>
      <button type="submit" class="btn btn-info mx-auto mt-3">
        解答する
      </button>
      </form>
    </div>
  </div>
  @isset($msg)
  <h1 class="text-info">{{ $msg }}</h1>
  <div class="row">
    <div class="col-lg-7 py-3">
      <h5>《答え》</h5>
      <h4>@yield('debit_answer')　@yield('debit_amount')／@yield('credit_answer')　@yield('credit_amount')</h4>
      <h5 class="pt-4">《あなたの回答》</h5>
      <h4>{{ $debit }}　@yield('debit_amount')／{{ $credit }}　@yield('credit_amount')</h4>
    </div>
    <div class="col-lg-5 py-3">
      <p>@yield('answer_text')</p>
    </div>
  </div>
  @section('bottom_button')
  @show
  @endisset
</div>
@endsection