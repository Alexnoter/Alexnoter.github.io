<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = Categoria::all();

        return view('admin.categorias.index', compact('categorias'));
    }

    
    public function create()
    {
        return view('admin.categorias.create');
    }

   
    public function store(Request $request)
    {
        /* reglas de  validacion */
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:categorias'/* en unique le decimos en que tabla queremos que  sea  unico */
        ]);

        /* creamos y almacenamor todo  los datos que le mandemos en el formulario */
        $categoria = Categoria::create($request->all());
        
        /* return $request->all(); */
        /* redireccionamos a una ruta */
        return redirect()->route('admin.categorias.index')->with('info', 'la categoria se creo con exito');;
    }

   
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    
    public function update(Request $request, Categoria $categoria)
    {
        /* reglas de  validacion */
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id"/* haremos que el slug sea unico pero que ignore al anterior */
        ]);

        $categoria->update($request->all());
        /* el with sera  para mostrar  una alerta que nos diga que se  actualizo la categoria */
        return redirect()->route('admin.categorias.index')->with('info', 'la categoria se actualizo con exito');
    }

    
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('admin.categorias.index')->with('delete', 'la categoria se  elimino con exito');
    }
}
