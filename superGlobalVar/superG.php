<?php
    $data = $_POST['fname'];
if($data==''){
    echo "Enter Your Name";
}else{
    echo $_POST['fname'];
}
// $data = $_GET['fname'];
// if($data==''){
//     echo "Enter Your Name";
// }else{
//     echo $_GET['fname'];
// }
?>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" name="fname">
<input type="submit" value="Save">

</form>