@extends('Layout.main')
@section('content')
   
    <table border="1">
        <tr>
        
            <th>Id</th>
            <th>Name</th>
            
        </tr>
        @foreach($products as $s)
            <tr>
               
                <td>{{$s->id}}</td>
                <td><a href="{{route('Products.teams',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection