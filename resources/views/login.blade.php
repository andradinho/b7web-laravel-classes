@extends('layouts.admin')

@section('title', 'Login')
    
@section('content')

    @if(session('warning'))
        @alert
            {{ session('warning') }}
        @endalert
    @endif

    @lang('messages.test')

    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="Digite um e-mail" /><br/>
        <input type="password" name="password" placeholder="********" /><br/>
        
        <input type="submit" value="Entrar" />
        
    </form>

    Tentativas: {{$tries}}
@endsection