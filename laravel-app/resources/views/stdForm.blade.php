<form action="{{route('std.store')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <label for="roll">Roll</label>
    <input type="text" name="fee"><br>
    <label for="fee">Fee</label>
    <input type="text" name="roll"><br>
    <label for="fee">Status</label>
    <select type="text" name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select><br>
    <label for="">..  ..  .</label>
    <input type="submit" value="Save">
</form>