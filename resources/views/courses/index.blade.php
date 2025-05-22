@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de cursos</h1>
        <a href="{{route('course.create')}}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>course number</th>
                    <th>day</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)

                    <tr>
                        <td>{{$course['id']}}</td>
                        <td>{{$course['course_number']}}</td>
                        <td>{{$course['day']}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection
