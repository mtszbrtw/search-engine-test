@extends('theme.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center" id="about">
        <div class="container d-flex align-items-center flex-column">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">lista klientów</h2>
            @if(session()->has('message'))



                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>


            @endif



            <a href="{{route('customer.create')}}"><button type="button" class="btn btn-info">DODAJ KLIENTA</button></a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nazwa klienta</th>
                    <th scope="col">adres</th>

                    <th scope="col">akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($klienci as $klient)
                    <tr>
                        <th scope="row">{{$klient->id}}</th>
                        <td>{{$klient->name}}</td>
                        <td>{{$klient->adres}}</td>

                        <td><a href="{{route('customer.edit',['customer'=>$klient->id])}}"><button type="button" class="btn btn-info">EDYTUJJ</button></a>
                            <form method="post" action="{{route('customer.destroy',['customer'=>$klient->id])}}">
                              @csrf
                                @method('delete')
                                    <button type="submit" class="btn btn-danger">USUŃ</button>
                                </form></td>
                    </tr>

                @endforeach


                </tbody>
            </table>




        </div>
    </header>
    <!-- Portfolio Section-->

@endsection