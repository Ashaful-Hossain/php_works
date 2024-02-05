<a href="{{route('pro_list')}}">Product List</a><br>
<a href="{{route('pro_add')}}">Add New Product</a><br>
<form action="{{route('pro_update',$dt->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label><br>
    <input value="{{$dt->name}}" type="text" name="name"><br>
    <label for="price">Price</label><br>
    <input value="{{$dt->price}}" type="text" name="price"><br>
    <label for="qty">Qyantity</label><br>
    <input value="{{$dt->qty}}" type="text" name="qty"><br>
    <label for="details">Details</label><br>
    <input value="{{$dt->details}}" type="text" name="details"><br>
    <label for="">.</label><br>
    <input type="submit" value="Save"><br>
</form>