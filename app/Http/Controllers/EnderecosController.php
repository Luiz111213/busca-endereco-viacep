<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enderecos; // Certifique-se de que o modelo Enderecos está importado corretamente

class EnderecosController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'numero' => 'required|string|max:10',
        ]);

        $endereco = Enderecos::create($validatedData);

        return response()->json(['success' => true, 'data' => $endereco]);
    }

}
