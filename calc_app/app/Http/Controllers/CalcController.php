<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// namespaceを利用することで、このファイル名(ファイル内のクラスなど)がglobalではなくnamespace後のパスにファイル内のクラスが配置
//されるため、ここで定義したクラスと別のファイルのクラスの名前が例え一緒でも独立、区別、衝突を防げる。

//useを利用することで、使用したいクラス名を省略して利用することができる。通常はパスを指定してクラスを
//発動することができるが、useによってuse後の語尾Request(名)だけでクラスのRequestが起動できる。

class CalcController extends Controller
{
    public function result($n1, $cal, $n2)
    {
        $result = 0;
        if ($cal == 'addition') {
            $result = $n1 + $n2;
        } elseif ($cal == 'subtraction') {
            $result = $n1 - $n2;
        } elseif ($cal == 'multiplication') {
            $result = $n1 * $n2;
        } elseif ($cal == 'division') {
            $result = $n1 / $n2;
        }

        return view(
            '/calcs',
            [
                'result' => $result
            ]
        );
    }
}
