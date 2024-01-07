
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:index.php');
$db = new mysqli('localhost','root','','courier_service');
$id = $_GET['id'];
$data = $db->query("select * from sliders where id=$id")->fetch_assoc();



}
?>
<?php
      require('menu.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  
    <div class="container">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add new Slider</h3>
</div>

<form action="" method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<div class="col-6">
<div class="form-group">
<label for="t-1">Title One</label>
<input type="text" name="title_1" value="<?php echo $data['title_1']; ?>" class="form-control" id="t-1" >
</div>
<div class="form-group">
<label for="t-2">Title Two</label>
<input type="text" name="title_2" value="<?php echo $data['title_2'] ?>" class="form-control" id="t-2" >
</div>
<div class="form-group">
<label for="t-3">Title Three</label>
<input type="text" name="title_3" value="<?php echo $data['title_3'] ?>" class="form-control" id="t-3" >
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="br">Brief</label>
<input type="text" name="brief" value="<?php echo $data['brief'] ?>" class="form-control" id="br" >
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
</div>

<div class="form-group">
<label for="">.</label>
<input type="submit" class="btn btn-primary btn-block"  value="Save">
</div>
</div>


</div>
</div>
</form>
</div>
<!-- /.content -->
</div>