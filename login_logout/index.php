<pre>
<?php
session_start();
if(isset($_POST['email'])){
    $db = new mysqli('localhost','root','','test');
    $query = "select * from users where email='".$_POST['email']."' and password='".$_POST['password']."'";
    $data = $db->query($query)->fetch_assoc();
    // print_r($result);
    if(isset($data['name'])){
        $_SESSION['username']=$data['name'];
        $_SESSION['email']=$data['email'];
        header('Location: profile.php');

    }else{
        header('Location: index.php');
    }


}


?>

<form action="" method="post">
    <input class="form-control" type="email" name="email" placeholder="Enter Email">
    <input class="form-control" type="password" name="password" placeholder="Enter Password">
    <input type="submit" value="Save">
</form>


