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
    <div class="card-header">Update TradeMark</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{route('trademark.update',['id' => $tradeMark->id])}}" method="POST">
            @csrf
            <div class="mt-3">
                <label for="" class="form-label">Enter TradeMark Title</label>
                <input type="text" class="form-control" name="title" value="{{$tradeMark->title}}">
            </div>
            <button role="submit" class="btn btn-dark w-100 mt-3">Update</button>
        </form>
    </div>
</div>

@endsection