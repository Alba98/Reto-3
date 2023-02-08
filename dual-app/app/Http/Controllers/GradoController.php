<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Grado;

class GradoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('registrar'))
            return view('errors.403'); 

        $validated = $request->validate([
            'nombre' => 'required|unique:grados|max:255',
        ]);

        Grado::create($validated);
        return redirect()->route('darAlta');
    }
}
