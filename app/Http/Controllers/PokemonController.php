<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('pokemon.index', compact('pokemon'));
    }

    public function create()
    {
        return view('pokemon.create');
    }

    public function store(Request $request)
    {
        $caminho_imagem = $request->file('image')->store('images', 'public');
        $pokemon = Pokemon::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'pontos_de_poder' => $request->pontos_de_poder,
            'caminho_imagem' => $caminho_imagem
        ]);
        return redirect('pokemon')->with('success', 'O pokemon ' . $pokemon->nome . ' foi criado!');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $caminho_imagem = $request->file('image')->store('images', 'public');
        $pokemon->update([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'pontos_de_poder' => $request->pontos_de_poder,
            'caminho_imagem' => $caminho_imagem
        ]);
        return redirect('pokemon')->with('success', 'O Pokemon ' . $pokemon->nome . ' foi editado!'   );
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemon')->with('success', 'O Pokemon ' . $pokemon->nome . ' foi excluído!' );
    }
}
