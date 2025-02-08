<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        //métod 1
        /*$data = [
            'name' => "João Ribeiro",
            'phone' => "123456789"
        ];

        return view('layouts.admin.newPage3', $data);*/

        //Método 2
        /*return view('layouts.admin.newPage3', [
            'name' => "João Ribeiro",
            'phone' => "123456789"
        ]);*/

        //Método 3
        /*return view('layouts.admin.newPage3')
            ->with('name', "João Ribeiro")
            ->with('phone', '123456789');
        */

        //Metodo 4
        $name = "João Ribeiro";
        $phone = "100";

        return view('layouts.admin.newPage3', compact('name', 'phone'));

    }
}
