<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = DB::table('kegiatan')
        ->join('abouts', 'abouts.id', '=', 'kegiatan.id_about')
        ->select('kegiatan.*')
        ->get();

        return view('wisatawan.Kegiatan', compact('kegiatan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = \DB::table('kegiatan')
        ->join('abouts', 'abouts.id', '=', 'kegiatan.id_about')
        ->select('kegiatan.*')
        ->where('kegiatan.id_about', $id)
        ->get();

        $images = \DB::table('abouts')
        ->join('kegiatan', 'kegiatan.id_about', '=', 'abouts.id' )
        ->select('abouts.gambar')
        ->where('kegiatan.id_about', $id)
        ->get();


        // $events = Event::FindOrFail($id);

        return view('wisatawan.Kegiatan', ['kegiatan' => $kegiatan, 'image' => $images]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Kegiatan::FindOrFail($id);

        return view('wisatawan.detailKegiatan', ['detail' => $details]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventUser $eventUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventUser $eventUser)
    {
        //
    }
}
