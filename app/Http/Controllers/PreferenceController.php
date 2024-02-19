<?php

namespace App\Http\Controllers;

use App\Preference;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = DB::table('abouts')
        ->distinct()
        ->join('genres', 'genres.id', '=', 'abouts.id_genre')
        ->join('preferences', 'preferences.id_genre', '=', 'abouts.id_genre')
        // ->join('users', 'users.name', '=' ,'preferences.nama_user')
        ->select('abouts.*')
        ->get();

        return view('wisatawan.wisata', compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        foreach($req->id_genre as $id_genre){

            $check = new Preference;

            $check->nama_user = $req->nama_user;
            $check->id_genre = $id_genre;
            $check->save();
        }

        return redirect()->action('PreferenceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::FindOrFail($id);

        return view('wisatawan.AboutWisata', ['about' => $about]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        //
    }
}
