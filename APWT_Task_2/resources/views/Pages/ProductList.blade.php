@extends('layouts.main')
@section('content')
<h1> Product List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
          
            <th>Price</th>
        </tr>
        @foreach($products as $s)
            <tr>
                <td><a href="{{route('ProductDetails',['id'=>$s->id,'name'=>$s->name,'price'=>$s->price])}}">{{$s->name}}</a></td>  
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection