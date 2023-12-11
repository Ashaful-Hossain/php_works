<?php include("../layouts/link.php") ?>

<body>
    <div class="container">
    <?php include("../layouts/header.php") ?>
    <?php
    $con = fopen('data.txt','r');
    $data = fread($con,9999);
    $list = explode ('*',$data);
    // var_dump($list);
    ?>
    <div class="col-md-8 bg-danger">
        <!-- Main Content -->

        <?php foreach ($list as $l) {
                // var_dump($l);
                $n = explode('^',$l);
                //  var_dump($n);

        ?>      
            <div class="row bg-primary">
                 <h1><?php echo $n[0]; ?></h1> 
                <em>            
                <?php echo $n[1]; ?>
                 </em>
            <p><?php echo $n[2]; ?></p>  <hr>
        </div>

        <?php } ?>
        

    </div>
    <?php include("../layouts/sideBar.php") ?>
    <?php include("../layouts/footer.php") ?>


    </div>
</body>
</html>