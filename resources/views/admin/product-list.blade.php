@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">images</th>
            <th scope="col">category_name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
        @endif
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><a href="show-images/{{$product->id}}">show images</a></td>
            <td>{{$product->category->name}}</td>
            <td>
                <button type="button" class="btn btn-danger"><a href="/delet-prod/{{$product->id}}">x</a></button>
                <button type="button" class="btn btn-info"><a href="/edit-product/{{$product->id}}">edit</a></button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div style="">
        {{ $products->links() }}
    </div>
    <button type="button" class="btn btn-outline-primary" style="float: right;"><a href="{{route('add-new-product')}}">Add New</a></button>
@stop
