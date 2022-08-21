@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contentHeader">
                <h2 class="contentHeaderTitle">RESERVATIONS</h2>
                <div class="addMenuWrapper addWrapper">
                    <a href="/addreservation">
                        ADD RESERVATION
                    </a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td class="text-nowrap">{{$reservation->name}}</td>
                            <td class="text-nowrap">{{$reservation->phone}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->time}}</td>
                            <td>{{$reservation->guests}}</td>
                            <td>{{$reservation->message}}</td>
                            <td>
                                <div class="actionCol">
                                    <a class="actionUpdate" href="/reservations/update/{{$reservation->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="actionDel" href="/reservations/delete/{{$reservation->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection