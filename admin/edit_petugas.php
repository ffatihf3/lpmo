<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header">
    
    <span class="m-0 font-weight-bold text-success">Edit Data Petugas & Admin</span>
    <font color="#19B77D"><i class="fas fa-user-edit icon text"> </i> </font>

  </div>
  <div class="card-body">
   
   <?php
   require '../koneksi.php';
   $sql=mysqli_query($koneksi,"select * from petugas where id_petugas='$_GET[id]' ");
   if($data=mysqli_fetch_array($sql))
   {
   ?>

   <a href="?url=lihat_petugas" class="btn btn-success btn-icon-split">
    <span class="icon text-black-80">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
   </a>
    <br>
    <br>
    <form action="update_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">ID Petugas</h4>
        <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
      </div>
      <br>
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">Nama Petugas</h4>
        <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control" >
      </div>
      <br>
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">Username</h4>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" >
      </div>
      <br>
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">Password</h4>
        <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" >
      </div>
      <br>
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">Telp</h4>
        <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control" >
      </div>
      <br>
      <div class="form-group cols-sm-6">
        <h4 class="m-0 font-weight-bold text-success">Level</h4>
        <select class="form-control" name="level">
          <option value="<?php echo $data['level']; ?>"> <?php echo $data['level']; ?> </option>
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select>
      </div>
      <br>
      <div class="form-group col-sm-6">
        <input type="submit" value="Edit Data" class="btn btn-success">
        <input type="reset" value="Kosongkan" class="btn btn-danger">
      </div>

    </form>

  <?php } ?>

</div>
</div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>