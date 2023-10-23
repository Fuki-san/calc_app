<?php
//下記useと同様にCalcControllerと入力するだけでクラスが定義できるようにしたいからuseを使う。
use App\Http\Controllers\CalcController;
//useでRoute入力だけでRouteクラスが起動できるようにしている
use Illuminate\Support\Facades\Route;


// calc_appここから

Route::get('/calcs/{n1}/{cal}/{n2}',[CalcController::class, 'result']);
