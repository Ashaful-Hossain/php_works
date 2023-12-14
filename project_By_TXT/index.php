<?php
include('../library/library.php');
$data = getData('../news/news.txt','*');
$data = array_reverse($data);
// echo "<pre>";
// print_r ($data);exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD-News-24.COM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        li:hover{
            background-color: aqua;           
        };
    </style>
</head>
<body>
    
    <div class="container">
    <div class="col-md-12">
    <div class="col-md-4"><img src="nyaDiganta.png" alt=""></div>
    <div class="col-md-8">
                        <h1><?php date_default_timezone_set("Asia/Dhaka");
                        echo date(" l  h:i:s-A  ");
                        echo date(" d-m-Y "); ?></h1>
                </div>
    </div>
    </div>
    <div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                
                    <ul class="nav navbar-nav">
                        <li><a href="#">National</a></li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Life Style</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">National</a></li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Life Style</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Politics</a></li>
                    </ul>
                </div>
            </div>
        </nav>
                
            
<div class="containner">
    <div class="col-md-12">
        <?php foreach( $data as $c){ 
            $d=explode("^",$c);
        ?>
    <div class="col-md-4">
                <h1><?php echo $d[0] ?></h1>
                <em><?php echo $d[1] ?></em>
                <p><?php echo $d[2] ?></p>
    </div>
    <?php } ?>
    </div>
</div>
</div>



</body>
</html>