
@extends('adminlte::page')

@section('content')

    
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Page de Modification du Home</h1></div>
        <form  action="/updateHome/{{$home->id}}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            <div class="text-center mx-auto col-6 py-5 ">
                    <div class="border border-info p-5 bg-dark text-white rounded">    
            
            {{-- INPUT icon   --}}     
            {{-- STORAGE --}}
            <label for="" class="text-secondary">icon</label>

            <select  name="icon" class="w-50 form-control @error('icon') is-invalid @enderror" type="text" >
                <option  value="">-- icon --</option>
                <option value="glyphicon glyphicon-headphones"> music </option>
                <option value="glyphicon glyphicon-hand-up"></i>circle</option>
                <option value="glyphicon glyphicon-cutlery"></i>tamtam</option>
            </select>
          

            {{-- <input  value="@if($errors->first('icon'))@else{{old('icon')}}@endif" name="icon"> --}}
            @error('icon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
       
            {{-- INPUT Titre --}}
            <label class="text-secondary">Titre</label>
            <input type="text" value="@if($errors->first('titre'))
            @else{{old('titre')}}  @endif" class="form-control mb-3 @error('titre') is-invalid @enderror" name='titre'  placeholder="titre"/>
            @error('titre')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror


            {{-- INPUT Paragraphe --}}
            <label class="text-secondary">paragraphe</label>
            <textarea type="text" value="@if($errors->first('paragraphe'))
            @else{{old('paragraphe')}}  @endif" class="form-control mb-3 @error('paragraphe') is-invalid @enderror" name='paragraphe'  placeholder="paragraphe" ></textarea>
            @error('paragraphe')    
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

                {{-- INPUT son --}}
                <label class="text-secondary">son</label>
                <textarea type="text" value="@if($errors->first('son'))
                @else{{old('son')}}  @endif" class="form-control mb-3 @error('son') is-invalid @enderror" name='son'  placeholder="son" ></textarea>
                @error('son')    
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
            
        </div>
        <button  type='submit' class="btn btn-info mb-5 mt-5">SEND</button>

        @stop
