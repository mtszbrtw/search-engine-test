<?php

if(session()->has('message')){
    echo '<h1>'.session()->get('message').'</h1><br><br>';
}

?>

<a href="{{ route('dodaj') }}">DODAJ NOWY REKORD</a><br><br>
@foreach($wyniki as $wynik)

   ID: {{$wynik->id}}<br>
   TYTUŁ: {{$wynik->title}}<br>
   OPIS: {{$wynik->description}}<br>
    DATA DODANIA: {{$wynik->created_at}}<br>
   <a href="{{route('edytuj.pokaz',['id'=>$wynik->id])}}">EDYTUJ</a>
   <br><br>

    @endforeach
