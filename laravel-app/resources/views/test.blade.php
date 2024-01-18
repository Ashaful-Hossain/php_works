<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <h1>{{$data}}</h1>
    {{-- <form action="{{route->form}}" method="post">
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
    </form> --}}
    <table class="table-bordered">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Roll</th>
            <th>fee</th>
        </tr>
        
        <?php foreach($stdData as $k=>$d){
            ?>
            <tr>
        <td>{{$k+1}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->roll}}</td>
        <td>{{$d->fee}}</td>
    </tr>
        
    <?php } ?>
</table>