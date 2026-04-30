<x-layout>

    <h2 class="text-center mt-5 text-danger">
        Lista dei libri
    </h2>
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4 gap-2 mb-3">
                        <div class="card">
                            <img src="{{ Storage::url($book->image) }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title">{{ $book->name }}</h3>
                                <h4 class="card-text">pages: {{ $book->pages }}</h4>
                                <h5 class="card-text">year: {{ $book->year }}</h5>
                                <a href="{{ route('show', ['book' => $book]) }}" class="btn btn-primary">Dettaglio!</a>
                                <a href="{{ route('edit', ['book' => $book]) }}" class="btn btn-warning">Modifica!</a>
                                <form action=" {{ route('destroy', ['book'=>$book]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-1">!ELIMINA!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
