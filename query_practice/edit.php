<?php
$id=$_GET['id'];
$db=new mysqli('localhost','root','','test');
$data=$db->query('select * from student where id='.$id);
$d=$data->fetch_assoc();
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
    <input type="text" name="name" value="<?php echo $d['name'] ?>">
    <input type="text" name="roll" value="<?php echo $d['roll'] ?>">
    <input type="submit" value="Update">
</form>
