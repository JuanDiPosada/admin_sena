@extends('layouts.app')

@section('content')
    <table class="table">
        <tr>
            <th>id</th>
            <th>numero</th>
            <th>marca</th>
            <th>imagen</th>
        </tr>
        <tr>
            <td>{{$computer['id']}}</td>
            <td>{{$computer['number']}}</td>
            <td>{{$computer['brand']}}</td>
            <td>
                <img src='{{asset('storage/media/'.$computer->urlImage)}}' width="200">
            </td>
        </tr>
    </table>
@endsection
