@extends('layout.main')
@section('content')

<div class="container">

    <a href="" class="btn btn-success mb-3">Add</a>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Ten san pham</th>
            <th>Gia</th>
            <th>Action</th>
        </thead>

        @foreach ($product as $item)
            <tbody>
                <td>{{$item->id}}</td>
                <td>{{$item->tenSP}}</td>
                <td>{{$item->gia}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
    
@endsection
