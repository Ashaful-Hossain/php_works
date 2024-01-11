<?php
$db = new mysqli('localhost','root','','test');

//  $st = $db->stmt_init();
// $st->prepare("select name,roll,fee from student where id=? and fee=?");
// $st->bind_param('dd',$id,$fee);
// $id=16;
// $fee=15;
// $st->execute();
// $st->bind_result($a,$b,$c);
// while($st->fetch())
// {
//     echo $a."==".$b."==".$c."<br>";
// }

$st = $db->stmt_init();
$st->prepare("INSERT INTO `category` (`id`, `category_name`) VALUES (NULL,?);");
$st->bind_param('s',$n);


if(isset($_POST['name'])){
     foreach ($_POST['name'] as $data) {
        $n = $data;
        $st->execute();
     }
    // print_r($_POST['name']);
}

?>

<form action="" method="post">
    <input type="text" name="name[]"><br>
    <input type="text" name="name[]"><br>
    <input type="text" name="name[]"><br>
    <input type="submit" value="Save">
</form>