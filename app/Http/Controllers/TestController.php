<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome)
    {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas()
    {

        $notas = [
            0 => 'Anotacao 1',
            1 => 'Anotacao 2',
            2 => 'Anotacao 3',
            3 => 'Anotacao 4',
            4 => 'Anotacao 5',
        ];

        return view('test.notas', compact('notas'));
    }
}
