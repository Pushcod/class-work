@extends('layout.master')

@section('content')
   <div class="container">
        @if($message = Session::get('success') )
            <div> class=
                {{$message}}</div>
        @endif
       <div class="row">
           <a href="{{ route('post.create') }}" class="btn btn-primary">{{ __('Новые записи')}}</a>
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
               @forelse($posts as $post)
                   <tr>
                       <th scope="row">{{$post->id}}</th>
                       <td>{{$post->title}}</td>
                       <td>{{$post->text}}</td>
                       <td><img width="150" height="150" src="/images/{{$post->image}}"></td>
                   </tr>
               @empty
                   {{ __('Данные не найдены') }}
               @endforelse


               </tbody>
           </table>

       </div>
   </div>

@endsection
