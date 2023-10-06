<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', ['categories' => Category::latest()->paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|min:3|max:255|unique:categories',
            'slug' => 'required|unique:categories',
            'photo' => 'image|file|max:1000'
        ]);

        if ($request->file('photo')) {
            $validated_data['photo'] = $request->file('photo')->store('category-photos');
        }

        Category::create($validated_data);
        return redirect('/admin/category')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'photo' => 'file|image|max:1000'
        ];

        if ($request->name != $category->name) {
            $rules['name'] = 'required|unique:categories';
        }

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldPhoto) {
                Storage::delete($request->oldPhoto);   
            }
            $validatedData['photo'] = $request->file('photo')->store('category-photos');
        }

        Category::where('id', $category->id)->update($validatedData);
        return redirect('/admin/category')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->photo) {
            Storage::delete($category->photo);
        }

        Category::destroy($category->id);
        return redirect('/admin/category')->with('success', 'Category deleted successfully');
    }

    /**
     * create new slug for name of category
     * @param Request $request
     */
     public function checkSlug(Request $request)
     {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
     }
}
