<?php

namespace App\Http\Controllers;

use App\Profil;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $users= User::all();
        return view('profil.index',compact('users','user'));
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
            'name' => 'required|min:3',
            'email' => 'required',
            // 'password' => 'required|min:8',

            ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->save();
        return redirect()->route('profil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        $user=Auth::user();
        return view('profil.edit',compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $id)
    {
        $user =Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->save();
        // dd($user);
        return view('profil.edit',compact('user'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
