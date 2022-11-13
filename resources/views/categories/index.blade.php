@extends('base')

@section('content')

<h2 class="mb-0 mt-3">Category</h2>
<hr class="mt-0">
<table class="table table-striped table-sm">
    <thead class="table-info">
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $c)

        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->category}}</td>
            <td>{{$c->description}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop