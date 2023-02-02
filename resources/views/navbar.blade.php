<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Marmiton</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Accueil
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.create') }}">Ajouter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Liste des articles</a>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
            </form>

            @if (Auth::user())
                <form action=" {{ route('logout') }}" method="POST" style="margin-left: 2%">
                    @csrf
                    <button class="btn btn-danger" type="submit">Déconnexion</button>
                </form>
            @else
                <a href="{{route('login')}}" style="margin-left: 2%"> <button class="btn btn-danger"  type="submit">Se connecter</button></a>
            @endif

            <a href="{{route('register')}}" style="margin-left: 1%"> <button  class="btn btn-light"  type="submit">S'inscrire</button></a>

        </div>
    </div>
</nav>
