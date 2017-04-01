@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
    @foreach ($categories as $category)
    <tr>    
        <td> {{ $category->id }} </td>
        <td> {{ $category->title }} </td>
    </tr>
    @endforeach

</table>

@endsection