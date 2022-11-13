@extends('base')

@section('content')

<h2 class="mb-0 mt-3">Units</h2>
<hr class="mt-0">
<table class="table table-striped table-sm">
    <thead class="table-info">
        <tr>
            <th>#</th>
            <th>Unit Type</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($units as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->unit_type}}</td>
            <td>{{$u->description}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop