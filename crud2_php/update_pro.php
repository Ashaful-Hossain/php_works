

<?php
    $id=$_GET['id'];
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $dd = new mysqli('localhost','root','','test');
    $qq = "UPDATE products SET id=$id,name='$name',qty=$qty,price=$price  where id=$id";
    $dt =$dd->query($qq);
    // var_dump($dt);
    header('Location: index.php');
// $data=$dt->fetch_object();
?>