

<?php
$id=$_GET['id'];
$con = new mysqli('localhost','root','','test');
$result = $con->query("DELETE from student WHERE id=$id");

header('Location: index.php');




?>