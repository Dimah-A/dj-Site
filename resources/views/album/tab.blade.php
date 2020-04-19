
@extends('adminlte::page')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Page de Modification du album</h1></div>
        
        <form  action="{{asset('album.save')}}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            <div class="text-center mx-auto col-6 py-5 ">
                    <div class="border border-info p-5 bg-dark text-white rounded">    
               
            {{-- INPUT icon   --}}     
            {{-- STORAGE --}}
            <label for="" class="text-secondary">icon</label>

            <select  name="icon" class="w-50 form-control @error('icon') is-invalid @enderror" type="text" >
                <option value="">-- icon --</option>
                <option value="glyphicon glyphicon-headphones"> music </option>
                <option value="glyphicon glyphicon-hand-up"></i>circle</option>
                <option value="glyphicon glyphicon-cutlery"></i>tamtam</option>
            </select>
            {{-- <input  value="@if($errors->first('icon'))@else{{old('icon')}}@endif" name="icon"> --}}
            @error('icon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
       
            {{-- INPUT Titre --}}
            {{-- <label class="text-secondary">Titre</label>
            <input type="text" value="@if($errors->first('titre'))
            @else{{old('titre')}}  @endif" class="form-control mb-3 @error('titre') is-invalid @enderror" name='titre'  placeholder="titre"/>
            @error('titre')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror --}}


            {{-- INPUT Titre su son --}}
            <label class="text-secondary">Titre su son</label>
            <textarea type="text" value="@if($errors->first('titreSon'))
            @else{{old('titreSon')}}  @endif" class="form-control mb-3 @error('titreSon') is-invalid @enderror" name='titreSon'  placeholder="titreSon" ></textarea>
            @error('titreSon')    
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
            {{-- INPUT Lien --}}
            <label class="text-secondary">Lien</label>
            <textarea type="text" value="@if($errors->first('titreSon'))
                @else{{old('lien')}}  @endif" class="form-control mb-3 @error('lien') is-invalid @enderror" name='lien'  placeholder="lien" ></textarea>
                @error('lien')    
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
                
                
        {{-- INPUT Image --}}
        {{-- STORAGE --}}
            <label  class="text-secondary">Image</label>
            <input type="file" value="@if($errors->first('img'))
            @else{{old('img')}}  @endif" class="form-control mb-3 @error('img') is-invalid @enderror" name='img'  placeholder="img"/>
            @error('img')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
            
        </div>
        <button  type='submit' class="btn btn-info mb-5 mt-5">SEND</button>
    </div>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}


    <table class="table table-striped  mt-5">
        <thead class="border border-info ">
            <tr class="bg-dark" >
                <th  scope="col">ID</th>
                <th scope="col">Icon</th>
                <th scope="col">Titre du son</th>
                <th scope="col">SoundCloud</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach ($albums as $album)
            <tr>      
                <th scope="row">{{$album->id}}</th>
                <td><span class="{{$album->icon}}"></span></td>
              
                
                {{-- <td>{{$album->titre}}</td> --}}

                <td>{{$album->titreSon}}</td>
                <td>{{$album->lien}}</td>


                <td>
                    {{-- <img class="img-fluid w-25" src="{{asset('storage/'.$avatar->img)}}" alt=""> --}}
                    
                    <img class="img-fluid w-25" src="{{asset('storage/'.$album->img)}}" alt="">
                </td>
                    
                    <td>
                        <a class="btn btn-danger" href="{{route('album.delete',$album->id)}}">
                            Delete
                        </a>
                        
                        <a class="btn btn-secondary mr-1" href="{{route('album.edit',$album->id)}}">                    
                            edit
                        </a> 
                    </td>
                            
                        </tr>
                        @endforeach 
                        <tbody>
                        </table>
                        
                        @stop
                        
                        