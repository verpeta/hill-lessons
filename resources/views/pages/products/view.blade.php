@extends('layouts.main')

<h2>View Product</h2>

@section('main')
<div class="container">
    <table>
        <tr>
            <td>
                name
            </td>
            <td>
                {{$product->name}}
            </td>
        </tr>
        <tr>
            <td>
                price
            </td>
            <td>
                {{$product->price}}
            </td>
        </tr>
    </table>
</div>
@endsection
