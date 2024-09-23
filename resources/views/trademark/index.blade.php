@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Show TradeMark</div>

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
                </tr>
            </thead>
            <tbody>
                @foreach($tradeMarks as $mark)
                <tr>
                    <th scope="row">{{$mark->id}}</th>
                    <td>{{$mark->title}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection