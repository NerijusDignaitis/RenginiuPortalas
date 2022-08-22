@extends('main')
@section('content')
    <div class="container">

        <h2>Renginio nuotrauka</h2>
        <h1 class="mt -4">{{$event->event}}</h1>
        <div class="logo">
            <img src="{{asset('/storage/'.$event->logo)}}" width="400px" alt="" class="src">
        </div>

        <h3>Kita informacija apie renginį:</h3>
        <ul>
            <li>{{$event->eventname}}</li>
            <li>{{$event->date}}</li>
            <li>{{$event->time}}</li>
            <li>{{$event->description}}</li>
        </ul>
        @if(Auth::check())
        <h4>Veiksmai</h4>
        <ul>
            <li><a href="/renginys/delete/{{$event->id}}">Šalinimas</a></li>
            <li><a href="/renginys/update/{{$event->id}}">Duomenu atnaujinimas</a></li>
            <li><a href="/renginys/event-registrations/{{$event->id}}">Peržiūrėti lankytoju registracijas i renginius</a></li>
            @endif
        </ul>
    </div>
@endsection
