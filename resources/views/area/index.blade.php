@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Areas</h1>

        <a href="{{ route('area.index') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{$area['id'] }}</td>
                        <td>{{$area['name']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
