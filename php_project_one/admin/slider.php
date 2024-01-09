<?php
session_start();
$db = new mysqli('localhost','root','','courier_service');
$data = $db->query("select * from sliders order by id desc");

if(!isset($_SESSION['username'])){
    header('Location:index.php');
}
if(isset($_POST['title_1'])){
    $title_1 = $_POST['title_1'];
    $title_2 = $_POST['title_2'];
    $title_3 = $_POST['title_3'];
    $brief = $_POST['brief'];
    $photo = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$photo);
 $query ="INSERT INTO `sliders` (`id`, `title_1`, `title_2`, `title_3`, `brief`, `photo`) VALUES (NULL,'$title_1','$title_2','$title_3','$brief','$photo')";
 $data = $db->query($query);
 header('Location: slider.php');
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
<input type="text" name="title_1" class="form-control" id="t-1" placeholder="Title one">
</div>
<div class="form-group">
<label for="t-2">Title Two</label>
<input type="text" name="title_2" class="form-control" id="t-2" placeholder="Title Two">
</div>
<div class="form-group">
<label for="t-3">Title Three</label>
<input type="text" name="title_3" class="form-control" id="t-3" placeholder="Title Three">
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="br">Brief</label>
<input type="text" name="brief" class="form-control" id="br" placeholder="Brief">
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
<!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container">
    <div class="card card-success">
<div class="card-header">
<h3 class="card-title">Slider List</h3>
</div>
<!-- Main content -->
       <div class="card-body">

       <table class="table table-borderd">
        <tr>
          <th>SL</th>
          <th>Title One</th>
          <th>Title Two</th>
          <th>Title Three</th>
          <th>Brief</th>
          <th>Photo</th>
          <th>Action</th>
        </tr>
        <?php 
        $i=0;
        while($slider = $data->fetch_assoc()) {
          ?>
        <tr>

          <td><?php echo ++$i ?></td>
          <td><?php echo $slider['title_1'] ?></td>
          <td><?php echo $slider['title_2'] ?></td>
          <td><?php echo $slider['title_3'] ?></td>
          <td><?php echo $slider['brief'] ?></td>
          <td><img src="../uploads/<?php echo $slider['photo'] ?>" alt=""
          width="80" height="50"></td>

          <td>
            <a href="edit_slider.php?id=<?php echo $slider['id'] ?>" class="btn btn-success">Edit</a>
            <a href="delete_slider.php?id=<?php echo $slider['id'] ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php }?>
       </table>
        
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   
    <!-- /.content -->
  </div>
</div>

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>



