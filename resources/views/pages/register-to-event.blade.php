@extends('main')
@section('content')
    <div class="container">
        <h2 class="mb-4">Užsiregistruoti į renginį</h2>
        @include ('_partials/errors')
        <form action="/renginys/register/{{$event->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="name" class="form-control" placeholder="Renginio pavadinimas">
            </div>
            <div class="form-group mb-4">
                <input type="email" name="email" class="form-control" placeholder="Įveskite el.paštą">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="phone" class="form-control" placeholder="Įveskite telefono numerį">
            </div>
            <div><button type="submit" class="btn btn-primary mb-4">Pridėti</button></div>
        </form>
    </div>

@endsection
