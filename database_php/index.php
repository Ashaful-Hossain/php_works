<pre>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<table class="table table-bordered">
    <!-- <tr>
        <td class="col-span-4"><h1>Data From Database</h1></td>
    </tr> -->
<tr>
    <th>SL</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Fee</th>
    <th>Action</th>
</tr>
<?php
    $db = new mysqli('localhost','root','','test');
    // $db->connect('localhost','root','','test');
    // $db->select_db("test");
    $dd = $db->query('SELECT * FROM student');
    // echo $dd->num_rows;exit;
    // print_r($dd->fetch_all());exit;
    // $data=$dd->fetch_all(MYSQLI_ASSOC);

    // print_r($dd);
    // fetch_row() = For Numeric Array;
    // fetch_assoc() = For Associative Array;
    // fetch_array(MYSQLI_ASSOC) = For Associative Array;
    // fetch_array(NUM) = For Numeric Array;
    // fetch_array() = For Numeric+Associative Array (both);
    
    
    $i=0;
    // while ($d=$data->fetch_row()) 
    // while ($d=$data->fetch_assoc()) 
    // while ($d=$data->fetch_array(MYSQLI_ASSOC))
    // while ($d=$data->fetch_array())
//     <tr>
//     <td><?php echo ++$i      ></td>
//     <td><?php echo $d->name      ></td>
//     <td><?php echo $d->roll      ></td>
//     <td><?php echo $d->fee      ></td>
// </tr>
    // foreach  ($d as $data) 
     while ($d=$dd->fetch_object()) 
    { ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $d->name ?></td>
            <td><?php echo $d->roll ?></td>
            <td><?php echo $d->fee ?></td>
            <td><a href="delete_std.php?id=<?php echo $d->id ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>