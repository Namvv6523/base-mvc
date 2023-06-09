@extends('layout.main')
@section('content')
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $errors)
                <li style="color:red">{{$errors}}</li>
            @endforeach
        </ul>
    @endif

    @if (@isset($_SESSION['success']))    
                <span style="color:green">{{$_SESSION['success']}}</span>
    @endif
    
    <div class="container mt-3">
        <form action="{{BASE_URL}}student/create" method="post">

            <label for="">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="">Email</label>
            <input type="text" name="email" class="form-control">

            <label for="">Age</label>
            <input type="text" name="age" class="form-control">

            <input type="submit" name="submit" value="add" class="btn btn-success mt-3">
        </form>
    </div>

@endsection
