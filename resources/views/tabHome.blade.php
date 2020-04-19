
@extends('adminlte::page')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


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
    
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Page de Modification du Home</h1></div>
        
        <form  action="{{asset('saveH')}}" method="post" class="form-inline" enctype="multipart/form-data">
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
    </div>
    </form>
    
    {{---------------------------------------------------------------------------------------------------------}}


    <table class="table table-striped  mt-5">
        <thead class="border border-info ">
            <tr class="bg-dark" >
                <th  scope="col">ID</th>
                <th scope="col">Icon</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach ($homes as $home)
            <tr>      
                <th scope="row">{{$home->id}}</th>
                <td><span class="{{$home->icon}}"></span></td>
              
                
                <td>{{$home->titre}}</td>

                <td>{{$home->paragraphe}}</td>
                
                <td>
                  {{-- <img class="img-fluid w-25" src="{{asset('storage/'.$avatar->img)}}" alt=""> --}}
                  
                  <img class="img-fluid w-25" src="{{asset('storage/'.$home->img)}}" alt="">
                </td>
                <td>{{$home->son}}</td>
                    
                    <td>
                        <a class="btn btn-danger" href="{{route('deleteH',$home->id)}}">
                            Delete
                        </a>
                        
                        <a class="btn btn-secondary mr-1" href="{{route('editHome',$home->id)}}">                    
                            edit
                        </a> 
                    </td>
                            
                        </tr>
                        @endforeach 
                        <tbody>
                        </table>
                        
                        @stop
                        
                        