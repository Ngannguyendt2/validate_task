@extends('home')
@section('title','So nguoi dan trong thanh pho')
@section('content')
    <div class="col-12"><h1>So nguoi dan trong thanh pho {{$city->name}}</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <div class="col-12 ">
                <ol class="list-group">
                    @foreach($customers as $customer)
                        @if($customer->city_id==$city->id)
                            <li class="list-group-item"> {{$customer->name}}</li>
                        @endif
                    @endforeach
                </ol>
                <a href="{{route('cities.index')}}" class="btn btn-success">Home</a>
            </div>
        </div>
    </div>

@endsection
