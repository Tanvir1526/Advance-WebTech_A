@extends('Layouts.main')
@section('content')
<h2>Welcome to login</h2>

<form action="{{Route('logSubmit')}}" method="Post">
{{@csrf_field()}}
Email: <input type="text" value="{{old('email')}}" name="email"> <br>
@error('email')
<span class ="text-danger">{{$message}}</span><br>
@enderror

Password: <input type="password"  name="password"> <br>
@error('password')
<span class ="text-danger">{{$message}}</span><br>
@enderror

<input type="submit" value="Login">
</form>

@endsection