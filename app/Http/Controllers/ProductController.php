<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', ['products' => Product::latest()->where('user_id', auth()->user()->id)->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required|integer',
            'description' => 'required|min:40',
            'photo' => 'file|image|max:1000',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('product-photos');
        }

        Product::create($validatedData);
        return redirect('/admin/product')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['categories' => Category::all(), 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required',
            'category_id' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'photo' => 'file|image',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldPhoto) {
                Storage::delete($request->oldPhoto);
            }
            $validatedData['photo'] = $request->file('photo')->store('product-photos');
        }

        Product::where('id', $product->id)->update($validatedData);
        return redirect('/admin/product')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->photo) {
            Storage::delete($product->photo);
        }

        Product::destroy($product->id);
        return redirect('/admin/product')->with('success', 'Product deleted successfully');
    }

    /**
     * create new slug for name of product
     * @param Request $request
     */
    public function checkSlug(Request $request)
    {
       $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
       return response()->json(['slug' => $slug]);
    }
}
