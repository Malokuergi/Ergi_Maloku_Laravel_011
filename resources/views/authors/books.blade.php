<x-layout>

    <h2 class="text-center mt-5 text-danger">
        Lista dei libri
    </h2>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <ul>
                    @foreach ($authors as $author)
                        <li>
                            <h3 class="card-title">{{ $author->firstname }} {{ $author->lastname }}</h3>

                            <a href="{{ route('authors.show', ['author' => $author]) }}" class="btn btn-primary">Dettaglio!</a>
                            <a href="{{ route('authors.edit', ['author' => $author]) }}" class="btn btn-warning">Modifica!</a>
                            <form action=" {{ route('authors.destroy', ['author' => $author]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1">!ELIMINA!</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

</x-layout>
