@extends('Layouts.main')
@section('content')
<h2>Welcome to Registration</h2>

<form action="{{Route('regSubmit')}}" method="Post">
{{@csrf_field()}}
Name: <input type="text" value="{{old('name')}}" name="name"> <br>
@error('name')
<span class ="text-danger">{{$message}}</span><br>
@enderror
Email: <input type="text" value="{{old('email')}}" name="email"> <br>
@error('email')
<span class ="text-danger">{{$message}}</span><br>
@enderror

Password: <input type="password"  name="password"> <br>
@error('password')
<span class ="text-danger">{{$message}}</span><br>
@enderror
Confirm Password: <input type="password"  name="con_password"> <br>
@error('con_password')
<span class ="text-danger">{{$message}}</span><br>
@enderror
Type :  <input type="radio" value="Admin" name="type"> Admin 
        <input type="radio" value="User" name="type"> User  </br>
@error('type')
<span class ="text-danger">{{$message}}</span><br>
@enderror

<input type="submit" value="Register">
</form>

@endsection