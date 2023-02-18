@extends('layouts.main')


@section('sidebar')

    <br>
    <br>
    Child Sidebar
    @parent
    <br>
@endsection


@section('main')
    <h3>Create Post</h3>
   <form action="/processForm" method="post">

       @csrf

       <label>
           <input name="name" type="text">
       </label>
       <label>
           <input name="email" type="email">
       </label>

       <button type="submit">Create!!!</button>
   </form>
@endsection
