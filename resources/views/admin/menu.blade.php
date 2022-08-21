@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contentHeader">
                <h2 class="contentHeaderTitle">MENU</h2>
                <div class="addMenuWrapper addWrapper">
                    <a href="/addmenu">
                        ADD MENU
                    </a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $item)
                        <tr>
                            <td class="colWithImg">
                                <div class="listItemImg">
                                    <img src="/storage/{{$item->image}}"/>
                                </div>
                                <div class="listItemTitle">{{$item->title}}</div>
                            </td>
                            <td>{{$item->desc}}</td>
                            <td>${{$item->price}}</td>
                            <td>
                                <div class="actionCol">
                                    <a class="actionUpdate" href="/menu/update/{{$item->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="actionDel" href="/menu/delete/{{$item->id}}">
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