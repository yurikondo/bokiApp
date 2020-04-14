<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController2 extends Controller
{
    public function question_1(Request $request)
    {
        if (isset($request->debit, $request->credit)) {
            $debit = $request->debit;
            $credit = $request->credit;

            if ($debit === '仕入' && $credit === '現金') {
                $msg = '正解！！';
            } else {
                $msg = '残念...';
            }

            $data = [
                'msg' => $msg,
                'debit' => $debit,
                'credit' => $credit,
            ];
        } else {
            $data = ['arart_msg' => '選択してください！'];
        }
        return view('quiz2.question_1', $data);
    }

    public function question_2(Request $request)
    {
        if (isset($request->debit, $request->credit)) {
            $debit = $request->debit;
            $credit = $request->credit;

            if ($debit === '現金' && $credit === '売上') {
                $msg = '正解！！';
            } else {
                $msg = '残念...';
            }

            $data = [
                'msg' => $msg,
                'debit' => $debit,
                'credit' => $credit,
            ];
        } else {
            $data = ['arart_msg' => '選択してください！'];
        }
        return view('quiz2.question_2', $data);
    }

    public function question_3(Request $request)
    {
        if (isset($request->debit, $request->credit)) {
            $debit = $request->debit;
            $credit = $request->credit;

            if ($debit === '現金' && $credit === '売掛金') {
                $msg = '正解！！';
            } else {
                $msg = '残念...';
            }

            $data = [
                'msg' => $msg,
                'debit' => $debit,
                'credit' => $credit,
            ];
        } else {
            $data = ['arart_msg' => '選択してください！'];
        }
        return view('quiz2.question_3', $data);
    }

    public function question_4(Request $request)
    {
        if (isset($request->debit, $request->credit)) {
            $debit = $request->debit;
            $credit = $request->credit;

            if ($debit === '現金' && $credit === '売掛金') {
                $msg = '正解！！';
            } else {
                $msg = '残念...';
            }

            $data = [
                'msg' => $msg,
                'debit' => $debit,
                'credit' => $credit,
            ];
        } else {
            $data = ['arart_msg' => '選択してください！'];
        }
        return view('quiz2.question_4', $data);
    }

}
