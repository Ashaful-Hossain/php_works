<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Php Basic</title>
</head>
<body>
    <!-- Referance Assainment Variable -->
    <h1>Referance Assainment Variable</h1>
    <?php
    $name = "Dhaka";
    $data = &$name;
     $data = "Noakhali";
    echo $data;
    ?>

    <!-- Resource Variable = Connection/Path of Data -->

    <!-- Type Custing -->
    <h1>Type Custing</h1>
<?php
    $data1 = (string)15.44;
    $data2 = (float)15.44;
    $data3 = (int)15.44;
    var_dump($data1,$data2,$data3);
    // echo $data1,' , ',$data2,' , ',$data3;
    ?>
    <br>
    <!-- Constent Variable -->
    <h1>Constent Variable</h1>
    <?php
        define("name","Dhaka");
        echo name;
    ?>
    
</body>
</html>