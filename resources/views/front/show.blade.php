@extends('layouts.index')
@section('products')
@foreach($products as $product)
<div class="col mb-5">
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="{{asset($product->img)}}" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$product->title}}</h5>
                <!-- Product price-->
                ${{$product->price}}
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('cart.add',['id' => $product->id])}}">Add to cart</a></div>
        </div>
    </div>
</div>
@endforeach

@endsection