<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $homes = Home::all();
        // dd($portfolio);
        return view('tabHome' ,compact('homes'));    }

    public function edit(Home $home)
    {
        
        return view('home.edit');
        
   
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([  
            'icon' => 'required|',
            'titre' => 'required|min:3',
            'paragraphe' => 'required|min:5',
            'img' => 'required|',  

            ]);  
            // $newicon = Storage::disk('public')->put('',$icon);
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            $home = new Home();
            $home->titre = $request->input('titre');
            $home = $request->input('icon');
            $home->img = $newName;
           
            $home->save();
            return redirect()->route('tabHome');        
    }
}
