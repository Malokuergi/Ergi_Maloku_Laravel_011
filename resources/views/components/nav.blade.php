<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Il Mio Sito</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('homepage') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('libreria') }}">Tutti i libri</a></li>
                @auth
                <li class="nav-item "><a class="nav-link active" href="{{ route('authors.index') }}">lista Autori</a></li>
                @endauth
                @guest
                    <li class="nav-item"><a class="nav-link active text-primary fw-bold" href="{{ route('accedi') }}"> Accedi! </a></li>
                @endguest
                
                @auth
                    <li class="nav-item "><a class="nav-link active text-success fw-bold" href="{{ route('creaLibro') }}">Nuovo Libro</a></li>
                    <li class="nav-item "><a class="nav-link active text-primary fw-bold" href="{{ route('authors.create') }}">Nuovo Autore</a></li>
                @endauth
                @auth
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn text-warning fw-bold" type="submit">LOGOUT</button>
                        </form>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
