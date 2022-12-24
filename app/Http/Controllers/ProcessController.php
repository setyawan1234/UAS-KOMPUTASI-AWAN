<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.process.index', [
            'title' => 'Process',
            'process' => Process::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.process.create');
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
            'judul' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('process', 'public');
        }
        Process::create($validatedata);

        Alert::success('Success', 'Process berhasil ditambah');

        return redirect('/adminprocess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process, $id)
    {
        $target = Process::where('id', $id)->first();
        return view('admin.process.edit', [
            'title' => 'Process',
            'process' => $target
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:55',
            'image' => 'image|file',
            'judul' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('process', 'public');
        }
        Process::where('id', $id)->update($validatedata);
        Alert::success('Success', 'Process berhasil diedit');

        return redirect('/adminprocess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process, $id)
    {
        $target = Process::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Process berhasil dihapus');
        return redirect('/adminprocess');
    }
}
