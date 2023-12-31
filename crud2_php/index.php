<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <a href="add_pro.php" class="btn btn-success">Insert Product</a>
<table class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
<?php
    $db = new mysqli('localhost','root','','test');
    $query = "SELECT * FROM products";
    $data =$db->query($query);

    $i=0;
    while ($d = $data->fetch_object()) { ?>

        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $d->name ?></td>
            <td><?php echo $d->qty ?></td>
            <td><?php echo $d->price ?></td>
            <td>
                <a href="edit_pro.php?id=<?php echo $d->id ?>" class="btn btn-primary">Edit</a>
                <a href="delete_pro.php?id=<?php echo $d->id ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>

    </table>
    </div>
    