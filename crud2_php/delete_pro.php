

<?php
$id = $_GET['id'];
    $db=new mysqli('localhost','root','','test');
    $query ="delete from products where id=$id";
    $dd = $db->query($query);
    header('Location: index.php');




?>