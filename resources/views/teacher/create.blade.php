@extends('layouts.app')

@section('content')

<h3>Agregar un profesor</h3>

<form action="{{route('teacher.store')}}" method="POST">
    @csrf
    <label for="name">ingrese el nombre del profesor:</label>
    <input type="text" id="name" name="name" class="d-block mt-2 form-control ">
    <label for="email">ingrese el e-gmail</label>
    <input type="email" name="email" id="email" class="d-block -mt-2 ">
    <div class="mt-3">
        <select name="area_id" id="">
        @foreach ($areas as $area)
        <option value="{{$area->id}}">{{$area->name}}</option>
        @endforeach
    </select>
    </div>
    <div class="mt-3">
        <select name="trainingCenter_id" id="">
        @foreach ($trainingCenters as $t)
        <option value="{{$t->id}}">{{$t->name}}-{{$t->location}}</option>
        @endforeach
    </select>
    </div>
    <input type="submit" value="enviar" class="mt-3">


</form>

@endsection
