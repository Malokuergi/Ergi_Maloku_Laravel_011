<x-layout>
    <div class="container-md mt-5">
        <div class="row">

            <h2 class="mb-5 text-danger">Modifica Autore</h2>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('authors.update', ['author'=>$author]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" value="{{ $author->firstname }}"
                        class="form-control @error('firstname') is-invalid @enderror" id="name" name="firstname"
                        placeholder="Inserisci il Nome dell' autore">
                </div>

                <div class="mb-3">
                    <label for="pages" class="form-label">Pagine</label>
                    <input type="text" value="{{ $author->lastname }}" class="form-control" @error('lastname') is-invalid @enderror id="pages" name="lastname"
                        placeholder="Inserisci il Cognome dell' autore">
                </div>

                <button type="submit" class="btn btn-primary">Salva modifiche </button>
            </form>
        </div>
    </div>
    </div>
</x-layout>
