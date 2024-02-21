<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('client.index', compact('clientes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->nombres = $request->input('nombres');
        $clientes->apellidos = $request->input('apellidos');
        $clientes->ubigeo = $request->input('ubigeo');
        $clientes->dni = $request->input('dni');
        $clientes->direccion = $request->input('direccion');
        $clientes->telefono = $request->input('telefono');

        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->nombres = $request->input('nombres');
        $clientes->apellidos = $request->input('apellidos');
        $clientes->ubigeo = $request->input('ubigeo');
        $clientes->dni = $request->input('dni');
        $clientes->direccion = $request->input('direccion');
        $clientes->telefono = $request->input('telefono');

        $clientes->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();

        return redirect()->back();
    }
}
