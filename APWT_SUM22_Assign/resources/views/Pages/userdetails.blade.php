@extends('Layouts.dashboard')
@section('content')
<h2> Details</h2>
Name:  {{$users->name}}</br>
Email: {{$users->email}}</br>
Type: {{$users->type}}</br>

@endsection