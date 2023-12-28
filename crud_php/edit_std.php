<!-- <pre> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php

    $con =new mysqli('localhost','root','','test');
        $id=$_GET['id'];
        $query="SELECT * FROM student where id=".$id;
        // echo $query;
        $result=$con->query($query);
        $data =$result->fetch_assoc();
        // var_dump($result);
        // print_r($data['name']);


?>
<div class="container">
<div class="col-md-8">
<h2>Update Your Data</h2><hr>
    <form action="update_std.php" method="post">

        <label for="name">Student Name</label>
        <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control">

        <label for="roll">Student Roll</label>
        <input type="number" name="roll" value="<?php echo $data['roll']; ?>" class="form-control">

        <label for="fee">Student Fee</label>
        <input type="number" name="fee" value="<?php echo $data['fee']; ?>" class="form-control">   
         
        <input type="submit" value="Save" class="form-control btn btn-success">
        
    </form>
</div>