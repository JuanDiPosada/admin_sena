@extends('layouts.app')

@section('content')
    <h3>actulizar datos de la computadora</h3>
    <form action="{{route('computer.update',$computer)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="number">ingrese el numero del pc:</label>
        <input type="number" id="number" name="number" value="{{old('number',$computer->number)}}"><br><br>
        <label for="brand">ingrese la marca del pc:</label>
        <input type="text" id="brand" name="brand" value="{{old('brand',$computer['brand'])}}"><br>
        <input type="submit" >
    </form>
@endsection
