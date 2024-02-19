<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();

        return view('admin.About', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AboutTambah');
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
            'nama' => '',
            'gambar' => '',
            'alamat' => '',
            'lat' => '',
            'lng' => '',
            'penjelasan' => '',
            'id_genre' => '',
        ]);

        $emps = new About;
        
        $emps->nama = $request->input('nama');
        $emps->alamat = $request->input('alamat');
        $emps->lat = $request->input('lat');
        $emps->lng = $request->input('lng');
        $emps->penjelasan = $request->input('penjelasan');
        $emps->id_genre = $request->input('id_genre');
        // $emps->gambar = $request->input('gambar');

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/about', $filename);
            $emps->gambar = $filename;
        } else {
            return $request;
            $emps->gambar = '';
        }

        $emps->save();

        return redirect('/abouts')->with('createsuccess','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.AboutEdit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => '',
            'gambar' => '',
            'alamat' => '',
            'lat' => '',
            'lng' => '',
            'penjelasan' => '',
            'id_genre' => '',
        ]);

        $emps = About::find($id);
        
        $emps->nama = $request->input('nama');
        $emps->alamat = $request->input('alamat');
        $emps->lat = $request->input('lat');
        $emps->lng = $request->input('lng');
        $emps->penjelasan = $request->input('penjelasan');
        $emps->id_genre = $request->input('id_genre');
        // $emps->gambar = $request->input('gambar');

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/about', $filename);
            $emps->gambar = $filename;
        } else {
            return $request;
            $emps->gambar = '';
        }

        $emps->save();

        return redirect('/abouts')->with('updatesuccess','Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = About::find($id);
        $emps->delete();

        return redirect('/abouts')->with('deletesuccess', 'Data Delete');
    }
}
