@extends('template')

@section('title')
    Anotações
@stop

@section('content')
    <h1>Anotações</h1>
    <!--Como fazer pra listar as anotações que estão no arquivo TestController? utilizando o foreach-->
    <ul>
        <!-- Se for fazer com o php -->
        <?php// foreach($notas as $nota): ?>
        <li><?//=$nota;?></li>
        <?php// endforeach; ?>
        <!-- Fim do php -->

        <!--Fazendo com o BLADE -->
        @foreach($notas as $nota)
            <li>{{$nota}} <!--PERIGO: NO LUGAR DO SEGUNDO{ TIVESSE DOIS !!, O QUE FOSSE PASSADO NO BROWSER IA MUDAR O HTML, EX UM NEGRITO <B> --></li>

        @endforeach

    </ul>

@stop
