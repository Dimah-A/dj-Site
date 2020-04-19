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
        
        return view('tabHome' ,compact('homes'));    
    }

    public function edit( $id)
    {
        $home=Home::find($id);
   
        return view('editHome',compact('home'));
        
   
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([  
            // 'icon' => 'required|',
            'titre' => 'required|min:3',
            'paragraphe' => 'required|min:5',
            'img' => 'required|',  
        ]);  
            
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            $home = new Home();
            $home->icon = $request->input('icon');
            $home->titre = $request->input('titre');
            $home->paragraphe = $request->input('paragraphe');
            $home->son = $request->input('son');

            $home->img = $newName;
            $home->save();
            return redirect()->route('tabHome');        
    }

    public function update(Request $request,  $id)
    {
        $home =Home::find($id);
        Storage::disk('public')->delete($home->img);
        
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        
        $home->icon = $request->input('icon');
        $home->titre = $request->input('titre');
        $home->paragraphe = $request->input('paragraphe');
        $home->son = $request->input('son');

        $home->img = $newName;
        $home->save();

        return redirect()->route('tabHome');

        
    }


   public function destroy($id){

    $home= Home::find($id);


    $home->delete();
    return  redirect()->route('tabHome');
  }

}

