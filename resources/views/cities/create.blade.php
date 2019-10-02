@extends('home')
@section('title','Them thanh pho')
@section('content')
    <div class="row justify-content-left"><h1>Danh Sach Thanh Pho</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <form method="post" action="{{route('cities.store')}}">
                @csrf
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="Enter name city" name="city">
                </div>

                <div class="col"><button type="submit" class="btn btn-primary">Add</button></div>
                <div class="col"><a href="{{route('cities.index')}}" class="btn btn-danger">Exit</a></div>
            </form>
        </div>
    </div>

@endsection
