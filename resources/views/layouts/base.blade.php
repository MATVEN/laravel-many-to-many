<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix('css\app.css')}}">
    <title>Document</title>
</head>
<body>
    
<header>  
    Hi 
    @auth
    <b>{{Auth::user() -> name}}</b> 
    @else
    GUEST
    @endauth
    <br>
    @auth
    <form action="{{route('logout')}}" method="post">
        @csrf
        @method('POST')
        <input type="submit" value="SIGN OUT">
    </form>
    @else
    <a href="{{route('login')}}">SIGN IN</a>
    @endauth
    <a href="{{route('employee.create')}}">ADD NEW EMPLOYEE</a> 
</header>

    @yield('content')
    
    <footer></footer>
</body>
</html>