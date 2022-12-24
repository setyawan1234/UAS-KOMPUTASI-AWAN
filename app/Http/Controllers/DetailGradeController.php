<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DetailGrade;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DetailGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.grade.index', [
            'title' => 'Grade',
            'grade' => DetailGrade::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grade.create', [
            'kategori' => Category::all(),
            'product' => Product::all()
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
            'categories_id' => 'required',
            'products_id' => 'required',
            'grade' => 'required',
            'screen' => 'required',
            'above' => 'required',
            'defect' => 'required',
            'imperfect' => 'required',
            'process' => 'required',
            'variety' => 'required',
            'maisture' => 'required',

        ]);
        DetailGrade::create($validatedata);
        Alert::success('Success', 'Grade berhasil ditambah');
        return redirect('/admingrade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailGrade  $detailGrade
     * @return \Illuminate\Http\Response
     */
    public function show(DetailGrade $detailGrade)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailGrade  $detailGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailGrade $detailGrade, $id)
    {
        $target = DetailGrade::where('id', $id)->first();
        return view('admin.grade.edit', [
            'title' => 'Grade',
            'grade' => $target,
            'kategori' => Category::all(),
            'product' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailGrade  $detailGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailGrade $detailGrade, $id)
    {
        $validatedata = $request->validate([
            'categories_id' => 'required',
            'products_id' => 'required',
            'grade' => 'required',
            'screen' => 'required',
            'above' => 'required',
            'defect' => 'required',
            'imperfect' => 'required',
            'process' => 'required',
            'variety' => 'required',
            'maisture' => 'required',

        ]);
        DetailGrade::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Grade berhasil diedit');
        return redirect('/admingrade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailGrade  $detailGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailGrade $detailGrade, $id)
    {
        $target = DetailGrade::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Grade berhasil dihapus');
        return redirect('/admingrade');
    }
}
