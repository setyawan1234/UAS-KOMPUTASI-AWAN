<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index', [
            'title' => 'About',
            'about' => About::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'judul' => 'required|string|max:55',
            'head' => 'required',
            'intro1' => 'required',
            'intro2' => 'required',
            'intro3' => 'required',
            'image1' => 'image|file',
            'image2' => 'image|file',

        ]);

        if ($request->file('image1')) {
            $validatedata['image1'] = $request->file('image1')->store('about', 'public');
        }
        if ($request->file('image2')) {
            $validatedata['image2'] = $request->file('image2')->store('about', 'public');
        }
        About::create($validatedata);

        Alert::success('Success', 'About berhasil ditambah');

        return redirect('/adminabout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about, $id)
    {
        $target = About::where('id', $id)->first();
        return view('admin.about.edit', [
            'title' => 'About',
            'about' => $target
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about, $id)
    {
        $validatedata = $request->validate([
            'judul' => 'required|string|max:55',
            'head' => 'required',
            'intro1' => 'required',
            'intro2' => 'required',
            'intro3' => 'required',
            'image1' => 'image|file',
            'image2' => 'image|file',

        ]);

        if ($request->file('image1')) {
            $validatedata['image1'] = $request->file('image1')->store('about', 'public');
        }
        if ($request->file('image2')) {
            $validatedata['image2'] = $request->file('image2')->store('about', 'public');
        }
        About::where('id', $id)->update($validatedata);
        Alert::success('Success', 'About berhasil diedit');

        return redirect('/adminabout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id)
    {
        $target = About::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'About berhasil dihapus');
        return redirect('/adminabout');
    }
}
