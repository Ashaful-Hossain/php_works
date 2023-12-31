<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
$id=$_GET['id'];
// $name = $_POST['name'];
// $qty = $_POST['qty'];
// $price = $_POST['price'];

$dd = new mysqli('localhost','root','','test');
$qq = "select * from products where id = $id";
// print_r($qq);
$dt =$dd->query($qq);
$data=$dt->fetch_object();

?>
<div class="container col-md-7">
    <form action="update_pro.php?id=<?php echo $data->id ?>" method="post">
        <label for="name">Name</label>
        <input type="text" value="<?php echo $data->name ?>" class="form-control" name="name" >
        <label for="qty">Quantity</label>
        <input type="text" value="<?php echo $data->qty ?>" class="form-control" name="qty">
        <label for="price">Price</label>
        <input type="text" value="<?php echo $data->price ?>" class="form-control" name="price">
        <input type="submit" value="save" class="form-control btn btn-success">
    </form>
</div>