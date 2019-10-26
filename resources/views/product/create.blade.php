@extends('layouts.app')
@section('content')
    <form action = "{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class = "container">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name = "name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
        <div class = "form-group mt-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control-file border">
        </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="5" id="description"></textarea>
            </div>
        <div class = "form-group">
            <button type = "submit" class = "btn btn-success">Submit</button>
        </div>
        </div>
    </form>
@endsection