<?php

namespace App\Http\Controllers;

use App\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::all();
        
        return view('playlist.tab' ,compact('playlists'));    
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
        $validatedData = $request->validate([  
            'lienPlaylist' => 'required|min:5',
        ]); 
        $playlist = new Playlist();
        $playlist->lienPlaylist = $request->input('lienPlaylist');
        $playlist->save();
        return redirect()->route('playlist.tab'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        $playlist = new Playlist();
        $playlist->lienPlaylist = $request->input('lienPlaylist');
        $playlist->save();
        return redirect()->route('playlist.tab'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $id)
    {
        $playlist=Playlist::find($id);
   
        return view('playlist.edit',compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $playlist = new Playlist();
        $playlist->lienPlaylist = $request->input('lienPlaylist');
        $playlist->save();
        return redirect()->route('playlist.tab'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        
    $playlist= Playlist::find($id);


    $playlist->delete();
    return  redirect()->route('playlist.tab');
    }
}
