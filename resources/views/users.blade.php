@extends('base')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3 text-center">Users</h1>
    <div class="users row justify-content-center">
        @foreach ($users as $item)
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{$item->name}}</h5>
                        <p class="card-text">{{$item->email}} </p>

                    </div>
                </div>
                
            </div>
            
        </div>
            
        @endforeach

    </div>

    </div>
   
    
@endsection