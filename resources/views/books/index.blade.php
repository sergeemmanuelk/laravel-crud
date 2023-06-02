@extends('app')

@section('content')
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Utilisateur</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Ajouté le</th>
                <th scope="col">Modifié le</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->user->name }}</td>
                <td>{{ $book->published_date }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}">Editer</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection


