@extends('home')
@section('title','Sua thanh pho')
@section('content')
    <div class="row justify-content-left"><h1>Sua Thanh Pho</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <form method="post" action="{{route('cities.update',['id'=>$city->id])}}">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="form-control" placeholder="Enter name city" name="city" value="{{$city->name}}">
                </div>

                <div class="col"><button type="submit" class="btn btn-primary">Edit</button></div>
                <div class="col"><a href="{{route('cities.index')}}" class="btn btn-danger">Exit</a></div>
            </form>
        </div>
    </div>

@endsection
