<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 19/12/2015
 * Time: 13:18
 */

namespace App\Http\Controllers;


class TestController
{
    public function index($nome){
        //posso colocar o HTML aqui tbm no return
        //return "Olá $nome";
        //chama a view index.blade.php , pode botar só index
        return view('test/index',['nome'=>$nome]);
    }

    public function notas(){
        $notas = [
            0=> 'Anotação1',
            1=> 'Anotação2',
            2=> 'Anotação3',
            3=> 'Anotação4',
        ];
        //compact gera um array
        return view('test.notas',compact('notas'));

    }

}