<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image file
        ]);
    
        try {
            $imagePath = null;
    
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('images/categories', 'public'); // Store the image in the 'public/images/categories' directory
            }
    
            DB::table('categories')->insert([
                'nom' => $request->nom,
                'description' => $request->description,
                'image' => $imagePath, // Save the image path to the database
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            return redirect()->route('categories.index')->with('success', 'Categorie created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('categories.create')->with('error', 'Failed to create categorie: ' . $e->getMessage());
        }
    }
    
     

public function edit(Categorie $category)
{
    return view('admin.categories.edit', compact('category'));
}


public function update(Request $request, Categorie $category)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the new image file
        'remove_image' => 'nullable|boolean', // Check if the user wants to remove the image
    ]);

    try {
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images/categories', 'public');
            $category->image = $imagePath;
        } elseif ($request->remove_image) {
            // If user wants to remove the image
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
                $category->image = null;
            }
        }

        // Update the category data
        $category->nom = $request->nom;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Categorie updated successfully.');
    } catch (\Exception $e) {
        return redirect()->route('categories.edit', $category->id)->with('error', 'Failed to update categorie: ' . $e->getMessage());
    }
}




public function destroy(Categorie $category)
{
    try {
        // Delete the image if it exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        // Now delete the category
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->route('categories.index')->with('error', 'Failed to delete category: ' . $e->getMessage());
    }
}


}


