<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;   // ✅ tambahkan
use App\Http\Requests\UpdateProductRequest;  // ✅ tambahkan
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['user', 'category'])->paginate(10);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $users = User::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('product.create', compact('users', 'categories'));
    }

    // ✅ Ganti Request biasa dengan StoreProductRequest
    public function store(StoreProductRequest $request)
    {
        // Validasi sudah otomatis dijalankan oleh StoreProductRequest
        $validated = $request->validated();

        // mapping quantity -> qty
        $validated['qty'] = $validated['quantity'];
        unset($validated['quantity']);

        // user_id dari dropdown jika admin memilih, atau dari yang login
        $validated['user_id'] = $request->input('user_id') ?? auth()->id();

        Product::create($validated);

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.view', compact('product'));
    }

    public function edit(Product $product)
    {
        Gate::authorize('update', $product);

        $users = User::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('product.edit', compact('product', 'users', 'categories'));
    }

    // ✅ Ganti Request biasa dengan UpdateProductRequest
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        Gate::authorize('update', $product);

        // Validasi sudah otomatis dijalankan oleh UpdateProductRequest
        $validated = $request->validated();

        // mapping quantity -> qty
        if (isset($validated['quantity'])) {
            $validated['qty'] = $validated['quantity'];
            unset($validated['quantity']);
        }

        $product->update($validated);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        Gate::authorize('delete', $product);

        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil dihapus');
    }
}