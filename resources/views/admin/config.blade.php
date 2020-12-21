@extends('layouts.admin')

@section('title', 'Configurações')
    
@section('content')

    <h1>Configurações</h1>

    Olá, {{$nome}} - <a href="/logout">Sair</a>

        @alert
            Alguma frase
        @endalert

        Lista do bolo:
        <ul>
            @foreach ($lista as $item)
                <li>{{$item}}</li> 
            @endforeach
        </ul>
    @if($showform)
        <form method="POST">
            @csrf

            Nome:<br/>
            <input type="text" name="nome" /><br/>

            Idade:<br/>
            <input type="text" name="idade" /><br/>
            
            Cidade:<br/>
            <input type="text" name="cidade" /><br/>

            <input type="submit" value="Enviar" />
        </form>
    @endif

    <a href="/config/info">Informações</a>
@endsection