
<?php
session_start();
if(!isset($_SESSION['username'])){
        header('Location: index.php');
}

?>


<h1>Welcome To Your Profile</h1>

<a href="logout.php">Logout</a>