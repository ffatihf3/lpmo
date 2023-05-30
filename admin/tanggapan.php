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

<div class="card shadow mb-4">
  <div class="card-header py-3">
    
    <span class="m-0 font-weight-bold text-success">Tanggapan</span>
    <font color="#19B77D"><i class="fas fa-reply icon text"> </i> </font>

  </div>
    
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=verifikasi_pengaduan" class="btn btn-success btn-icon-split">
    <span class="icon text-black-80">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
  </a>

  <!-- <a href="simpan_tanggapan.php" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Yakin untuk Di Tanggapi?')">
    <span class="icon text-black-80">
      <i class="fas fa-reply"></i>
    </span>
    <span class="text">Tanggapi</span>
  </a> -->

    <br>
    <br>
    <form action="simpan_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <br>
     <div class="row">
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">ID Pengaduan</h4>
        <br>
        <img height="150" src="../img/wave8.png">
        <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
      </div>
      <br>
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tanggal Tanggapan</h4>
        <br>
        <img height="150" src="../img/wave5.png">
        <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
      </div>
    </div>
      <br>
    <div class="row">
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">ID Petugas</h4>
        <br>
        <img height="150" src="../img/wave8.png">
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
      </div>
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tulis Tanggapan</h4>
        <br>
        <img height="150" src="../img/wave4.png"><textarea class="form-control" rows="7" name="tanggapan"></textarea>
      </div>
      <br>
      </div>
      <br>
      <br>
      <input type="submit" value="Tanggapi" class="btn btn-success btn-lg btn-block" onclick="return confirm('Apakah Yakin untuk Di Tanggapi?')"> 
    </form>

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