@extends('layout.main')
@section('content')
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $errors)
                <li style="color:red">{{ $errors }}</li>
            @endforeach
        </ul>
    @endif

    @if (@isset($_SESSION['success']))
        <span style="color:green">{{ $_SESSION['success'] }}</span>
    @endif

    <div class="container mt-3">

        <form action="{{ route('student/edit-student/'.$student->id) }} " method="POST">

            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}">

            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $student->email }}">

            <label for="">Age</label>
            <input type="text" name="age" class="form-control" value="{{ $student->age }}">

            <input type="submit" name="submit" value="Update" class="btn btn-success mt-3">

    </div>

@endsection
