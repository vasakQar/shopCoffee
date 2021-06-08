@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')
    <div class="row">
        <div class="col-sm-5" >

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action1</th>
                    <th scope="col">Action2</th>
                </tr>
                </thead>
                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif
                <tbody>
                <h1>Categories List</h1>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <button type="button" class="btn btn-danger"><a href="/delet-category/{{$category->id}}">x</a></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info"><a href="/edit-product/{{$category->id}}">edit</a></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="float: right;">
                {{ $categories->links() }}
            </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <h1>Add New Category</h1>
            @if(Session::has('message1'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message1') }}</p>
            @endif
            <form method="POST" action="{{route('create.category')}}">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text"  class="form-control" placeholder="category name" name="name"><br>
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                    <button type="submit">Add New</button>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>



@stop
