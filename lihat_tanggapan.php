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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    
    <span class="m-0 font-weight-bold text-success">Lihat Tanggapan</span>
    <font color="#19B77D"> <i class="fas fa-eye icon text"> </i> </font>

  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=lihat_pengaduan" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
  </a>
</div>
  
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

      <?php
      require 'koneksi.php';

      $sql=mysqli_query($koneksi,"select * from pengaduan, tanggapan  where tanggapan.id_pengaduan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
      $cek=mysqli_num_rows($sql);
        if ($cek<1)
          {
            echo "<center><img src=img/wave9.png width=800 height=400></center>";
            echo "<br>";
            echo "<center><h3><font color=#19b77d>Mohon Bersabar, Pengaduan Belum DiTanggapi</font></h3></center";
          }

        else
          {

        if ($data=mysqli_fetch_array($sql))
          {

        ?>
      
      <br>
      <div class="row">

      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tanggal Pengaduan</h4>
        <br>
        <img height="150" src="img/wave5.png">
        <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>
      <br>
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Pengaduan</h4>
        <br>
        <img height="150" src="img/wave13.png"><textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
      </div>

      </div>

      <br>
      <br>
            
      <div class="row">
      
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tanggal Tanggapan</h4>
        <br>
        <img height="150" src="img/wave5.png">
        <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
      </div>
      <div class="col-md-6">
        <h4 class="m-0 font-weight-bold text-success">Tanggapan</h4>
        <br>
        <img height="150" src="img/wave12.png"><textarea class="form-control" rows="7" name="tanggapan" readonly=""><?php echo $data['tanggapan']; ?></textarea>
      </div>
      
    <?php } } ?>

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