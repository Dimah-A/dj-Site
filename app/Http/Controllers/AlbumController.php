<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        // dd($portfolio);
        return view('album.tab' ,compact('albums'));    
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
            // 'icon' => 'required|',
            // 'titre' => 'required|min:3',
            'titreSon' => 'required|min:5',
            'lien' => 'required|min:5',
            'img' => 'required|',  
        ]);  

            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            $album = new Album();
            $album->icon = $request->input('icon');
            // $album->titre = $request->input('titre');
            $album->titreSon = $request->input('titreSon');
            $album->lien = $request->input('lien');
            $album->img = $newName;
            $album->save();
            return redirect()->route('album.tab');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $album=Album::find($id);
        return view('album.edit',compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $album =Album::find($id);
        Storage::disk('public')->delete($album->img);
        
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        
        $album->icon = $request->input('icon');
        // $album->titre = $request->input('titre');
        $album->titreSon = $request->input('titreSon');
        $album->lien = $request->input('lien');
        $album->img = $newName;
        $album->save();

        return redirect()->route('album.tab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        
    $album= Album::find($id);
    $album->delete();
    return  redirect()->route('album.tab');
    }
}
