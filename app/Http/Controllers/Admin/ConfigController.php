<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class ConfigController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $user = $request->user();
        $nome = $user->name;
        
        
        $idade = 17;
        $cidade = $request->input('cidade');

        $lista = [
            'farinha',
            'ovos',
            'fermento',
            'açúcar'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $lista,
            'showform' => Gate::allows('see-form')
        ];

        return view('admin.config', $data);
    }

    public function info() {
        echo 'Testando Info';
    }

    public function permissoes() {
        echo 'Testando Perms';
    }

}
