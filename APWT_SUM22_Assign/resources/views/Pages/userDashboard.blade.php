@extends('Layouts.dashboard')
@section('content')
<h2>Welcome Admin Dashboard page</h2>
<table border= "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        
    </tr>
    @foreach($users as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td><a href="{{route('user.details',['id'=>$s->id,'name'=>$s->name,'email'=>$s->email])}}">{{$s->name}}</a></td>
        <td>{{$s->email}}</td>
        
    </tr>
    @endforeach
</table>


@endsection