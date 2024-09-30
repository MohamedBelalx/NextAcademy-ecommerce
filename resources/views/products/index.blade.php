@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Show Products</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">stock</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->price}} LE</td>
                    <td><img src="{{asset($product->img)}}" alt="" width="50"></td>
                    <td><a href="{{route('products.destroy',['id' => $product->id])}}">Delete</a></td>
                    <td><a href="{{route('products.edit',['id' => $product->id])}}">Edit</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection