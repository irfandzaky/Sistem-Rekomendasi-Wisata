<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('wisatawan.Filter');
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
        $lat = $request->get('lat');
        $lon = $request->get('lng');

        $jarak = DB::table('abouts')
        ->select(DB::raw('abouts.*, ( 6367 * acos( cos( radians('.$lat.') )
        * cos( radians( abouts.lat ) ) * cos( radians( abouts.lng ) - radians('.$lon.') ) + sin( radians('.$lat.') )
        * sin( radians( abouts.lat ) ) ) ) AS distance'))
        ->join('genres', 'genres.id', '=', 'abouts.id_genre')
        ->join('preferences', 'preferences.id_genre', '=', 'abouts.id_genre')
        ->having('distance', '<', 1000000)
        ->orderBy('distance')
        ->get();

        // $jarak = DB::table('abouts')
        // ->join('genres', 'genres.id', '=', 'abouts.id_genre')
        // ->join('preferences', 'preferences.id_genre', '=', 'abouts.id_genre')
        // ->select('lat', 'lng', '', DB::raw(sprintf(
        //     '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(lat)) * cos(radians(lng) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(lat)))) AS distance',
        //     $request->input('lat'),
        //     $request->input('lng')
        // )))
        // ->having('distance', '<', 50)
        // ->orderBy('distance', 'asc')
        // ->first();
   
        // $jarak = About::select(DB::raw('*, ( 6367 * acos( cos( radians('.$lat.') )
        //  * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lon.') ) + sin( radians('.$lat.') )
        //  * sin( radians( lat ) ) ) ) AS distance'))
        // ->having('distance', '<', 100)
        // ->orderBy('distance')
        // ->get();

        return view('wisatawan.wisataJarak', ['jarak' => $jarak]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
