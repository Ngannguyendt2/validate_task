@extends('home')
@section('title','Danh sach dan cu')
@section('content')
    <div class="col-12"><h1>Danh Sach dan cu</h1></div>
    <div class="col-12">
        <div class="row justify-content-left">
            <div class="col-12 ">
                <div class="col-7">
                    <form method="get" action="{{route('customers.search')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Search" name="keyword">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($customers)==0)
                            <tr>
                                <th colspan="4">Khong co du lieu</th>
                            </tr>
                        @else
                            @foreach($customers as $key=>$customer)
                                <tr>
                                    <th>{{++$key}}</th>
                                    <th><a href="">{{$customer->name}}</a></th>
                                    <th>{{$customer->email}}</th>
                                    <th><img src="{{asset('storage/' . $customer->image)}}" alt="" style="max-height: 100px">
                                    </th>
                                    <th>{{$customer->city->name}}</th>
                                    <th><a href="{{route('customers.edit',['id'=>$customer->id])}}"
                                           class="btn btn-success">Edit</a>|
                                        <a href="{{route('customers.delete',['id'=>$customer->id])}}"
                                           class="btn btn-danger"
                                           onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <div class="row justify-content-left">
            <div><a href="{{route('customers.create')}}" class="btn btn-primary">Add</a></div>
        </div>

    </div>
    {{$customers->appends(request()->query())}}
@endsection
