@extends('layouts.base')

@section('content')
    

<form action="{{route('employee.update', $employee -> id)}}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{ $employee -> name }}">
    <br>
    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{ $employee -> lastname }}>
    <br>
    <select multiple name="task[]">

        @foreach ($tasks as $task)
            
    <option value="{{$task -> id}}" 
        
        @if ($employee -> tasks() -> find($task -> id))
        selected
        @endif>  

        {{$task -> title}} </option>
        @endforeach

    </select>
    <br>
    <input type="submit" value="CREATE">

</form>
@endsection
