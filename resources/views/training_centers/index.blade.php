@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Centros de entrenamiento</h1>

        <a href="{{ route('training_center.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($trainingCenters as $triningCenter)
                    <tr>
                        <td>{{ $triningCenter['id'] }}</td>
                        <td>{{$triningCenter['name']}}</td>
                        <td>{{ $triningCenter['location'] }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

