@extends('layouts.app')

@section('content')

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Stock </th>
        <th>Category </th>
    </tr>

@foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->category_id }}</td>
    </tr>
@endforeach
</table>

@endsection