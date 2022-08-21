@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contentHeader">
                <h2 class="contentHeaderTitle">ADMIN PANEL</h2>
                <div class="addMenuWrapper addWrapper">
                    <a href="/addadmin">
                        ADD ADMIN
                    </a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="colWithImg">
                                <div class="listItemImg">
                                    <img src= {{ $user->profile_photo_path ? "/storage/".$user->profile_photo_path : "/assets/images/upload.png"}} />
                                </div>
                                <div class="listItemTitle">{{$user->name}}</div>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="actionCol">
                                    <a class="actionUpdate" href="/admin/update/{{$user->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="actionDel" href="/admin/delete/{{$user->id}}">
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