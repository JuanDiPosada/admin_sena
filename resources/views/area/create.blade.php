@extends('layouts.app')

@section('content')

<form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>formulario creacion de areas:</h3>
        <label for="area">area</label>
        <input type="text" name="name" id="area" required class="form-control "> <br>
        <input type="submit" class="mt-1">
    </form>

@endsection
