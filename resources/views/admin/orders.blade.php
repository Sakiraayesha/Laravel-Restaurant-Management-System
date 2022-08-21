@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="contentTitle">ORDERS</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-nowrap" scope="col">Order ID</th>
                        <th class="text-nowrap" scope="col">Guest Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Time</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>#{{$order->id}}</td>
                            <td class="text-nowrap">{{$order->user->name}}</td>
                            <td>{{$order->user->email}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>${{$order->getPrevOrdersTotalPrice()}}</td>
                            <td>
                                @if($order->status == true)
                                    <span class="badge badge-success">Delivered</span>                                    
                                @else
                                    <span class="badge badge-warning">Pending</span>     
                                @endif  
                            </td>
                            <td>
                                <div class="actionCol">
                                    @if($order->status == false)
                                        <a class="actionUpdate" href="/orders/update/{{$order->id}}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>                                    
                                    @endif 
                                    <a class="actionDel" href="/orders/delete/{{$order->id}}">
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