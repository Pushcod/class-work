@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название поста</label>
                <input type="text" name="title" value="{{ $article->title }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Содержание поста</label>
                <input type="text" name="text" value="{{ $article->text }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изображение поста</label>
                <input type="file" name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <img width="250" height="170" src="/images/{{ $article->image }}">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
