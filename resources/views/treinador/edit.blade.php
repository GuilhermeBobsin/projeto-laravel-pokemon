@extends('layouts.app')

@section('title', 'Editando Pokemon')

@section('content')
    <div class="w-full max-w-sm mx-auto flex items-center justify-center min-h-screen">
        <form action="{{ url('treinador/' . $treinador->id) }}" method="POST" class="bg-gray-200 rounded px-16 pt-10 pb-10 mb-4 rounded-lg" enctype="multipart/form-data" >
            <img src="/treiner.png" alt="treinador" style="width: 230px;" >
            <br>
            @csrf
            @method('PUT')
            
            <div class="mb-1">
                <label class="block text-gray-700 text-sm font-bold mb-1">
                    Nome:
                </label>
                <input class="shadow appearance-none border border-black-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="nome" type="text" placeholder="Nome do Pokemon" value="{{ $pokemon->nome }}" required>
            </div>
            

            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Editar treinador
                </button>
            </div>
        </form>
    </div>
@endsection
