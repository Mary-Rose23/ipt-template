@extends('base')

@section('content')

    <h2 class="mb-0 mt-3">Merchandise</h2>

    <hr class="mt-0">
    
    <table class="table table-striped table-sm text-center">
    <thead class="table-info">
        <tr>
            <th>#</th>
            <th>Brand Name</th>
            <th>Product Name</th>
            <th>Retail Price</th>
            <th>Wholesale Price</th>
            <th>Wholesale Qty.</th>
            <th>Quantity Stock</th>
            <th>Unit ID</th>
            <th>Category ID</th>
        </tr>
    </thead>

    <tbody>
        @foreach($merchandises as $m)

        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->brand_name}}</td>
            <td>{{$m->product_name}}</td>
            <td>{{$m->retail_price}}</td>
            <td>{{$m->wholesale_price}}</td>
            <td>{{$m->wholesale_qty}}</td>
            <td>{{$m->qty_stock}}</td>
            <td>{{$m->unit_id}}</td>
            <td>{{$m->category_id}}</td>
        </tr>

        @endforeach
    </tbody>
    </table>

@stop