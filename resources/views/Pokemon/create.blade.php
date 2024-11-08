@extends('layouts.app')

@section('title', 'Novo Pokemon')

@section('content')
    <form action="{{ url('pokemon') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Pokemon" required>
        <input type="text" name="tipo" placeholder="Tipo" required>
        <input type="number" name="pontos_de_poder" placeholder="Pontos de poder" required>
        <button type="submit">Criar Pokemon</button>
    </form>
@endsection
