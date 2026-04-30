<x-layout>

    <h2 class=" container mt-5 mb-5 text-danger">Dettaglio libro</h2>
    <div class="container fw-bold fs-4">
        
        <p>Libro in questione si chiama {{ $book->name }}</p>
        <p>Ha {{ $book->pages }} pagine</p>
        <p>E' stato scritto nel {{ $book->year }}</p>
    </div>
</x-layout>