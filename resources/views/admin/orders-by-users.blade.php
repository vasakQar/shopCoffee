@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')

    <div class="row">
        <div class="col-sm-4" >

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">User_id</th>
                    <th scope="col">User_Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
{{--                @if(Session::has('delete-order'))--}}
{{--                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('delete-order') }}</p>--}}
{{--                @endif--}}
                <tbody>
{{--                @dd( !$users[0]->orders->isEmpty())--}}
                <h1>Users__List</h1>

                    @foreach($users as $user)
                        @if( !$user->orders->isEmpty() )
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <th scope="row">{{$user->name}}</th>
                                <th scope="row">
                                    <a class="danger-element" href="/orders-by-users/{{$user->id}}">Go To User Orders</a>
                                </th>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div style="float: right;">
                {{ $users->links() }}
            </div>
        </div>
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
                    <th scope="col">Action1</th>
                    <th scope="col">Action2</th>
                </tr>
                </thead>
                <tbody>
                <h1>User_Orders__List</h1>
                @if(isset($orders))
{{--                    @foreach($orders as $order)--}}
{{--                        <tr>--}}
{{--                            <th>{{$order->id}}</th>--}}
{{--                            <th scope="row">{{$order->product->name}}</th>--}}
{{--                            <th scope="row">{{$order->quantity}}</th>--}}
{{--                            <th scope="row">{{$order->country}}</th>--}}
{{--                            <th scope="row">{{$order->city}}</th>--}}
{{--                            <th scope="row">{{$order->address}}</th>--}}
{{--                            <th scope="row">{{$order->zip_code}}</th>--}}
{{--                            <th scope="row">{{$order->total_price}}</th>--}}
{{--                            <th scope="row">{{$order->created_at}}</th>--}}
{{--                            <th scope="row">--}}
{{--                                <a class="danger-element" href="/delete-orders/{{$order->id}}">X</a>--}}
{{--                            </th>--}}
{{--                            <th scope="row">--}}
{{--                                <a class="danger-element" href="/delete-orders/{{$order->id}}">Add to Standby Mode</a>--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    <div style="float: right;">
{{--                        {{ $orders->links() }}--}}
                    </div>
                @endif

                </tbody>
            </table>

        </div>

    </div>


@stop
