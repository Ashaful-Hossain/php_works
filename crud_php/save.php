
<?php

$name = $_POST['name'];
$roll = $_POST['roll'];
$fee = $_POST['fee'];
$con =new mysqli('localhost','root','','test');
// $data=$con->query("insert into student(name,roll,fee) VALUES ('$name',$roll,$fee)");
$query="insert into student(name,roll,fee) VALUES ('$name',$roll,$fee)";
$data=$con->query($query);
//   var_dump($data);
header('Location: index.php');



?>