<?php
$tmp_name = $_FILES['photo']['tmp_name'];
$fileName = time()."_".$_FILES['photo']['name'];
move_uploaded_file($tmp_name,'img/'.$fileName);

$data = [$_POST['name'],$fileName,$_POST['details']];

$f=fopen('data.csv','a');
echo fputcsv($f,$data);
    header('Location: form.php');
?>