@extends('admin.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contentHeader">
                <h2 class="contentHeaderTitle">DASHBOARD</h2>
                <div class="timeline">
                    <img src="assets/images/calender.png">
                    <span>{{$fromDate}} - {{$today}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-4">
        <div class="wedgeWrapper">
            <div class="wedgeContent">
                <div class="wedgeTitle">Revenue</div>
                <h2>${{$revenue}}</h2>
                <p>Revenue made in last 30 days</p>
            </div>
        </div>
       </div>
       <div class="col-4">
        <div class="wedgeWrapper">
            <div class="wedgeContent">
                <div class="wedgeTitle">Orders</div>
                <h2>{{$totalOrder}}</h2>
                <p>Number of orders placed till now</p>
            </div>
        </div>
       </div>
       <div class="col-4">
        <div class="wedgeWrapper">
            <div class="wedgeContent">
                <div class="wedgeTitle">Guests</div>
                <h2>{{$guests}}</h2>
                <p>Number of guests using the system</p>
            </div>
        </div>
       </div>
    </div>
</div>

<div class="container dashboardBtnRow">
    <div class="addOptions">
        <div class="addDashboardWrapper addWrapper">
            <a href="/addmenu">
                ADD MENU
            </a>
        </div>
        <div class="addDashboardWrapper addWrapper">
            <a href="/addreservation">
                ADD RESERVATION
            </a>
        </div>
        <div class="addDashboardWrapper addWrapper">
            <a href="/addadmin">
                ADD ADMIN
            </a>
        </div>
        <div class="addDashboardWrapper addWrapper">
            <a href="/addchef">
                ADD CHEF
            </a>
        </div>
    </div>
</div>

<div class="container topProducts">
    <div class="row">
        <div class="col-12">
            <h4 class="topProductsHeader">Top Selling Products</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap">Menu ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topSelling as $item)
                    <tr>
                        <td>#{{$item['item']->id}}</td>
                        <td class="colWithImg">
                            <div class="listItemImg">
                                <img src="/storage/{{$item['item']->image}}"/>
                            </div>
                            <div class="listItemTitle text-nowrap">{{$item['item']->title}}</div>
                        </td>
                        <td>${{$item['item']->price}}</td>
                        <td>{{$item['sold']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection