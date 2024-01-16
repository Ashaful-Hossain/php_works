<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:index.php');
}
$db = new mysqli('localhost','root','','courier_service');
$data = $db->query("select * from services where id=".$_GET['id'])->fetch_object();

// if(isset($_POST['title'])){
//     $title  = $_POST['title'];
//     $description = $_POST['description'];
//     $logo = $_FILES['logo']['name'];
//     move_uploaded_file($_FILES['logo']['tmp_name'],'../uploads/'.$logo);
//  $query ="INSERT INTO `services` (`id`, `logo`, `title`, `description`) VALUES (NULL,'$logo','$title','$description')";
//  $data = $db->query($query);
//  header('Location: service.php');
// }
?>
  <?php
      require('menu.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  
    <div class="container">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add new Service</h3>
</div>

<form action="service_update.php?id=<?php $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<div class="col-6">
<div class="form-group">
<label for="t-1">Title</label>
<input type="text" name="title" value="<?php echo $data->title ?>" class="form-control" id="t-1" placeholder="Title one">
</div>
<div class="form-group">
    <label for="">Description</label>
    <textarea class="summernote" name="description" value="<?php echo $data->description?>"></textarea>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="exampleInputFile">Logo input</label>
<div class="input-group">

<div class="custom-file">
<input type="file" class="custom-file-input" name="logo"  id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
<img src="../uploads/<?php echo $data->logo ?>" alt="">
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



