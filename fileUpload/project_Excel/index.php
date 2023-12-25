<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload prac</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="row col-md-12">
    <?php 
        $f=fopen('data.csv','r');
        while ($dd=fgetcsv($f)) {
            
            ?>

            <div class="col-md-6">
                <h1><?php echo $dd[0] ?></h1>
                <img src="img/<?php echo $dd[1] ?>" width="200" height="100" alt="Image">
                <p><?php echo $dd[2] ?></p>

            </div>
            <div class="col-md-6"> </div>
            
            <?php 
} 
?>
</div>
    </body>
</html>