<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kategori.index', [
            'title' => 'Kategori',
            'kategori' => Category::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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

        ]);
        Category::create($validatedata);
        Alert::success('Success', 'Kategori berhasil ditambah');
        return redirect('/adminkategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $target = Category::where('id', $id)->first();
        return view('admin.kategori.edit', [
            'title' => 'Product',
            'kategori' => $target
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',

        ]);
        Category::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Kategori berhasil diedit');
        return redirect('/adminkategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $target = Category::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Kategori berhasil dihapus');
        return redirect('/adminkategori');
    }
}
