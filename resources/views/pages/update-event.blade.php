@extends('main')
@section('content')
    <div class="container">
        <h2 class="mb-4">Atnaujinti informacija apie imone</h2>
        @include ('_partials/errors')
        <form action="/update/{{$event->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="eventname" class="form-control" placeholder="Renginio pavadinimas" value="{{$event->eventname}}">
            </div>
            <div class="form-group mb-4">
                <input type="date" name="date" class="form-control" value="{{$event->date}}">
            </div>
            <div class="form-group mb-4">
                <input type="time" name="time" class="form-control" value="{{$event->time}}">
            </div>
            <div class="form-group mb-4">
                <textarea name="description"  id="" cols="30" rows="10" placeholder="Renginio aprašymas" class="form-control" value="{{$event->description}}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Pridėti</button>
        </form>
    </div>
@endsection
