@extends('main')
@section('content')
    <div class="container">
        <h3>Lankytoju registracijos į renginius</h3>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">El.paštas</th>
                <th scope="col">Telefono numeris</th>
                <th scope="col">Statusas</th>
                <th scope="col">Veiksmai</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($eventRegistrations as $eventRegistration)
            <tr>
                <th scope="row">{{$eventRegistration->name}}</th>
                <td>{{$eventRegistration->email}}</td>
                <td>{{$eventRegistration->phone}}</td>
                <td>{{$eventRegistration->status}}</td>
                <td>
                    <li><a href="/renginys/event-approve-registration/{{$eventRegistration->id}}">Patvirtinti</a></li>
                    <li><a href="/renginys/event-delete-registration/{{$eventRegistration->id}}">Pašalinti</a></li>
                </td>
                <td></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
