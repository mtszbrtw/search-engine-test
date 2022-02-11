@extends('theme.app')

@section('content')




    <form method="post"  class="masthead" action="{{ route('edytuj.edytuj',['id'=>$record->id]) }}">
    edytujesz rekord id {{ $record->id }}<br>
    @csrf
   @method('PUT')
    <label for="title"></label><input value="{{ $record->title }}" type="text" id="title" name="title" placeholder="Podaj tytuł" required><br>
    <label for="description"></label><input id="description" name="description" placeholder="podaj opis" required type="text"
           value="{{ $record->description }}"><br>
    <label for="created_at"></label><input value="{{ $record->created_at }}" type="text" id="created_at" name="created_at" required><br>

    <input type="submit" value="edytuj">
</form>

    @endsection