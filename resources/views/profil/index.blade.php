@extends('layouts.app')

@section('content')
<h1 class="alert alert-info d-flex justify-content-center" role="alert">
My Profil  </h1>
<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My INFORMATION</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (Auth::check())
                    {{Auth::user()->name}} <br>
                    {{Auth::user()->email}}
                    @endif 

                </div>
                
                <a 
                href="{{route("edit_profil",$user->id)}}" 
                class="btn btn-warning w-25">Modifier</a>
                
         
            </div>
        </div>
    </div>
</div>
@endsection

