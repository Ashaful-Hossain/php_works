<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
$db = new mysqli('localhost','root','','courier_service');
$data = $db->query("select * from general_info")->fetch_object();
if(isset($_POST['email'])){
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $mission = $_POST['mission'];
  $vission = $_POST['vission'];
  $map = $_POST['map'];
  $logo = $_FILES['logo']['name'];
  move_uploaded_file($_FILES['logo']['tmp_name'],'../uploads/'.$logo);

  $query = "update general_info set phone = '$phone', email = '$email',logo = '$logo',mission = '$mission',vission = '$vission',map = '$map'";
  $db->query($query);
  
  header('Location: general.php');
}
?>

<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <?php
      require('menu.php');
  ?>

    <div class="container">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Update General Information</h3>
</div>
<form method="post" action="" enctype="multipart/form-data">
<div class="card-body">

<div class="row">
<div class="col-6">
 
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" value="<?php echo $data->phone; ?>" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" value="<?php echo $data->email; ?>" name="email" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="miss">Mission</label>
    
    <textarea class="summernote" name="mission" id="miss"  cols="30" rows="10"><?php echo $data->mission; ?></textarea>
  </div>
  </div>
  <div class="col-6">
  <div class="form-group">
    <label for="viss">Vission</label>
    
    <textarea class="summernote" name="vission"  id="viss" cols="30" rows="10"><?php echo $data->vission; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Logo</label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input"  id="logo" name="logo">
        <label class="custom-file-label" for="logo">Choose file</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text">Upload</span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="m">Map</label>
    <input type="text" class="form-control" value="<?php echo $data->map; ?>" name="map" id="m" placeholder="Update Map">
  </div>

<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
</div>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<!-- /.content -->
</div>
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
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
