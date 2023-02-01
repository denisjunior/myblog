@extends('base')

@section('content')
    <div class="content" style="margin-top: 2%">
        <h1 class="text-center">Les Article du jours </h1>
    </div>

    <div class="container">
        <div class="row row-cols-3">
            @foreach ($articles as $article)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->substile }}</p>
                            <a href="#" class="btn btn-primary">Voir plus</a>
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.customer') }}
    </div>
@endsection
