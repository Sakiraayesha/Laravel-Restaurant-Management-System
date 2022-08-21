@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contentHeader">
                <h2 class="contentHeaderTitle">CHEFS</h2>
                <div class="addMenuWrapper addWrapper">
                    <a href="/addchef">
                        ADD CHEF
                    </a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chefs as $chef)
                        <tr>
                            <td class="colWithImg">
                                <div class="listItemImg">
                                    <img src="/storage/{{$chef->image}}"/>
                                </div>
                                <div class="listItemTitle text-nowrap">{{$chef->name}}</div>
                            </td>
                            <td>{{$chef->email}}</td>
                            <td>{{$chef->rank}}</td>
                            <td>{{$chef->facebook}}</td>
                            <td>{{$chef->twitter}}</td>
                            <td>{{$chef->instagram}}</td>
                            <td>
                                <div class="actionCol">
                                    <a class="actionUpdate" href="/chefs/update/{{$chef->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="actionDel" href="/chefs/delete/{{$chef->id}}">
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