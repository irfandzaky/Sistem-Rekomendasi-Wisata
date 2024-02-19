<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();

        return view('admin.Kegiatan', compact('kegiatan'));
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
            'nama' => '',
            'gambar' => '',
            'penjelasan' => '',
            'id_about' => '',
        ]);

        $emps = new Kegiatan;
        
        $emps->nama = $request->input('nama');
        $emps->penjelasan = $request->input('penjelasan');
        $emps->id_about = $request->input('id_about');
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

        return redirect('/kegiatan')->with('createsuccess','Data Saved');
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
        //
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
            'penjelasan' => '',
            'id_about' => '',
        ]);

        $emps = Kegiatan::find($id);
        
        $emps->nama = $request->input('nama');
        $emps->penjelasan = $request->input('penjelasan');
        $emps->id_about = $request->input('id_about');
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

        return redirect('/kegiatan')->with('updatesuccess','Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = Kegiatan::find($id);
        $emps->delete();

        return redirect('/kegiatan')->with('deletesuccess', 'Data Delete');
    }
}
