@extends('theme.app')

@section('content')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center" id="about">
    <div class="container d-flex align-items-center flex-column">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">lista rekordów</h2>
        @if(session()->has('message'))



            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
</div>


        @endif




            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">tytuł</th>
                    <th scope="col">opis</th>
                    <th scope="col">utworzone</th>
                    <th scope="col">akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wyniki as $wynik)
                    <tr>
                        <th scope="row">{{$wynik->id}}</th>
                        <td>{{$wynik->title}}</td>
                        <td>{{$wynik->description}}</td>
                        <td>{{$wynik->created_at}}</td>
                        <td><a href="{{route('edytuj.pokaz',['id'=>$wynik->id])}}"><button type="button" class="btn btn-info">EDYTUJ</button></a></td>
                    </tr>

                @endforeach


                </tbody>
            </table>




    </div>
</header>
<!-- Portfolio Section-->

@endsection