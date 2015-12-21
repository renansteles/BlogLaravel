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
        //return "Ol� $nome";
        //chama a view index.blade.php , pode botar s� index
        return view('test/index',['nome'=>$nome]);
    }

    public function notas(){
        $notas = [
            0=> 'Anota��o1',
            1=> 'Anota��o2',
            2=> 'Anota��o3',
            3=> 'Anota��o4',
        ];
        //compact gera um array
        return view('test.notas',compact('notas'));

    }

}