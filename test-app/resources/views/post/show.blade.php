@extends('layout.master')

@section('content')

    <div class="container" style="width: 100%; display: flex; flex-direction: column; align-items: center; margin-bottom: 100px">
        <div class="card" style="width: 18rem; border: 2px solid deepskyblue; background-color: honeydew; ">
            <img src="/images/{{ $post->image }}" class="card-img-top" alt="...">
            <div class="card-body" style="background-color: #53c5ec;">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->text}}</p>
                <a href="{{ route('post.index') }}" class="btn btn-primary">Вернуться</a>
            </div>
        </div>
    </div>

@endsection
