@extends('app')

@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <button type="submit">Créer</button>
    </form>
@endsection
