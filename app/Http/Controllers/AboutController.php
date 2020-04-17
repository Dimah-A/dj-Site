<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // dd($portfolio);
        return view('about.tab' ,compact('abouts'));    
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
            'titre' => 'required|min:3',
            'img' => 'required|',  
            'paragraphe' => 'required|min:5',
            'citation' => 'required|min:5',

        ]);  
            
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            $about = new About();
            $about->icon = $request->input('icon');
            $about->titre = $request->input('titre');
            $about->paragraphe = $request->input('paragraphe');
            $about->citation = $request->input('citation');
            $about->img = $newName;
            $about->save();
            return redirect()->route('about.tab');  
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
        
        $home =Home::find($id);
        Storage::disk('public')->delete($home->img);
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $home->icon = $request->input('icon');
        $home->titre = $request->input('titre');
        $home->paragraphe = $request->input('paragraphe');
        $home->img = $newName;
        $home->save();
        return redirect()->route('about.tab');


        $about =About::find($id);
        Storage::disk('public')->delete($about->img);
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $about->icon = $request->input('icon');
        $about->titre = $request->input('titre');
        $about->paragraphe = $request->input('paragraphe');
        $about->citation = $request->input('citation');
        $about->img = $newName;
        $about->save();
        return redirect()->route('about.tab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $about= About::find($id);
        $about->delete();
        return  redirect()->route('about.tab');
    }
}
