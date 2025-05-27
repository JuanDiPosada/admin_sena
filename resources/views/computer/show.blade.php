@extends('layouts.app')

@section('content')
    <table class="table">
        <tr>
            <th>id</th>
            <th>numero</th>
            <th>marca</th>
        </tr>
        <tr>
            <td>{{$computer['id']}}</td>
            <td>{{$computer['number']}}</td>
            <td>{{$computer['brand']}}</td>
        </tr>
    </table>
@endsection
