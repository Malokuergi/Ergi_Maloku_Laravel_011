<x-layout>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            @auth
                <h1 class="display-4">Benvenuto!, {{ Auth::user()->name }}</h1>
            @endauth
            @guest
                <h1 class="display-4">Benvenuto!</h1>
            @endguest

            <p class="lead">Libreria Online</p>
            <a href="#" class="btn btn-light btn-lg">Scopri di più</a>
        </div>
    </header>

    <ul class="nav justify-content-center mt-5">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('libreria') }}">Tutti i libri</a>
        </li>
        @auth
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('creaLibro') }}"> Nuovo libro</a>
            </li>
        @endauth


    </ul>
    <!-- Cards Section -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Servizio 1</h5>
                            <p class="card-text">Descrizione breve del servizio.</p>
                            <a href="#" class="btn btn-primary">Vai</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Servizio 2</h5>
                            <p class="card-text">Descrizione breve del servizio.</p>
                            <a href="#" class="btn btn-primary">Vai</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Servizio 3</h5>
                            <p class="card-text">Descrizione breve del servizio.</p>
                            <a href="#" class="btn btn-primary">Vai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
