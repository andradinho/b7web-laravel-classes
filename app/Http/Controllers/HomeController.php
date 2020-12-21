<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class HomeController extends Controller
{
    public function __invoke() {
        $list = Tarefa::where('resolvido', 0)->get();

        foreach($list as $item) {
            echo $item->titulo."<br/>";
        }
        
        //return view('welcome');
    }
}
