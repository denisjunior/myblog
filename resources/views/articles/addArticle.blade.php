@extends('base')

@section('content')
    <div class="content">
        <h1 class="text-center">Veuillez ajouter un nouvel article</h1>
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
                        <h4 class="card-title">Nouvel article</h4>

                        <form action="{{route('articles.store')}}" method="POST">
                          @csrf
                            <div class="form-group">
                                <label for="title" class="form-label mt-4">Titre</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Le titre de votre article">

                            </div>
                            <div class="form-group">
                                <label for="substile" class="form-label mt-4">Sous titre</label>
                                <input type="texte" class="form-control" name="substile" id="substile" placeholder="un sous titre">
                            </div>
                         <div class="form-group">
                                <label for="slug" class="form-label mt-4">slug</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    placeholder="Le titre de votre article">

                            </div> 
                            <div class="form-group">
                                <label for="content" class="form-label mt-4">Contenu</label>
                                <input type="text" class="form-control" name="content" id="content" rows="3"/>
                            </div>

                            <button style="margin-top: 2%" type="submit" class="btn btn-info">Ajouter</button>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    @endsection
