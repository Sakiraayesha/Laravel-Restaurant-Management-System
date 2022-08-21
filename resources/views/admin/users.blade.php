@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="contentTitle">GUESTS</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">#{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->usertype == "1" ? "Yes" : "No"}}</td>
                            <td>
                                <a class="actionDel" href="/users/delete/{{$user->id}}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection