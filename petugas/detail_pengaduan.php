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
    
    <span class="m-0 font-weight-bold text-success">Detail Pengaduan</span>
    <font color="#19B77D"> <i class="fas fa-info-circle icon text"> </i> </font>

  </div>

      <?php

      require '../koneksi.php';
      $sql=mysqli_query($koneksi,"select * from pengaduan where id_pengaduan='$_GET[id]'");
      $data=mysqli_fetch_array($sql);
      if ($sql)
      {
        
      ?>

  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=verifikasi_pengaduan" class="btn btn-success btn-icon-split">
    <span class="icon text-black-80">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
  </a>

  <a href="kirim.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Yakin untuk Di Verifikasi?')">
    <span class="icon text-black-80">
      <i class="fas fa-paper-plane"></i>
    </span>
    <span class="text">Kirim Verifikasi</span>
  </a>
</div>

    <br>
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      
     <div class="row">

     <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tanggal Pengaduan</h4>
        <br>
        <img height="150" src="../img/wave5.png">
        <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>
      <br>
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Pengaduan</h4>
        <br>
        <img height="150" src="../img/wave13.png">
        <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
      </div>

     </div>

      <br>
      <div class="col-md-12">
        <h4 class="m-0 font-weight-bold text-success">Bukti Foto</h4>
        <div>
        <hr>
        <img src="../foto/<?php echo $data['foto']; ?>" width=800>
        <hr>
        </div>
      </div>

      

    <?php } ?>

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