@extends('adminlte::page')

@section('content')
<h1 class="alert alert-info d-flex justify-content-center" role="alert">
     MODIFICATION  </h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">MY INFORMATION</div>
                    
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif


                        <form  action="{{asset('profil.save')}}" method="post" class="form-inline">
                            @csrf
                            <div class="text-center mx-auto col-6 py-5 ">
                                
                                {{-- INPUT NOM --}}
                                <div class="p-5 text-dark rounded">    
                                    <label >Name</label>
                                    <input value="{{Auth::user()->name}}" type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name='name'  placeholder="name"/>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}
                                    </div>
                                    @enderror
                                    
                                    {{-- INPUT email   --}}     
                                    <label>email</label>
                                    <input type="email" value="{{Auth::user()->email}}" class="form-control mb-3 @error('email') is-invalid @enderror" name='email'  placeholder="email"/>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}
                                    </div>
                                    @enderror 
                                </div>
                                <button  type='submit' class="btn btn-danger mb-5">SEND</button>
                            </form>         
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        @endsection
        