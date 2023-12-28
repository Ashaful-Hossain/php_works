<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
    

?>
<div class="container">
<div class="col-md-8">

    <form action="save.php" method="post">

        <label for="name">Student Name</label>
        <input type="text" name="name" class="form-control">

        <label for="roll">Student Roll</label>
        <input type="number" name="roll" class="form-control">

        <label for="fee">Student Fee</label>
        <input type="number" name="fee" class="form-control">   
         
        <input type="submit" value="Save" class="form-control btn btn-success">
        
    </form>
</div>