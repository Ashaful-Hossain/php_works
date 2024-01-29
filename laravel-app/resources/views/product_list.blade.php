<table>
    <a href="{{route('pro_add')}}">Product Add</a>
    <h1>Product List</h1>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Details</th>
        <th>Action Action Action</th>
    </tr>
    @foreach ($list as $k=>$dd)
        
    <tr>
        <td>{{$k+1}}</td>
        <td>{{$dd->name}}</td>
        <td>{{$dd->price}}</td>
        <td>{{$dd->qty}}</td>
        <td>{{$dd->details}}</td>
        <td>
            <a href="{{route('pro_edit',$dd->id)}}">Edit</a>
            <form action="{{route('pro_delete',$dd->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>