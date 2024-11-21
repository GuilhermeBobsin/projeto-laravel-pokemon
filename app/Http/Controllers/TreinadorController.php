<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use Illuminate\Http\Request;

class TreinadorController extends Controller
{
    public function index()
    {
        $treinadors = Treinador::all();
        return view('treinador.index', compact('treinadors'));
    }

    public function create()
    {
        return view('treinador.create');
    }

    public function store(Request $request)
    {
        $treinador = Treinador::create([
            'nome' => $request->nome,
        ]);
        return redirect('treinador')->with('success', 'O treinador ' . $treinador->nome .' foi criado!');
    }

    public function edit($id)
    {
        $treinador = Treinador::findOrFail($id);
        return view('treinador.edit', compact('treinador'));
    }

    public function update(Request $request, $id)
    {
        $treinador = Treinador::findOrFail($id);
        $treinador->update([
            'nome' => $request->nome,
        ]);
        return redirect('treinador')->with('success', 'O treinador ' . $treinador->nome . ' foi editado!');
    }

    public function destroy($id)
    {
        $treinador = Treinador::findOrFail($id);
        $treinador->delete();
        return redirect('treinador')->with('success', 'O treinador ' . $treinador->nome . ' foi excluído!' );
    }
}
