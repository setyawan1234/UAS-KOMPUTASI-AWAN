<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produk.index', [
            'title' => 'Product',
            'product' => Product::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create', [
            'kategori' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',
            'categories_id' => 'required',
            'image' => 'image|file',
            'status' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('product', 'public');
        }
        Product::create($validatedata);

        Alert::success('Success', 'Produk berhasil ditambah');

        return redirect('/adminproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        return view('admin.produk.show', [
            'title' => 'Product',
            'product' => $target
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        return view('admin.produk.edit', [
            'title' => 'Product',
            'product' => $target,
            'kategori' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',
            'categories_id' => 'required',
            'image' => 'image|file',
            'status' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('product', 'public');
        }
        Product::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Produk berhasil diedit');

        return redirect('/adminproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public $delete_id;


    public function destroy(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Produk berhasil dihapus');
        return redirect('/adminproduk');
    }
}
