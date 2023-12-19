@extends('layouts.app')
@section('content')
    <table> 
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Description</th>
            </tr>
        </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title}}</td>
            <td>{{ $book->Author}}</td>
            <td>{{ $book->Year}}</td>
            <td>{{ $book->Description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection