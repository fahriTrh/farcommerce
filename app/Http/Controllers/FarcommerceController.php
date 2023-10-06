<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class FarcommerceController extends Controller
{
    public function index()
    {
        $title = '';
        $products = Product::latest()->search(request('search'))->category(request('category'))->author(request('author'))->limit(10)->get();
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        }

        if (request('author')) {
            $author = User::firstWhere('user_name', request('author'))->user_name;
            $title = ' by: ' . $author;
        }

        return view('home.index', [
            'title' => 'Far Commerce',
            'products' => $products,
            'categories' => Category::all(),
            'info' => Cart::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('show.index', ['title' => 'show detail product', 'product' => $product, 'categories' => Category::all(), 'info' => Cart::all()]);
    }

    public function cart()
    {
        return view('cart.index', ['title' => 'cart', 'products' => Cart::latest()->get(), 'categories' => Category::all(), 'info' => Cart::all()]);
    }

    /**
     * load more product
     */
    public function loadMore(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = 10;

        $products = Product::latest()->skip($skip)->take($take)->search(request('search'))->category(request('category'))->author(request('author'))->get();
        foreach ($products as $product) {
            $product['category'] = $product->category->name;
        }

        $records = $products;

        return response()->json($records);
    }

    /**
     * store a new cart
     * @param Request $request
     */
    public function cartStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'photo' => 'required',
            'category' => 'required',
            'user' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Cart::create($validatedData);
        return back();
    }

    /**
     * destroy a cart
     * @param Cart $cart
     * @param Request $request
     */
    public function cartDestroy(Request $request)
    {
        Cart::destroy($request->id);
        return back();
    }
}