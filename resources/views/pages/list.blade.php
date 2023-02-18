@extends('layouts.main')


@section('sidebar')

    <br>
    <br>
    Child Sidebar
    @parent
    <br>
@endsection


@section('main')
    <h3>Users List</h3>

    @foreach($users)



    @endforeach

@endsection
