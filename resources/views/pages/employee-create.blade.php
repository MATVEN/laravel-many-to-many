@extends('layouts.base')

@section('content')
    

<form action="{{route('employee.store')}}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name">
    <br>
    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname">
    <br>
    <select name="task[]" multiple>

        @foreach ($tasks as $task)
            
    <option value="{{$task -> id}}"> {{$task -> title}} </option>
        @endforeach

    </select>
    <br>
    <input type="submit" value="CREATE">

</form>
@endsection
