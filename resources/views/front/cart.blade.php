@extends('layouts.index')
@section('products')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
            <th scope="col">total_price</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <form action="{{route('cart.update' , ['id' => $item->hash])}}" method="GET">
                @csrf
                <td class="d-flex">
                    <input type="number" class="form-control w-25" value="{{$item->quantity}}" name="quantity">
                    <button class="btn btn-dark m-1">update</button>
                </td>
            </form>
            <td>${{$item->price}}</td>
            <td>${{$item->total_price}}</td>
            <td><a href="{{route('cart.delete',['id' => $item->hash])}}">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection