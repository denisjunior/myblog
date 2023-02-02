@extends('base')

@section('content')
    <div class="content">
        <h1 class="text-center">Modification d'article</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-dismissible alert-danger">
            <strong>hoops!</strong>Vérifier les champs de saisie <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <div class="container">
        <div class="">
            <div class="card text-white bg-primary"
                style="max-width: 50rem; margin-top: 8%;  margin-left: auto;
    margin-right: auto;">

                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Modification</h4>

                    <form action="{{ url('/user/articles/' .$articles->id) }}" method="POST">    
                        @csrf
                        @method("PATCH")
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{$articles->id}}"/>
                            <label for="title" class="form-label mt-4">Titre</label>
                            <input type="text" class="form-control" value="{{$articles->title}}" id="title" name="title">

                        </div>
                        <div class="form-group">
                            <label for="substile" class="form-label mt-4">Sous titre</label>
                            <input type="texte" class="form-control" value="{{$articles->substile}}" name="substile" id="substile">
                        </div>
                       <div class="form-group">
                            <label for="slug" class="form-label mt-4">slug</label>
                            <input type="text" class="form-control" value="{{$articles->slug}}" name="slug" id="slug">

                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label mt-4">Contenu</label>
                            <input type="text" class="form-control" value="{{$articles->content}}" name="content" id="content" rows="3"/>
                        </div>

                        <button style="margin-top: 2%" type="submit" class="btn btn-info" value="Update">Modifier</button>
                    </form>

                </div>

            </div>
        </div>


    </div>

@endsection
