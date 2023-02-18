<?php
    $title = 'Create Product';
    ?>
@extends('layouts.main')


@section('main')
    <div class="container">
        @if ($errors && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form" method="post" action="/product/create">
            @csrf
            <div class="form-group">
                <input name="name" placeholder="name"/>
                <input name="price"  placeholder="price"/>


                <input type="checkbox" name="tags[]" value="1">
                <input type="checkbox" name="tags[]" value="1">
                <input type="checkbox" name="tags[]" value="1">
                <input type="checkbox" name="tags[]" value="1">
                <input type="checkbox" name="tags[]" value="1">


                <button class="btn btn-success" type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
