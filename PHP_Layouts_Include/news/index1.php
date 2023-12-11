<?php include("../layouts/link.php") ?>

<body>
    <div class="container">
    <?php include("../layouts/header.php") ?>
    
    <div class="col-md-8 bg-danger">
        <!-- Main Content -->
        <div class="row bg-primary">
            <h1>Headline</h1>
            <em>
                <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo date("l--h:i:s A"),"<br>";
                echo date("jS-F-Y");
                 ?>
            </em>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, cupiditate neque.</p>  <hr>
        </div>
        <div class="row bg-primary">
            <h1>Headline</h1>
            <em>
                <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo date("l--h:i:s A"),"<br>";
                echo date("jS-F-Y");
                 ?>
            </em>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, cupiditate neque.</p>  <hr>
        </div>
        <div class="row bg-primary">
            <h1>Headline</h1>
            <em>
                <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo date("l--h:i:s A"),"<br>";
                echo date("jS-F-Y");
                 ?>
            </em>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, cupiditate neque.</p>  <hr>
        </div>
        

    </div>
    <?php include("../layouts/sideBar.php") ?>
    <?php include("../layouts/footer.php") ?>


    </div>
</body>
</html>