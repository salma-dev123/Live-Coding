@extends('layouts.app')
@section('content')
<h1> Movies à voir </h1>
<form action='/movies' method='POST'>
    @csrf
    <input type='text' name='title' placeholder='Movie Title'>
    <input type='text' name='director' placeholder='Movie director'>
    <button type='submit'>Ajouter</button>
</form>
<br>

<table border='1' cellpadding='5'>
    <tr>
        <th>Title</th>
        <th>Director</th>
        <th>Actions</th>
    </tr>
    @foreach($movies as $m)
    <tr>
        <td>{{$m->title}}</td>
        <td>{{$m->director}}</td>
        <td>
            <form action='/movies/{{$m->id}}' method='POST'>
                @csrf
                @method('DELETE')
                <button type='submit'>Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>