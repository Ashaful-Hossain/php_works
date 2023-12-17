<pre>
<?php
    include('oop.php');

    $emp = new Employee();
    echo $emp->salary,"<br>";
    // echo $emp->bonus,"<br>";
    echo $emp->fact(4),"<br>";
    echo $emp->add(5,7);
?>