@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('info'))
            <div class="alert alert-info">{{session('info')}}</div>
        @endif

        {{ $articles->links('pagination::bootstrap-4') }}
        @foreach ($articles as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{$item->created_at->diffForHumans()}}
                    </div>
                    <p class="card-text">{{$item->body}}</p>
                    <div>
                        <a href="{{url("articles/detail/$item->id")}}" class="btn btn-primary">Detail</a>
                        <a href="{{url("articles/edit/$item->id")}}" class="btn btn-info">Edit</a>
                        <a href="{{url("articles/delete/$item->id")}}" class="btn btn-warning">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
