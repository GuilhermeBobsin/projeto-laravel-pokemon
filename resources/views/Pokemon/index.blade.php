<x-app-layout>
    @if (session('success'))
        <div role="alert" class="w-80 mx-auto mt-5" >
            <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2 flex justify-center flex justify-center">
                Sucesso!
            </div>
            <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                <p class="flex justify-center" >{{ session('success') }} </p>
            </div>
        </div>
    @endif
    <a href="{{ url('pokemon/create') }}" class="w-60  bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded flex items-center justify-center mx-auto mt-5 "> Criar novo pokemon</a href="{{'pokemon/create)'}}">
    <a href="{{ url('treinador/create') }}" class="w-60  bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded flex items-center justify-center mx-auto mt-5 "> Criar novo treinador</a href="{{'treinador/create)'}}">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        @foreach($pokemon as $pokemon)
            <div class="max-w-xs rounded-lg overflow-hidden shadow-lg bg-white border border-gray-200 hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out">
                <div class="flex justify-center border-b-4 border-blue-200 hover:border-blue-400 transition duration-300" >
                    <img class="w-32 py-8 hover:scale-125 transition duration-200" src="{{ asset('storage/' . $pokemon->caminho_imagem) }}" alt="imagem_pokemon">
                </div>
                
                <div class="px-6 py-4 text-center">
                    <h3 class="text-3xl font-extrabold text-gray-800 mb-3 hover:text-red-500 transition duration-300">{{ $pokemon->nome }}</h3>
                    <p class="text-lg font-medium text-gray-600 mb-2">Tipo: <span class="text-gray-800">{{ $pokemon->tipo }}</span></p>
                    <p class="text-lg font-medium text-gray-600 mb-4">Pontos de poder: <span class="text-gray-800">{{ $pokemon->pontos_de_poder }}</span></p>
                </div>
                
                <div class="flex items-center justify-evenly px-6 py-3 bg-blue-100">
                    <a href="{{ url('pokemon/'. $pokemon->id . '/edit') }}" class="text-blue-500 hover:text-blue-700 font-semibold transition duration-200 flex justify-center text-lg"><i class="fa-solid fa-pencil hover:scale-150 transition duration-200"></i></a>
                    
                    <form action="{{ url('pokemon/' . $pokemon->id) }}" method="POST" class="mt-4" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 font-semibold transition duration-200 flex items-center justify-center flex items-center justify-center text-lg h-10 w-10"><i class="fa-solid fa-trash hover:scale-150 transition duration-200"></i></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
