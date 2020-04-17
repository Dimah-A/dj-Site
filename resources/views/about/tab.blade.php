
@extends('adminlte::page')

@section('content')


    
    <div class="p-3  bg-secondary  d-flex justify-content-center"><h1 class="text-light">Page de Modification du About</h1></div>
        
        <form  action="{{asset('about.save')}}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            <div class="text-center mx-auto col-6 py-5 ">
                    <div class="border border-info p-5 bg-dark text-white rounded">    
            
            {{-- INPUT icon   --}}     
            {{-- STORAGE --}}
            <label for="" class="text-secondary">icon</label>

            <select  name="icon" class="w-50 form-control @error('icon') is-invalid @enderror" type="text" >
                <option value="">-- icon --</option>
                <option value="glyphicon glyphicon-ice-lolly"> glace </option>
                <option value="glyphicon glyphicon-education"></i>education</option>
                <option value="glyphicon glyphicon-cutlery"></i>cutlery</option>
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

            {{-- INPUT Image --}}
            {{-- STORAGE --}}
                <label  class="text-secondary">Image</label>
                <input type="file" value="@if($errors->first('img'))
                @else{{old('img')}}  @endif" class="form-control mb-3 @error('img') is-invalid @enderror" name='img'  placeholder="img"/>
                @error('img')
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

            {{-- INPUT citation --}}
            <label class="text-secondary">citation</label>
            <textarea type="text" value="@if($errors->first('citation'))
            @else{{old('citation')}}  @endif" class="form-control mb-3 @error('citation') is-invalid @enderror" name='citation'  placeholder="citation" ></textarea>
            @error('paragraphe')    
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
                <th scope="col">Image</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">citation</th>
                <th scope="col">Action</th>


                
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach ($abouts as $about)
            <tr>
                
                
                <th scope="row">{{$about->id}}</th>
                <td><span class="{{$about->icon}}"></span></td>
                <td>{{$about->titre}}</td>

                <td>{{$about->paragraphe}}</td>
                <td>{{$about->citation}}</td>


                <td>
                    {{-- <img class="img-fluid w-25" src="{{asset('storage/'.$avatar->img)}}" alt=""> --}}
                    
                    <img class="img-fluid w-25" src="{{asset('storage/'.$about->img)}}" alt="">
                </td>
                    
                    <td>
                        <a class="btn btn-danger" href="{{route('about.delete',$about->id)}}">
                            Delete
                        </a>
                        
                        <a class="btn btn-secondary mr-1" href="{{route('about.update',$about->id)}}">                    
                            edit
                        </a> 
                    </td>
                            
                        </tr>
                        @endforeach 
                        <tbody>
                        </table>
                        
                        @stop
                        
                        