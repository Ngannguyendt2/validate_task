@extends('home')
@section('title','Sua Thong Tin Nguoi Dan')
@section('content')
    <div class="row justify-content-left"><h1>Sua Thong Tin Nguoi Dan</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <form method="post" action="{{route('customers.update',['id'=>$customer->id])}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter name customer" name="name"
                           value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email"
                           value="{{$customer->email}}">
                </div>
                <div class="form-group">
                    <label>City-code</label>
                    <select class="form-control" name="city_id">
                        @foreach($cities as $city)

                            <option @if($customer->city_id==$city->id)  selected
                                    @endif value="{{$city->id}} ">{{$city->name}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                <div class="col"><a href="{{route('customers.index')}}" class="btn btn-danger">Exit</a></div>
            </form>
        </div>
    </div>

@endsection

