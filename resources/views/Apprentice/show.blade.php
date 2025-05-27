@extends('layouts.app')

@section('content')

    <h3>detalles del aprendiz</h3>
    <table class="table">
        <tr>
            <th>id</th>
            <td>nombre</td>
            <th>mail</th>
            <th>telfono</th>
        </tr>
        <tr>
            <td>{{ $apprentice->id }}</td>
            <td>{{ $apprentice->name }}</td>
            <td>{{ $apprentice->email }}</td>
            <td>{{ $apprentice->cell_number }}</td>
        </tr>
    </table>

@endsection
