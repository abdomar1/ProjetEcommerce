<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|string',
    ]);

    try {
        Categorie::create($request->all());
        return redirect()->route('categories.index')->with('success', 'categorie created successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.categorie.create')->with('error', 'Failed to create categorie: ' . $e->getMessage());
    }
}

public function edit(Categorie $category)
{
    return view('admin.categories.edit', compact('categories'));
}


public function update(Request $request, Categorie $category)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|string',
    ]);

    try {
        $category->update($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Categorie updated successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.categories.edit', $category->id)->with('error', 'Failed to update categorie: ' . $e->getMessage());
    }
}

public function destroy(Categorie $category)
{
    try {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.categories.index')->with('error', 'Failed to delete category: ' . $e->getMessage());
    }
}


}


