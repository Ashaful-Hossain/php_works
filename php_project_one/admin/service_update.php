<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:index.php');
}
$db = new mysqli('localhost','root','','courier_service');
// $data = $db->query("select * from services order by id desc");
if(isset($_POST['title'])){
    $title  = $_POST['title'];
    $description = $_POST['description'];
    $logo = $_FILES['logo']['name'];
   if(move_uploaded_file($_FILES['logo']['tmp_name'],'../uploads/'.$logo)){
    $db->query("update services set logo = '$logo', title ='$title', description = '$description' WHERE id =".$_GET['id']);
 
}else{
    $query =("update services set title ='$title', description ='$description' WHERE id = ".$_GET['id']);
    $db->query($query);
 header('Location: service.php');
}
}
?>