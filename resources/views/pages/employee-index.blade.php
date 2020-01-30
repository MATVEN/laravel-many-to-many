@extends('layouts.base')

@section('content')

<h1></h1>

    @foreach ($employees as $employee)

    <ul><h3>EMPLOYEE:</h3>

        <li>NAME: {{$employee -> name}}</li>
        <li>LASTNAME: {{$employee -> lastname}}</li>
        <br>

        @foreach ($employees -> tasks as $task)

    <li>
        <a href="{{route('employee.remove.task', $employee -> id, $task -> id)}}">X</a>
        {{$task -> title}}: {{$task -> description}}
    </li>
    <br>

    @auth

        <a href="{{route('employee.edit', $employee -> id)}}">EDIT</a>
        <a href="{{route('employee.delete', $employee -> id)}}">DELETE</a>

    @endauth

        @endforeach
    </ul>
    @endforeach

@endsection