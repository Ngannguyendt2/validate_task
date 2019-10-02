@extends('home')
@section('title','Danh sach thanh pho')
@section('content')
    <div class="col-12"><h1>Danh Sach Thanh Pho</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <div class="col-12 ">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ten thanh pho</th>
                        <th scope="col">Dan so</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($cities)==0)
                        <tr>
                            <th colspan="4">Khong co du lieu</th>
                        </tr>
                    @else
                        @foreach($cities as $key=>$city)
                            <tr>
                                <th>{{++$key}}</th>
                                <th><a href="{{route('cities.customer',['id'=>$city->id])}}">{{$city->name}}</a></th>
                                <th>{{ count($city->customers) }}</th>
                                <th><a href="{{route('cities.edit',['id'=>$city->id])}}" class="btn btn-success">Edit</a>|
                                    <a href="{{route('cities.delete',['id'=>$city->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row justify-content-left">
            <div><a href="{{route('cities.create')}}" class="btn btn-primary">Add</a></div>
        </div>

    </div>

@endsection
