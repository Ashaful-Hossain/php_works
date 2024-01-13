

<?php
$db= new mysqli('localhost','root','','test');
// $data=$db->query("call std_data()")->fetch_assoc();
if(!isset($_POST['name'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $fee = $_POST['fee']; 
    $db->query("call add_std('$name',$roll,$fee)");
}
// echo ($data['name']);
?>
<form action="" method="post">
    <input type="text" name="name" required><br>
    <input type="text" name="roll" required><br>
    <input type="text" name="fee" required><br>
    <input type="submit">
</form>
