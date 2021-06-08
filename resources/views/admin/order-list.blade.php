@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')

<div class="row">
    <div class="col-sm-10" >
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
                <th scope="col">status</th>
                <th scope="col">Action1</th>
                <th scope="col">Action2</th>
            </tr>
            </thead>
            @if(Session::has('delete-order'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('delete-order') }}</p>
            @endif
            <tbody>
            <h1>Orders__List</h1>
            @foreach($orders as $order)
                <tr>
                    <th>{{$order->id}}</th>
                    <th scope="row">{{$order->product->name}}</th>
                    <th scope="row">{{$order->quantity}}</th>
                    <th scope="row">{{$order->country}}</th>
                    <th scope="row">{{$order->city}}</th>
                    <th scope="row">{{$order->address}}</th>
                    <th scope="row">{{$order->zip_code}}</th>
                    <th scope="row">{{$order->total_price}}</th>
                    <th scope="row">{{$order->created_at->format('d M, H:i')}}</th>
                    <th>
                        <select id="{{$order->id}}" name="status">
                            <option value="" class="active">{{$order->status}}</option>
                            <option value="new">new</option>
                            <option value="sended">sended</option>
                            <option value="finished">finished</option>
                        </select>
                    </th>
                    <th scope="row">
                        <a class="text-danger h3" href="/delete-orders/{{$order->id}}">X</a>
                    </th>
                    <th scope="row">
                        <a class="danger-element" href="/add-orders-standby-mode/{{$order->id}}">Add to Standby Mode</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <button style="float: right;"><a href="{{route('show.orders.standby.mode')}}">Go Standby Orders</a></button>
            {{ $orders->links() }}
        </div>
    </div>
</div>

<script>
    $('select').on('change',function() {
        let status = $(this).val();
        let id = $(this).attr('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/chang-order-status",
            method:"POST",
            // dataType: "json",
            data:{
                status:status,
                id:id,
            },
            success   : function(data) {
                // if (data.success){
                //     window.location.href = '/index'
                // }
            },
            error : function(response){
                $('#addressError').text(response.responseJSON.errors.address);
                $('#zipcodError').text(response.responseJSON.errors.zip_cod);
            }
        });
    });
</script>
@stop
