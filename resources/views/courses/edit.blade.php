@extends('layouts.app')

@section('content')

<h3>crear un curso</h3>

<form action="{{route('course.update',$course)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="course_number">ingrese el numero del curso:</label>
    <input type="text" id="course_number" name="course_number" class="d-block mt-3" value="{{old('course_number',$course->course_number)}}">
    <label for="day">ingrese el dia:</label>
    <input type="number" id="day" name="day" class="d-block mt-3" value="{{old('day',$course->day)}}">

    <input type="submit" class="mt-2">
</form>


@endsection
