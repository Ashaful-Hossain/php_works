<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<div class="container col-md-7">
    <form action="save.php" method="post">
        <label for="name">Name</label>
        <input type="text"  class="form-control" name="name" >
        <label for="qty">Quantity</label>
        <input type="text"  class="form-control" name="qty">
        <label for="price">Price</label>
        <input type="text"  class="form-control" name="price">
        <input type="submit" value="save" class="form-control btn btn-success">
    </form>
</div>