<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tulis Laporan Pengaduan | LPMO</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow  mb-4">
  <div class="card-header py-3"> 
    
    <span class="m-0 font-weight-bold text-success">Tulis Pengaduan</span>
    <font color="#19B77D"> <i class="fas fa-edit icon text"> </i> </font>
    
  </div>
  <div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">

    <a href="masyarakat.php" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
      </a>
      
    <div class="row">

      <div class="col-md-6 mt-5">
        <h4 class="m-0 font-weight-bold text-success">Tanggal Pengaduan</h4>
        <br>
        <img height="150" src="img/wave5.png">
        <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
      </div>
      <div class="col-md-6 mt-5">
        <h4 class="m-0 font-weight-bold text-success">NIK</h4>
        <br>
        <img height="150" src="img/wave8.png">
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>
      </div>

      <div class="row">
      <div class="col-md-6 mt-5">
        <h4 class="m-0 font-weight-bold text-success">Tulis Pengaduan</h4>
        <br>
        <img height="150" src="img/wave4.png"><textarea class="form-control" rows="7" name="isi_laporan"></textarea>
      </div>
      <br>
      <div class="col-md-6 mt-5">
        <h4 class="m-0 font-weight-bold text-success">Unggah Foto</h4>
        <br>
        <img height="150" src="img/wave3.png">
        <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red"> *tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
      </div>

      <br>

    </div>
        <br>
        
        <input type="submit" value="Simpan" class="btn btn-success"> 
        <input type="reset" value="Kosongkan" class="btn btn-danger">

    </form>
</div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>