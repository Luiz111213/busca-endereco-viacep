<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importe o modelo User

class Cpf extends Controller
{
    public function verificarCpf(Request $request)
    {
        // Obtenha o CPF fornecido no login
        $cpf = $request->input('cpf');

        // Remova quaisquer caracteres especiais do CPF
        $cpf = preg_replace("/[^0-9]/", "", $cpf);

        // Verifique se o CPF existe na tabela de usuários
        $user = User::where('cpf', $cpf)->first();

        // Se o usuário existir, retorne verdadeiro, caso contrário, retorne falso
        if ($user) {
            return response()->json(['cpf_existe' => true]);
        } else {
            return response()->json(['cpf_existe' => false]);
        }
    }

}

