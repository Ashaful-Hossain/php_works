<?php
$id=$_POST['id'];
$db=new mysqli('localhost','root','','test');
$data=$db->query('update student set name="'.$_POST['name'].'",roll="'.$_POST['roll'].'" where id='.$id);
header('Location:index.php');