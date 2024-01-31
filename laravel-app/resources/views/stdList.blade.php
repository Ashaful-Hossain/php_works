@extends('layout')
@section('footer')
    This is a Footer Section
@endsection
@section('header')   
Student List
<a href="{{route('std.create')}}">Add New</a><br>
@endsection
@section('content')
<table>
    @section('msg')
    {{session()->get('msg')}}
    @endsection
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Fee</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $k=>$dd)
        
    <tr>
        <td>{{$k+1}}</td>
        <td>{{$dd->name}}</td>
        <td>{{$dd->roll}}</td>
        <td>{{$dd->fee}}</td>
        <td>{{$dd->status}}</td>
        <td>
            <a href="{{route('std.edit',$dd->id)}}">Edit</a>
            <form action="{{route('std.destroy',$dd->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection