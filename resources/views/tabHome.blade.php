
@extends('adminlte::page')

@section('content')

{{-- <div class="row text-center d-flex justify-content-center">

    <div class="card col-2 mr-3">
        <div class=" card-header">
          Logo 
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card col-2 mr-3">
        <div class=" card-header">
          
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card col-2 mr-3">
        <div class=" card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card col-2 mr-3">
        <div class=" card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card col-2 mr-3">
        <div class=" card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    
    </div> --}}
    
    <div class="p-3  bg-secondary  text-info d-flex justify-content-center"><h3 class="text-light">Page de Modification du Home</h1></div>
        
        <form  action="{{asset('saveH')}}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            <div class="text-center mx-auto col-6 py-5 ">
                    <div class="border border-info p-5 bg-light text-white rounded">    
            
            {{-- INPUT icon   --}}     
            {{-- STORAGE --}}
            <label for="" class="text-secondary">icon</label>
            <input class="w-50 form-control @error('icon') is-invalid @enderror" type="text" value="@if($errors->first('icon'))@else{{old('icon')}}@endif" name="icon">
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
            <input type="text" value="@if($errors->first('paragraphe'))
            @else{{old('paragraphe')}}  @endif" class="form-control mb-3 @error('paragraphe') is-invalid @enderror" name='paragraphe'  placeholder="paragraphe"/>
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
            
        </div>
        <button  type='submit' class="btn btn-info mb-5 mt-5">SEND</button>
    </div>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}
    
    <table class="table table-striped  mt-5">
        <thead class="border border-info ">
            <tr class="bg-light" >
                <th  scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">icon</th>
                
                
                
            </tr>
        </thead>
        
        <tbody>  
            @foreach ($homes as $home)
            <tr>
                
                
                
                
                <th scope="row">{{$home->id}}</th>
                <td>{{$home->titre}}</td>
                <td><img class="img-fluid w-25" src="{{asset('storage/'.$home->img)}}" alt="">
                    
                    {{-- <td>
                        <a class="btn btn-danger" href="{{route('deleteH',$home->id)}}">
                            Delete
                        </a>
                        
                        <a class="btn btn-secondary mr-1" href="{{route('editA',$home->id)}}">                    
                            edit
                        </a> 
                    </td> --}}
                            
                        </tr>
                        @endforeach 
                        <tbody>
                        </table>
                        
                        @stop
                        
                        