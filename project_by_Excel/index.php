<!-- <pre> -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
    $con = fopen('news.csv','r');
   while($data=fgetcsv($con)) {
       ?>
       <div class="col-md-5" style="margin:5px; background-color:aqua;">
        <h1><?php echo $data[0]; ?></h1>
        <em><?php echo $data[1]; ?></em>
        <p><?php echo $data[2]; ?></p>
       </div>
       
    
<?php }