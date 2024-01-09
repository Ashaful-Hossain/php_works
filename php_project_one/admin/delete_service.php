<?php
    session_start();
    $db = new mysqli('localhost','root','','courier_service');
    $id = $_GET['id'];
    $db->query("delete from services where id=".$id);
        header('Location: service.php');
    ?>

