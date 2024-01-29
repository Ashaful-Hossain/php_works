<a href="{{route('pro_list')}}">Product List</a><br>
<form action="{{route('pro_save')}}" method="post">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name"><br>
    <label for="price">Price</label><br>
    <input type="text" name="price"><br>
    <label for="qty">Qyantity</label><br>
    <input type="text" name="qty"><br>
    <label for="details">Details</label><br>
    <input type="text" name="details"><br>
    <label for="">.</label><br>
    <input type="submit" value="Save"><br>
</form>