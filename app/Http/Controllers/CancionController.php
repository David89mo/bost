<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    public function index()
    {
        $canciones = Cancion::all();
        return view('canciones.index', compact('canciones'));
    }
    public function create()
    {
        return view('canciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'artistas' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'duracion' => 'required|string|max:255',
            'imgportada' => 'required|string|max:255',
        ]);

        Cancion::create($request->only(['nombre', 'artistas', 'album', 'duracion', 'imgportada']));
        return redirect()->route('canciones.index')->with('success', 'Canción creada correctamente.');
    }

    public function edit($id)
    {
        $cancion = Cancion::findOrFail($id);

        return view('canciones.edit', compact('cancion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'artistas' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'duracion' => 'required|string|max:10', // O el tipo adecuado
            'imgportada' => 'required|string|max:255',
        ]);
    
        $cancion = Cancion::findOrFail($id);
        $cancion->update($request->all());
    
        return redirect()->route('canciones.index')->with('status', 'Canción actualizada correctamente.');
    }
    
    public function destroy(Cancion $cancion)
    {
        try {
            $cancion->delete();
            return redirect()->route('canciones.index')->with('success', 'Canción eliminada correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('canciones.index')->with('error', 'Error al eliminar la canción: ' . $e->getMessage());
        }
    }
   
}
