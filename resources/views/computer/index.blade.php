@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Computadoras</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>numero</th>
                    <th>marca</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer['id'] }}</td>
                        <td>{{$computer['number']}}</td>
                        <td>{{ $computer['brand'] }}</td>
                        <td>
                            <a href="{{route('computer.show',$computer['id'])}}">detalles</a>
                        </td>
                        <td>
                            <a href="{{route('computer.edit',$computer['id'])}}">editar</a>
                        </td>
                        <td>
                            <form action="{{route('computer.destroy',$computer->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">eliminar</button>
                            </form>
                        </td>
                    </tr
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
