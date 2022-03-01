@extends('layout.master')

@section('title')
product
@endsection

@section('content')
<div>
    @if($products)
    <h3 class="text-center">Product Board:</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Cost Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Image</th>
                <th span="col-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->cost_price}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->img}}</td>
                <td><a class="btn btn-primary">Edit</a>
                    <a class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif
</div>
@endsection