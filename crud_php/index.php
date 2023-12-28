<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <table class="table table-bordered">
        <tr>
        <a href="insert.php" class="btn btn-primary">New Add</a>

    </tr>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Fee</th>
        <th>Action</th>
    </tr>
        <?php
        $con = new mysqli('localhost','root','','test');
        $data=$con->query('SELECT * FROM student');
        $i=0;
        while ($d = $data->fetch_object()){ ?>

                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $d->name ?></td>
                    <td><?php echo $d->roll ?></td>
                    <td><?php echo $d->fee ?></td>
                    <td>
                        <a href="edit_std.php?id=<?php echo $d->id ?>" class="btn btn-success">Edit</a>
                        <a href="delete_std.php?id=<?php echo $d->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure? To Delete this data!')">Delete</a>
                    </td>
                </tr>


        <?php }?>
    </table></div>
