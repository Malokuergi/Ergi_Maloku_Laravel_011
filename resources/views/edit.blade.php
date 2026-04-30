<x-layout>
    <div class="container-md mt-5">
        <div class="row">

            <h2 class="mb-5 text-danger">Modifica libro</h2>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('update', ['book'=>$book]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" value="{{ $book->name }}"
                        class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="Inserisci il nome">
                </div>

                <div class="mb-3">
                    <label for="pages" class="form-label">Pagine</label>
                    <input type="number" value="{{ $book->pages }}" class="form-control" id="pages" name="pages"
                        placeholder="Numero di pagine">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Anno</label>
                    <input type="number" value="{{ $book->year }}" class="form-control" id="year" name="year"
                        placeholder="Anno di pubblicazione">
                </div>

                <div class="mb-3">

                    <img style="width:5rem" src="{{ Storage::url($book->image) }}" alt="">

                    <label for="formFile" class="form-label">Copertina attuale</label>
                    <input class="form-control" type="file" id="formFile" name='image'>
                </div>

                <button type="submit" class="btn btn-primary">Salva modifiche </button>
            </form>
        </div>
    </div>
    </div>
</x-layout>
