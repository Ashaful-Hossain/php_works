<?php
    $db=new mysqli('localhost','root','','courier_service');
    $id=$_GET['id'];
    $query="delete from testimonial where id=".$id;
    $db->query($query);
    header('Location: testimonial.php');


?>