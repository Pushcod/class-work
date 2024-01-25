@extends('layout.master')

@section('content')
   <div class="container">
       <div class="row">
           <a href="{{ route('category.create') }}" class="btn btn-primary">Все категории</a>
       </div>
       <div class="row">
           <table class="table">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">Название поста</th>
                   <th scope="col">Описание поста</th>
                   <th scope="col">Изображение</th>
                   <th scope="col">Действие</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <th scope="row"></th>
                   <td></td>
                   <td></td>
               </tr>
               </tbody>
           </table>
       </div>
   </div>

@endsection
