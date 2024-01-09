<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<?php
session_start();
$db = new mysqli('localhost','root','','courier_service');
$data = $db->query("select * from testimonial order by id desc");

if(!isset($_SESSION['username'])){
    header('Location:index.php');
}
if(isset($_POST['name'])){
    $name  = $_POST['name'];
    $designation = $_POST['designation'];
    $comment = $_POST['comment'];
    $photo = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$photo);
 $query ="INSERT INTO `testimonial` (`id`, `name`, `photo`, `designation`,`comment`) VALUES (NULL,'$name','$photo','$designation','$comment')";
 $data = $db->query($query);
 header('Location: testimonial.php');
}
?>
  <?php
      require('menu.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  
    <div class="container">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add new Testimonial</h3>
</div>

<form action="" method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<div class="col-6">
<div class="form-group">
<label for="t-1">Name</label>
<input type="text" name="name" class="form-control" id="t-1" placeholder="Name">
</div>
<div class="form-group">
    <label for="des">Comment</label>
    <textarea class="summernote" name="comment" class="form-control" id="des"> </textarea>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="exampleInputFile">Photo</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
<div class="form-group">
<label for="t-1">Designation</label>
<input type="text" name="designation" class="form-control" id="t-1" placeholder="Title">
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
<h3 class="card-title">Services List</h3>
</div>
<!-- Main content -->
       <div class="card-body">

       <table class="table table-borderd">
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Comment</th>
          <th>Logo</th>
          <th>Action</th>
        </tr>
        <?php 
        $i=0;
        while($tst = $data->fetch_assoc()) {
          ?>
        <tr>

          <td><?php echo ++$i ?></td>
          <td><?php echo $tst['name'] ?></td>
          <td><?php echo $tst['designation'] ?></td>
          <td><?php echo $tst['comment'] ?></td>
          <td><img src="../uploads/<?php echo $tst['photo'] ?>" alt=""
          width="80" height="50"></td>

          <td>
            <a href="edit_tst.php?id=<?php echo $tst['id'] ?>" class="btn btn-success">Edit</a>
            <a href="delete_tst.php?id=<?php echo $tst['id'] ?>" class="btn btn-danger">Delete</a>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>



