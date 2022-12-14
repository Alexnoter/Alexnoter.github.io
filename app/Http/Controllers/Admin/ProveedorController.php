<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proveedore;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.proveedores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'celular' => 'required'
        ]);

        Proveedore::create($request->all());

        return redirect()->route('admin.proveedores.index')->with('info', 'Proveedor creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedore $proveedore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedore $proveedore)
    {
        return view('admin.proveedores.edit', compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedore $proveedore)
    {
        $request->validate([
            'nombre' => 'required',
            'celular' => 'required'
        ]);
        $proveedore->update($request->all());
        
        return redirect()->route('admin.proveedores.index')->with('info', 'proveedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedore $proveedore)
    {
        $proveedore->delete();

        return redirect()->route('admin.proveedores.index')->with('info', 'proveedor eliminado correctamente');
    }
}
