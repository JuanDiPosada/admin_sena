@extends('layouts.app')

@section('content')

    <h3>detalles del curso</h3>

    <table class="table">
        <tr>
            <th>id</th>
            <th>numero del curso</th>
            <th>dia</th>
        </tr>
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_number }}</td>
            <td>{{ $course->day }}</td>
        </tr>
    </table>
@endsection
