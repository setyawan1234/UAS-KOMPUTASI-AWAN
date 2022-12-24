<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.feature.index', [
            'title' => 'Feature',
            'feature' => Feature::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feature.create');
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
            'nama' => 'required|string|max:55',
            'image' => 'image|file',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('feature', 'public');
        }
        Feature::create($validatedata);

        Alert::success('Success', 'Feature berhasil ditambah');

        return redirect('/adminfeature');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature, $id)
    {
        $target = Feature::where('id', $id)->first();
        return view('admin.feature.edit', [
            'title' => 'Feature',
            'feature' => $target
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:55',
            'image' => 'image|file',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('feature', 'public');
        }
        Feature::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Feature berhasil diedit');

        return redirect('/adminfeature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature, $id)
    {
        $target = Feature::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Feature berhasil dihapus');
        return redirect('/adminfeature');
    }
}
