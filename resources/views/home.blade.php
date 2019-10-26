@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr><td>{{$product->name}}</td><td>{{$product->price}}</td><td>{{$product->description}}</td><td><a href = "{{route('product.edit',$product->id)}}" class = "btn btn-success">Edit</a></td>
                    <td>
                    <form action = "{{route('product.destroy',$product->id)}}" method= "post">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
