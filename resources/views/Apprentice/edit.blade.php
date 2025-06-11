@extends('layouts.app')


@section('content')

<h3>registrar un aprendiz</h3>
<form action="{{route('apprentice.update',$apprentice)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name" class="mt-2">Nombre del aprendiz:</label>
    <input type="text" id="name" name="name" value="{{old('name',$apprentice->name)}}"><br>
    <label for="email" class="mt-3">Email del aprendiz:</label>
    <input type="email" name="email" id="email" value="{{old('name',$apprentice->email)}}"><br>
    <label for="cell_number" class="mt-3">Numero celular del aprendiz:</label>
    <input type="number" name="cell_number" id="cell_number" value="{{old('cell_number',$apprentice->cell_number)}}"><br>
    <label for="">Curso al que pertenece</label>
    <select name="course_id" id="">
        @foreach ($courses as $course)
            <option value="{{$course->id}}">{{$course->course_number}}</option>
        @endforeach

    </select><br>
    
    <label for="">computador:</label>
    <select name="computer_id" id="">
        @foreach ($computers as $computer)
            <option value="{{$computer->id}}">{{$computer->number}}---{{$computer->brand}}</option>
        @endforeach
    </select><br>
    <input type="submit" value="registrar aprendiz" class="m-2">
</form>

@endsection
