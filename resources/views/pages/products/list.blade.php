@extends('layouts.main')

<h2 class="title">View Product</h2>

@section('main')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <a class="btn btn-success" href="/product/create">Create new Product</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    name
                </th>
                <th>
                    price
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        {{$product->id}}
                    </td>
                    <td>
                        {{$product->name}}
                    </td>
                    <td>
                        {{$product->price}}
                    </td>
                    <td>
                        <a class="btn btn-info" href="/product/{{$product->id}}/view">View</a>
                        <a class="btn btn-primary" href="/product/{{$product->id}}/edit">Edit</a>
                        <form style="display: inline" method="post" action="/product/{{$product->id}}/delete">
                            @csrf
                            <input type="hidden" value="{{$product->id}}" name="id">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
