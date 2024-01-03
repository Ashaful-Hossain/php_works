<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container">
    <form action="" method="post">
        <input type="text" name="start_date" >
        <input type="text" name="end_date" >
        <input type="submit" value="Search" >
    </form>
<table class="table table-bordered">
    <tr>
        <th>Product ID</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
    <?php  
    $db=new mysqli('localhost','root','','payra');
    if(isset($_POST['start_date'])){
        $start=$_POST['start_date'];
        $end=$_POST['end_date'];
        $data=$db->query("SELECT productID,price,quantity, created_at as date FROM `main_stock_out` where created_at between '$start' and '$end' order by created_at desc");
    }else{
        $data=$db->query('SELECT productID,price,quantity, created_at as date FROM `main_stock_out` order by created_at desc');
    }
    
    while($d=$data->fetch_assoc()){
    ?>
<tr>
    <td><?php echo $d['productID'] ?></td>
    <td><?php echo $d['price'] ?></td>
    <td><?php echo $d['quantity'] ?></td>
    <td><?php echo $d['date'] ?></td>
</tr>
    <?php } ?>
</table>
</div>