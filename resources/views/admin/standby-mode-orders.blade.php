@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')

    <div class="row">
        <div class="col-sm-8" >
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prod_Name</th>
                    <th scope="col">quantity</th>
                    <th scope="col">country</th>
                    <th scope="col">city</th>
                    <th scope="col">Address</th>
                    <th scope="col">zip_code</th>
                    <th scope="col">total_price</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                @if(Session::has('delete-order'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('delete-order') }}</p>
                @endif
                <tbody>
                <h1>Standby_Orders__List</h1>
                @foreach($standbies as $standby)
                    <tr>
                        <th>{{$standby->id}}</th>
                        <th scope="row">{{$standby->product->name}}</th>
                        <th scope="row">{{$standby->quantity}}</th>
                        <th scope="row">{{$standby->country}}</th>
                        <th scope="row">{{$standby->city}}</th>
                        <th scope="row">{{$standby->address}}</th>
                        <th scope="row">{{$standby->zip_code}}</th>
                        <th scope="row">{{$standby->total_price}}</th>
                        <th scope="row">{{$standby->created_at}}</th>
                        <th scope="row">
                            <a class="text-danger h3" href="/delete-order-from-standby/{{$standby->id}}">X</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                <button style="float: right;"><a href="{{route('orders')}}">Go All Orders</a></button>
                {{ $standbies->links() }}
            </div>
        </div>
    </div>


@stop

