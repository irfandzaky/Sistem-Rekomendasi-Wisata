<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('events')
        ->join('abouts', 'abouts.id', '=', 'events.id_about')
        ->select('events.*')
        ->get();

        return view('wisatawan.EventWisata', compact('event'));
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
        $events = \DB::table('events')
        ->join('abouts', 'abouts.id', '=', 'events.id_about')
        ->select('events.*')
        ->where('events.id_about', $id)
        ->get();

        $images = \DB::table('abouts')
        ->join('events', 'events.id_about', '=', 'abouts.id' )
        ->select('abouts.gambar')
        ->where('events.id_about', $id)
        ->get();

        // $events = Event::FindOrFail($id);

        return view('wisatawan.EventWisata', ['event' => $events, 'image' => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Event::FindOrFail($id);

        return view('wisatawan.detailEvent', ['detail' => $details]);
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
