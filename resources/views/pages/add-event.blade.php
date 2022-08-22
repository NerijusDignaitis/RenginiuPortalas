@extends('main')
@section('content')
    <div class="container">
        <h2 class="mb-4">Pridėti naują renginį</h2>
        @include ('_partials/errors')
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="eventname" class="form-control" placeholder="Renginio pavadinimas">
            </div>
            <div class="form-group mb-4">
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group mb-4">
                <input type="time" name="time" class="form-control">
            </div>
            <div class="form-group mb-4">
                <textarea name="description"  id="" cols="30" rows="10" placeholder="Renginio aprašymas" class="form-control"></textarea>
            </div>

            <div class="form-group mb-4">
                <label>Logotipas</label>
                <input type="file" name="logo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-4">Pridėti renginį</button>
        </form>
    </div>
@endsection
