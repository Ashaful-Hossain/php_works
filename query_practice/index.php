<?php
$db=new mysqli('localhost','root','','test');
$data=$db->query('SELECT category.category_name,products.name,products.price FROM `products` JOIN category ON category.id=products.category_id;');
?>
<table border="1">
    <tr>
        <th>Category</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php while($d=$data->fetch_assoc()){ ?>
<tr>
    <td><?php echo $d['category_name'] ?></td>
    <td><?php echo $d['name'] ?></td>
    <td><?php echo $d['price'] ?></td>
</tr>
        <?php } ?>
</table>

