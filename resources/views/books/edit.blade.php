@extends('app')

@section('content')
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $book->title }}">
        <button type="submit">Editer</button>
        <button type="submit">Supprimer</button>
    </form>
@endsection
