<pre>
<?php
$news = $_POST['headline']."^".$_POST['date']."^".$_POST['details'];
 $con = fopen("../news/news.txt","r+");
 $data = fread($con,99999);
 $d = explode("*",$data);
//  array_unshift($d,$news);
//  array_unshift($d,$news);
  array_push($d,$news);
 //  print_r($d);
  $e =implode("*",$d);

  $c = fopen("../news/news.txt","w");
  fwrite ($c,$e);



?>