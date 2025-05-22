@extends('layouts.app')

@section('content')

<h3>crear un curso</h3>

<form action="{{route('course.store')}}" method="POST">
    @csrf
    <label for="course_number">ingrese el numero del curso:</label>
    <input type="text" id="course_number" name="course_number" class="d-block mt-3">
    <label for="day">ingrese el dia:</label>
    <input type="number" id="day" name="day" class="d-block mt-3">

    <input type="submit" class="mt-2">
</form>


@endsection
