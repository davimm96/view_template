<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        //CONDICIONAIS
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
        /*$name = "João Ribeiro";
        $phone = "100";

        return view('layouts.admin.newPage3', compact('name', 'phone'));
        */

        //REPETIÇÃO
        /*$data = [
            'phone' => 100,
            'cities' => ['new york', 'los angeles', 'chicago'],
            'names' => ['a', 'b', 'c'],
            'indice' => 1
        ];

        //Mude o exercicio aqui
        return view('home', $data);*/

        return view('layouts.newPage5');
    }


    public function csrform(): View
    {
        return view('layouts.newPage4');
    }

    public function submitForm(): void
    {
        echo "formulário submetido";
    }

    public function submitForm2(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required|min:6'
        ]);

        echo 'Formulário submetido com sucesso';
    }

    public function setSession(): View
    {
        session(['name' => 'John Doe']);
        return view('layouts.newPage5');
    }

    public function clearSession(): View
    {
        session()->forget('name');
        return view('layouts.newPage5');
    }

}
