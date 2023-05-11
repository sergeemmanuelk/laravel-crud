@extends('app')

@section('content')
    @foreach($books as $book)
        <p>
            {{ $book->title }} de {{ $book->user->name }}
        </p>
        <br>
        <p>
            <a href="{{ route('books.edit', $book) }}">Editer</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </p>
    @endforeach
@endsection


