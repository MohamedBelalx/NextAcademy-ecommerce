@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create TradeMark</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="">
            <div class="mt-3">
                <label for="" class="form-label">Enter TradeMark Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <button role="submit" class="btn btn-dark w-100 mt-3">Create</button>
        </form>
    </div>
</div>

@endsection