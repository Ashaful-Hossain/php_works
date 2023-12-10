<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <h1>Dhaka</h1>-->
    <!-- <span id="m"></span> -->
        <?php
        $name="Dhaka";
            if($name=="Dhaka" ) { ?>
                    <?php echo 5+7 ?><h1>Dhaka</h1><span id="m"></span>
            <?php }else{ ?>
                <h2>Its not Dhaka</h2><span id="m"></span>
            <?php } ?><br>



<?php
    //Define is a Constant Variable and (dist) Parameter is a key and Dhaka is a key's Value 
    define('dist','Noakhali');
    echo dist;
    ?>
    <br>
    <br>
    <br>
    <br>
    <?php
        
        $data1=(float)15;
        $data2=(int)15.47;
        $data3=15;
        $data4=15.81;
       
        $dd=(string)15;
        var_dump($data1,$data2,$data3,$data4);

    ?>



</body>
<script>
    document.getElementById('m').innerHTML=20+3
</script>
</html>