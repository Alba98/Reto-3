<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Tempresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        $tempresa = Tempresa::all();
        return response(view('pages.coordinador.registrosAnteriores.empresas', [
            'empresas' => $empresas,
            'tempresa' => $tempresa,
        ]));
    }
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
            'nombre' => 'required|unique:empresas|max:255',
            'direccion' => 'required|unique:empresas|max:255',
            'cif' => 'required|unique:empresas|max:255',
            'sector' => 'required|max:255',
        ]);

        Empresa::create($validated);
        return redirect()->route('darAlta');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect()->route('registrosEmpresa');
    }
}
