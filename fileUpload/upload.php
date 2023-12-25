
<pre>
<?php
?>
<h1>Successfully Uploaded</h1>
<?php

    // print_r($_FILES);

// echo $extention = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);

$fileName = time()."_".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$fileName);


    $f=fopen('data.txt','w');
    $dd=fwrite($f,$fileName);
    echo $dd;
?>