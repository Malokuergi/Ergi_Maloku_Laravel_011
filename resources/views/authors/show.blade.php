<x-layout>

    <h2 class=" container mt-5 mb-5 text-danger">Dettaglio Autore</h2>
    <div class="container fw-bold fs-4">
        
        <p>L' Autore si chiama {{ $author->firstname }} {{ $author->lastname }}</p>

        <ul>
            @foreach ($author->books as $book)
                <li>{{ $book->name }}</li>  
            @endforeach
            
        </ul>
        
    </div>
</x-layout>