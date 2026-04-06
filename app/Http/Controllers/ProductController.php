<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Ambil semua produk
     *
     * Endpoint ini mengembalikan seluruh data produk yang tersedia.
     */
    // GET /products
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'status' => true,
            'data'   => $products
        ]);
    }

    /**
     * Ambil satu produk
     *
     * Endpoint ini mengembalikan data produk berdasarkan ID.
     */
    // GET /products/{id}
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status'  => false,
                'message' => 'Product tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $product
        ]);
    }

    /**
     * Tambah produk baru
     *
     * Endpoint ini digunakan untuk menambahkan data produk baru.
     */
    // POST /products
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'deksripsi' => 'required',
            'harga'     => 'required|numeric'
        ]);

        $product = Product::create($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Product berhasil ditambahkan',
            'data'    => $product
        ]);
    }

    /**
     * Update produk
     *
     * Endpoint ini digunakan untuk mengubah data produk berdasarkan ID.
     */
    // PUT /products/{id}
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status'  => false,
                'message' => 'Product tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama'      => 'required',
            'deksripsi' => 'required',
            'harga'     => 'required|numeric'
        ]);

        $product->update($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Product berhasil diupdate',
            'data'    => $product
        ]);
    }

    /**
     * Hapus produk
     *
     * Endpoint ini digunakan untuk menghapus data produk berdasarkan ID.
     */
    // DELETE /products/{id}
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status'  => false,
                'message' => 'Product tidak ditemukan'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Product berhasil dihapus'
        ]);
    }
}