<?php
    include('./classes/math.php');
    include('./classes/abc.php');
    use classe\Test as T;
    use classes\Test ;



    $t = new Test();
    $tt = new T();
    echo $t->add(5,8),"<br>";
    echo $tt->mul(5,8);
?>