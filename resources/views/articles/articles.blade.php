@extends('base')

@section('content')
    <div class="content" style="margin-top: 2%">
        <h1 class="text-center">Les Article du jours </h1>
    </div>

    @if (Session('success'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" onclick=""></button>
            {{ Session('success') }}
        </div>
    @endif

    <div class="container">
        <div class="row row-cols-3">
            @foreach ($articles as $article)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->substile }}</p>
                            <a href="{{ url('/user/articles/' . $article->id) }}" class="btn btn-primary">Voir plus</a>
                            <a href="{{ url('/user/articles/' . $article->id . '/edit') }}" class="btn btn-info">Modifier</a>

                            <form method="POST" action="{{ url('/user/articles' . '/' . $article->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Voulez vous supprimer cet article?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                            </form>
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
