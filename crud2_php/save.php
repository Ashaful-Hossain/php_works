
<?php
    
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

$dd = new mysqli('localhost','root','','test');
$qq = "INSERT INTO products(name, qty, price) VALUES ('$name',$qty,$price)";
// print_r($qq);
$dt =$dd->query($qq);
header('Location: index.php');
?>