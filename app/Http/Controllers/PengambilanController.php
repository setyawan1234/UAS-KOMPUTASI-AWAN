<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengambilan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;


class PengambilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pengambilan.index', [
            'title' => 'Pengambilan',
            'pengambilan' => Pengambilan::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.pengambilan.create', [
            'kategori' => Category::all()
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
            'nama_pengambil' => 'required|string|max:255',
            'category_id' => 'required',
            'jumlah' => 'required',
            'lokasi' => 'required',
            'tanggal_ambil' => 'required',
            'status' => 'required',

        ]);
        Pengambilan::create($validatedata);
        Alert::success('Success', 'Pengambilan berhasil ditambah');
        return redirect('/adminpengambilan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengambilan  $pengambilan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengambilan $pengambilan, $id)
    {
        $target = Pengambilan::where('id', $id)->first();
        return view('admin.pengambilan.show', [
            'title' => 'Pengambilan',
            'pengambilan' => $target,
            'kategori' => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengambilan  $pengambilan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengambilan $pengambilan, $id)
    {
        $target = Pengambilan::where('id', $id)->first();
        return view('admin.pengambilan.edit', [
            'title' => 'Pengambilan',
            'pengambilan' => $target,
            'kategori' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengambilan  $pengambilan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengambilan $pengambilan, $id)
    {
        $validatedata = $request->validate([
            'nama_pengambil' => 'required|string|max:255',
            'category_id' => 'required',
            'jumlah' => 'required',
            'lokasi' => 'required',
            'tanggal_ambil' => 'required',
            'status' => 'required',

        ]);
        Pengambilan::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Pengambilan berhasil diedit');
        return redirect('/adminpengambilan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengambilan  $pengambilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengambilan $pengambilan, $id)
    {
        $target = Pengambilan::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Pengambilan berhasil dihapus');
        return redirect('/adminpengambilan');
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $pengambilan = Pengambilan::where('nama_pengambil', 'LIKE', '%' . $request->search . '%')->paginate(6);
        } else {
            $pengambilan = Pengambilan::paginate(6);
        }
        return view('admin.pengambilan.index', ['pengambilan' => $pengambilan]);
    }
}
