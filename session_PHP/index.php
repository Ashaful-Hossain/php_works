<?php
session_start();

if(!isset($_SESSION['nm'])){
    $_SESSION['nm']=[];
}else{
    if(isset($_POST['number']) && $_POST['number']>0){
        $_SESSION['nm'][]=$_POST['number'];
    }elseif(isset($_POST['number']) && $_POST['number']<0){
            echo array_sum($_SESSION['nm']);
    }
}
print_r ($_SESSION['nm']);
unset($_SESSION['nm']);
?>
<form action="" method="post">
    <input type="text" name="number"><br>
    <input type="submit" value="Save">
</form>
<!-- <h1>Welcome</h1> -->
<!-- // "[]===array_push(); (a khane []-ata array_push er bikolpo hishebe use kora hoece) -->