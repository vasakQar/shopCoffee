<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="" style="text-align: center">
    <h1 style="color: #fff; padding: 50px 0 35px 0">Create Product</h1>
</div>
<div class="row">
    <div class="col-sm-4"></div>
<form class="pl-5" id="formedit" action="{{route('create-product')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" placeholder="add_prod_name" name="name">
        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>
    <div class="form-group">
        <label for="price">Product Price</label>
        <input type="text" class="form-control" placeholder="add_prod_price" name="price">
        <p class="text-danger">{{ $errors->first('price') }}</p>
    </div>
    <div class="form-group">
        <label for="image">Product Price</label>
        <input type="file" class="form-control" placeholder="add_prod_images" name="images[]" multiple/>
        <p class="text-danger">{{ $errors->first('images') }}</p>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Select Category</label>
        <select class="form-control " name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Example textarea</label>
        <textarea class="form-control"  type="text" name="description"></textarea>
        <p class="text-danger">{{ $errors->first('description') }}</p>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-outline-primary" style="float: right;"><a href="{{route('show-product')}}">Go Prod-list</a></button>
</form>
</div>
</body>
</html>
