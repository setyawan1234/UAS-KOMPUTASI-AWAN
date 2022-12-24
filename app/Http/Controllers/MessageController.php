<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.message.index', [
            'title' => 'Message',
            'message' => Message::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landingpage.contact');
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
            'email' => 'required|string',
            'subjek' => 'required|string',
            'pesan' => 'required|string',

        ]);
        Message::create($validatedata);

        Alert::success('Thank you', 'your message has been delivered!');

        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message, $id)
    {
        $target = Message::where('id', $id)->first();
        return view('admin.message.show', [
            'title' => 'Message',
            'message' => $target
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message, $id)
    {
        $target = Message::where('id', $id)->first();
        $target->delete();
        Alert::success('Success', 'Message berhasil dihapus');
        return redirect('/adminmessage');
    }
}
