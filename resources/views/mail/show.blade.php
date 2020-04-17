@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">{{$data->name}}</div>
                <div class="card-body">
                   
                   Email : {{$data->email}} <br>
                   <hr class="bg-light"> 
                   Id :{{$data->id}}

                   {{-- article : {{$article[0]}} --}}
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection