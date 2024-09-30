@extends('layouts.app')

@section('content')
<div class="card">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-header">Create Products</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <label for="" class="form-label">Enter Products Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Enter Products decription</label>
                <input type="text" class="form-control" name="decription">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Enter Products price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Enter Products stock</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">upload Products image</label>
                <input type="file" class="form-control" name="img">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Select TradeMark</label>
                <select name="trade_mark_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Trade Marks</option>
                    @foreach($tradeMarks as $mark)
                    <option value="{{$mark->id}}">{{$mark->title}}</option>
                    @endforeach
                </select>
            </div>
            <button role="submit" class="btn btn-dark w-100 mt-3">Create</button>
        </form>
    </div>
</div>

@endsection