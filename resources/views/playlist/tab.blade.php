
@extends('adminlte::page')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Page de Modification du Playlist</h1></div>
        
        <form  action="{{asset('playlist.save')}}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            <div class="text-center mx-auto col-6 py-5 ">
                    <div class="border border-info p-5 bg-dark text-white rounded">    
        

          

            {{-- INPUT lienPlaylist --}}
            <label class="text-secondary">lienPlaylist</label>
            <textarea type="text" value="@if($errors->first('lienPlaylist'))
            @else{{old('lienPlaylist')}}  @endif" class="form-control mb-3 @error('lienPlaylist') is-invalid @enderror" name='lienPlaylist'  placeholder="lienPlaylist" ></textarea>
            @error('lienPlaylist')    
            <div class="text-danger">{{ $message }}
            </div>
            @enderror

        
            
        </div>
        <button  type='submit' class="btn btn-info mb-5 mt-5">SEND</button>
    </div>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Copier coller le lien de votre playlist (cliquez sur partager/integrer et copier votre lien) </h1></div>

    <table class="table table-striped  mt-5">
        <thead class="border border-info ">
            <tr class="bg-dark" >
            
                <th scope="col">lien de la playliste</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($playlists as $playlist)
            <tr>  
                <th scope="row">{{$playlist->id}}</th>
                <td>{{$playlist->lienPlaylist}}</td>
                <td>
                    <a class="btn btn-danger" href="{{route('playlist.delete',$playlist->id)}}">Delete</a>
                    <a class="btn btn-secondary mr-1" href="{{route('updateplaylist',$playlist->id)}}"> edit</a> 
                </td>
 
            </tr>
            @endforeach 
            <tbody>
            </table>
            
            
                        @stop
                        
                        