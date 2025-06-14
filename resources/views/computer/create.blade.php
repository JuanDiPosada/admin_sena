@extends('layouts.app')
@section('content')
<h3>registrar un PC</h3>
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="number">ingrese el numero del pc:</label>
        <input type="number" id="number" name="number" required><br><br>
        <label for="brand">ingrese la marca del pc:</label>
        <input type="text" id="brand" name="brand" required><br>
        <div class="mt-3">
            <label for="">agrege una imagen:</label>
            <input type="file"name="urlImage">
        </div>
        <input type="submit" >
    </form>
@endsection
