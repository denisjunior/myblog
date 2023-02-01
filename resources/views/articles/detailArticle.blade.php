@extends('base')

@section('content')
    <div class="content">
        <h1 class="text-center">Détail de l'article</h1>
    </div>

    <div class="container">
        <div class="">
            <div class="card text-white bg-primary"
                style="max-width: 50rem; margin-top: 8%;  margin-left: auto;
    margin-right: auto;">

                <div class="card-header"></div>
                <div class="card-body">
                    <h4 class="card-title">Détail</h4>

                    <form>
                        <div class="form-group">

                            <label for="title" class="form-label mt-4">Titre</label>
                            <input disabled type="text" class="form-control" value="{{ $article->title }}" id="title"
                                name="title">

                        </div>
                        <div class="form-group">
                            <label for="substile" class="form-label mt-4">Sous titre</label>
                            <input disabled type="texte" class="form-control" value="{{ $article->substile }}"
                                name="substile" id="substile">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-label mt-4">slug</label>
                            <input disabled type="text" class="form-control" value="{{ $article->slug }}" name="slug"
                                id="slug">

                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label mt-4">Contenu</label>
                            <input disabled type="text" class="form-control" value="{{ $article->content }}"
                                name="content" id="content" rows="3" />
                        </div>

                        <a href="{{ url('/articles') }}">
                            <button style="margin-top: 2%" class="btn btn-info">Retour</button>
                        </a>
                    </form>

                </div>

            </div>
        </div>


    </div>
@endsection
