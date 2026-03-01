<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    // Tampilkan halaman admin & daftar produk
    public function index() {
        $products = Product::all();
        return view('admin', compact('products'));
    }

    // Simpan produk baru
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required'
        ]);

        Product::create($request->only(['name', 'description', 'price', 'stock', 'image']));
        return back()->with('success', 'Produk berhasil ditambah!');
    }

    // Update stok saja
    public function updateStock(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update(['stock' => $request->stock]);
        return back()->with('success', 'Stok berhasil diperbarui!');
    }

    // Hapus produk
    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return back()->with('success', 'Produk berhasil dihapus!');
    }
}