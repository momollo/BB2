<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::all();
        return view('recette.index', compact('recettes'));
    }

    public function create()
    {
        return view('recette.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Recette::create($request->all());

        return redirect()->route('recettes.index')
            ->with('success', 'Recette créée avec succès.');
    }

    public function show(Recette $recette)
    {
        return view('recette.show', compact('recette'));
    }

    public function edit(Recette $recette)
    {
        return view('recette.edit', compact('recette'));
    }

    public function update(Request $request, Recette $recette)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $recette->update($request->all());

        return redirect()->route('recettes.index')
            ->with('success', 'Recette mise à jour avec succès.');
    }

    public function destroy(Recette $recette)
    {
        $recette->delete();

        return redirect()->route('recettes.index')
            ->with('success', 'Recette supprimée avec succès.');
    }
}
