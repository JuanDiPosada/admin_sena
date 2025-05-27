@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">
            Lista de profesores
        </h1>

        <a href="{{route('teacher.create')}}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{$teacher['id']}}</td>
                        <td>{{$teacher['name']}}</td>
                        <td>{{$teacher['email']}}</td>
                        <td>
                            <a href="{{route('teacher.show',$teacher['id'])}}">detalles</a>
                        </td>
                        <td>
                            <a href="{{route('teacher.edit',$teacher['id'])}}">editar</a>
                        </td>
                        <td>
                            <form action="{{route('teacher.destroy', $teacher['id'])}}" method="POST">
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
