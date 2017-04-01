@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Nr. products</th>
    </tr>
    @foreach ($categories as $category)
    <tr>    
        <td> {{ $category->id }} </td>
        <td> {{ $category->title }} </td>
        <td> {{ $category->products->count() }} </td>
    </tr>
    @endforeach

</table>

@endsection