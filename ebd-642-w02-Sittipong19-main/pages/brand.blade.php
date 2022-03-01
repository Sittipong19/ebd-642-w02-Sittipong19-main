@extends('layout.master')

@section('title')
brand
@endsection

@section('content')
<div>
    @if($brands)
    <h3 class="text-center">Brand Board:</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name TH</th>
                <th scope="col">Name ENG</th>
                <th scope="col">Logo</th>
                <th scope="col">Url</th>
                <th span="col-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $b)
            <tr>
                <th scope="row">{{$b->id}}</th>
                <td>{{$b->nameen}}</td>
                <td>{{$b->nameth}}</td>
                <td>{{$b->log}}</td>
                <td>{{$b->url}}</td>
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