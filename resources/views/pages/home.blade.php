@extends ('main')
@section('content')
    <div>
        <h2 class="text-center py-5 bg-success">Aktyvūs renginiai !</h2>
    </div>
    <section class="pt-4">
        <div class="container">
            <div class="row mt-3">
            @foreach($events as $event)

                <div class="col-4 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{asset('/storage/'.$event->logo)}}" class="card-img-top" alt="Neatvaizduojama">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->eventname}}</h5>
                            <p class="card-text">{{$event->description}}</p>
                            <a href="/renginys/{{$event->id}}" class="btn btn-primary">Daugiau informacijos</a>
                            <a href="/renginys/register/{{$event->id}}" class="btn btn-primary">Registruotis i renginį</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>
        <br>
    @endsection
