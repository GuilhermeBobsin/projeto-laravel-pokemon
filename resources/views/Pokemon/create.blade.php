<x-app-layout>
    <div class="w-full max-w-sm mx-auto flex items-center justify-center min-h-screen"> 
        <form action="{{ url('pokemon') }}" method="POST" class="bg-gray-200 rounded px-16 pt-10 pb-10 mb-4 rounded-lg" enctype="multipart/form-data" >
            <img src="/pokebola.png" alt="pokebola" style="width: 230px;" class="mx-auto" >
            <br>
            @csrf
            <div class="mb-1">
                <label class="block text-gray-700 text-sm font-bold mb-1">
                    Nome:
                </label>
                <input class="shadow appearance-none border border-black-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="nome" type="text" placeholder="Nome do Pokemon">
            </div>

            <div class="mb-1">
                <label class="block text-gray-700 text-sm font-bold mb-1">
                    Tipo:
                </label>
                <input class="shadow appearance-none border border-black-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="tipo" type="text" placeholder="Defina seu tipo">
            </div>

            <div class="mb-1">
                <label class="block text-gray-700 text-sm font-bold mb-1">
                    Pontos de poder:
                </label>
                <input class="shadow appearance-none border border-black-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="pontos_de_poder" type="number" placeholder="Pontos de poder">
            </div>

            <div class="mb-1">
                <label class="block text-gray-700 text-sm font-bold mb-1">
                    Imagem do pokemon:
                </label>
                <input class="shadow appearance-none border border-black-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline " name="image" id="image" type="file" required>
            </div>

            <label for="treinador_id" class="block text-gray-700 text-sm font-bold mb-1">Treinador</label>
            <select id="treinador_id" name="treinador_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>Escolha um treinador</option>
		    @foreach($treinadors as $treinador)
                <option value="{{ $treinador->id}}">{{ $treinador->nome }}</option>
		    @endforeach
</select>


            <div class="flex items-center justify-center gap-x-4">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Criar 
                </button>
                <a href="{{ url('pokemon') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Listar
                </a>
            </div>
        </form>
</div>
<x-app-layout>