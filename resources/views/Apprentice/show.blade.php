@extends('layouts.app')

@section('content')

    <h3>detalles del aprendiz</h3>
    <table class="table">
        <tr>
            <th>id</th>
            <td>nombre</td>
            <th>mail</th>
            <th>telfono</th>
            <th>curso</th>
            <th>computador</th>
        </tr>
        <tr>
            <td>{{ $apprentice->id }}</td>
            <td>{{ $apprentice->name }}</td>
            <td>{{ $apprentice->email }}</td>
            <td>{{ $apprentice->cell_number }}</td>
            <td>{{ $apprentice->course_id}}</td>
            <td>{{ $apprentice->computer_id }}</td>
        </tr>
    </table>

@endsection
