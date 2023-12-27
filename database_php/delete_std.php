<?php
$id = $_GET['id'];

 $query="DELETE FROM student WHERE id=$id";
 $dd = new mysqli('localhost','root','','test');
 $result = $dd->query($query);
 header('Location: index.php');


?>