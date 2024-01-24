@extends('layout.master')

@section('content')
   <div class="container">
        @if($message = Session::get('success') )
            <div> class=
                {{$message}}</div>
        @endif
       <div class="row">
           <a href="{{ route('article.create') }}" class="btn btn-primary">{{ __('Новые записи')}}</a>
       </div>
       <div class="row">
           <table class="table">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">Название поста</th>
                   <th scope="col">Описание поста</th>
                   <th scope="col">Изображения</th>
                   <th scope="col">Действия</th>
               </tr>
               </thead>
               <tbody>
               @forelse($articles as $article)
                   <tr>
                       <th scope="row">{{$article->id}}</th>
                       <td>{{$article->title}}</td>
                       <td>{{$article->text}}</td>
                       <td><img width="150" height="150" src="/images/{{$article->image}}"></td>
                       <td>
                           <a href="{{route('article.edit', $article->id)}}" class="btn btn-success">{{ __('Редактировать') }}</a>
                           <a href="{{route('article.show', $article->id)}}" class="btn btn-warning">Подробнее</a>

                           <form method="ARTICLE" action="{{route('article.delete', $article->id)}}">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger">Удалить</button>
                           </form>
                       </td>
                   </tr>
               @empty
                   {{ __('Данные не найдены') }}
               @endforelse


               </tbody>
           </table>

       </div>
   </div>

@endsection
