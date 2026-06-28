<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link type="text/css" rel="stylesheet" href="../css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum Título</h1>
        <img src="../img/banner.jpg" alt="Banner">
        @if(10 > 5)
            <p>10 é maior que 5</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Arthur")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalho com {{ $profissao }}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @php
            $name = "Arthur";
            echo "O nome dele é $name";
        @endphp

        @foreach($pessoas as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        {{-- Esse é um comentário no Blade --}}
    </body>
</html>
