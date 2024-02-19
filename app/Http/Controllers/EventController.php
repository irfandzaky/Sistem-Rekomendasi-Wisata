<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('admin.Event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar' => '',
            'id_about' => '',
            'nama' => '',
            'tanggal' => '',
            'tempat' => '',
            'penyelenggara' => '',
            'penjelasan' => '',
        ]);

        $emps = new Event;
        
        $emps->id_about = $request->input('id_about');
        $emps->nama = $request->input('nama');
        $emps->tanggal = $request->input('tanggal');
        $emps->tempat = $request->input('tempat');
        $emps->penyelenggara = $request->input('penyelenggara');
        $emps->penjelasan = $request->input('penjelasan');
        // $emps->gambar = $request->input('gambar');

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $emps->gambar = $filename;
        } else {
            return $request;
            $emps->gambar = '';
        }

        $emps->save();

        return redirect('/events')->with('createsuccess','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar' => '',
            'id_about' => '',
            'nama' => '',
            'tanggal' => '',
            'tempat' => '',
            'penyelenggara' => '',
            'penjelasan' => '',
        ]);
        
        $emps = Event::find($id);
        
        $emps->id_about = $request->input('id_about');
        $emps->nama = $request->input('nama');
        $emps->tanggal = $request->input('tanggal');
        $emps->tempat = $request->input('tempat');
        $emps->penyelenggara = $request->input('penyelenggara');
        $emps->penjelasan = $request->input('penjelasan');
        // $emps->gambar = $request->input('gambar');

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $emps->gambar = $filename;
        } else {
            return $request;
            $emps->gambar = '';
        }

        $emps->save();

        return redirect('/events')->with('createsuccess','Data Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = Event::find($id);
        $emps->delete();

        return redirect('/events')->with('deletesuccess', 'Data Delete');
    }
}
