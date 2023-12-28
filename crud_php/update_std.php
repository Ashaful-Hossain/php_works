<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$fee = $_POST['fee'];
$con =new mysqli('localhost','root','','test');
$query="update student set name='$name',roll=$roll,fee=$fee where id=".$id;
$data=$con->query($query);
//   var_dump($data);
header('Location: index.php');

?>