@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de aprendices</h1>

        <a href="{{ route('apprentice.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>e-mail</th>
                    <th>N° telefono</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice['id'] }}</td>
                        <td>{{$apprentice['name']}}</td>
                        <td>{{ $apprentice['email'] }}</td>
                        <td>{{$apprentice['cell_number']}}</td>

                        <td>
                            <a href="{{route('apprentice.show',$apprentice['id'])}}">detalles</a>
                        </td>
                        <td>
                            <a href="{{route('apprentice.edit',$apprentice['id'])}}">editar</a>
                        </td>
                        <td>
                            <form action="{{route('apprentice.destroy',$apprentice['id'])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
