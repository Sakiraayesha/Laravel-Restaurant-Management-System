@extends('admin.home')

@section('content')
<div class="container">
    <form action={{empty($reservation) ? "/makereservation" : "/reservations/update/$reservation->id"}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10 offset-1 formWrapper">
                <div class="row">
                    <h1 class="contentTitle">
                        {{empty($reservation) ? "ADD RESERVATION" : "EDIT RESERVATION"}}
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-5 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label pl-0 inputLabel">Name</label>
                            <input id="name" name="name" type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ !empty($reservation) ? $reservation->name : ""}}"
                            placeholder="Guest Name*" required/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label pl-0 inputLabel">Phone</label>
                            <input id="phone" name="phone" type="text" 
                            class="form-control @error('phone') is-invalid @enderror" 
                            value="{{ !empty($reservation) ? $reservation->phone : ""}}"
                            placeholder="Phone Number*" required/>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label pl-0 inputLabel">Email</label>
                            <input id="email" name="email" type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ !empty($reservation) ? $reservation->email : ""}}"
                            placeholder="Email Address"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                    </div>
                    <div class="col-md-5 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="guests" class="col-md-4 col-form-label pl-0 inputLabel text-nowrap">No. Of Guests</label>        
                            <select value="{{ !empty($reservation) ? $reservation->guests : "guestNumbers"}}" name="guests" id="guests" 
                            class="form-control @error('guests') is-invalid @enderror" required>
                                <option value="guestNumbers" selected disabled>No. Of Guests*</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    @if(isset($reservation) && $reservation->guests == $i)
                                        <option value="{{$i}}" id="{{$i}}" selected>{{$i}}</option>
                                    @else
                                        <option value="{{$i}}" id="{{$i}}">{{$i}}</option>
                                    @endif
                                @endfor
                            </select>
                            @error('guests')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label pl-0 inputLabel">Date</label>        
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="dd/mm/yyyy*"  value="{{!empty($reservation) ? $reservation->date : ""}}" required>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="time" class="col-md-4 col-form-label pl-0 inputLabel">Time</label>        
                            <select value="{{ !empty($reservation) ? $reservation->time : "time"}}" name="time" id="time" 
                            class="form-control @error('time') is-invalid @enderror" required>
                                <option value="time" selected disabled>Time*</option>
                                <option value="Breakfast" id="Breakfast" @if (!empty($reservation) && $reservation->time == "Breakfast") {{"selected"}} @endif>Breakfast</option>
                                <option value="Brunch" id="Brunch" @if (!empty($reservation) && $reservation->time == "Brunch") {{"selected"}} @endif>Brunch</option>
                                <option value="Lunch" id="Lunch" @if (!empty($reservation) && $reservation->time == "Lunch") {{"selected"}} @endif>Lunch</option>
                                <option value="Tea" id="Tea"  @if (!empty($reservation) && $reservation->time == "Tea") {{"selected"}} @endif>Tea</option>
                                <option value="Dinner" id="Dinner" @if (!empty($reservation) && $reservation->time == "Dinner") {{"selected"}} @endif>Dinner</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label pl-0 inputLabel">Message</label>  
                            <textarea name="message" rows="3" id="message" placeholder="Message"
                            class="form-control @error('time') is-invalid @enderror">{{ !empty($reservation) ? $reservation->message : ""}}</textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <button class="btn saveButton">
                        {{empty($reservation) ? "SAVE" : "UPDATE"}}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection