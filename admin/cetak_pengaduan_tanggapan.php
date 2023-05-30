<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

                  
            <!-- <iframe src="cetak_petugas3.php" style="display:none;" name="frame"></iframe>-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>

            <div class="card-body">
              <font color="black"><h3 align="center"><b>PEMERINTAH KABUPATEN BOGOR</h3></font>
              <font color="black"><h4 align="center"><b>DESA BOJONG KULUR KEC. GUNUNG PUTRI</h4></font>
              <font color="black"><h6 align="center"><b>Jalan HJ.TOPAZ Desa Bojong Kulur Kode Pos 16969</h6></font>
                  <br>
                  <br>
                  <hr>
                  <br>
              <font color="black"><h4 align="center"><b>Laporan Data Pengaduan & Tanggapan</h4></font>   
                  <br>
                  
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                    <tr>
                      <th><font color="black"><b>ID Pengaduan</font></th>
                      <th><font color="black"><b>NIK</font></th>
                      <th><font color="black"><b>Nama</font></th>
                      <th><font color="black"><b>Tanggal Pengaduan</font></th>
                      <th><font color="black"><b>Pengaduan</font></th>
                      <th><font color="black"><b>Tanggal Tanggapan</font></th>
                      <th><font color="black"><b>Tanggapan</font></th>
                    </tr>
                  
                  
                  
                  <?php
                  require '../koneksi.php';

                  $sql=mysqli_query($koneksi, "SELECT pengaduan.id_pengaduan, pengaduan.nik, pengaduan.status, pengaduan.tgl_pengaduan, pengaduan.isi_laporan, masyarakat.nama, tanggapan.id_pengaduan, tanggapan.tgl_tanggapan, tanggapan.tanggapan from pengaduan, masyarakat, tanggapan WHERE pengaduan.nik=masyarakat.nik && pengaduan.id_pengaduan=tanggapan.id_pengaduan && status='selesai';");
                  while ($data=mysqli_fetch_array($sql)) {
                      
                  ?>

                  <tbody>
                    <tr>
                      <td><font color="black"> <?php echo $data['id_pengaduan']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['nik']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['nama']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['tgl_pengaduan']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['isi_laporan']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['tgl_tanggapan']; ?> </font></td>
                      <td><font color="black"> <?php echo $data['tanggapan']; ?> </font></td>
                    </tr> 
                  </tbody>

                <?php } ?>
                
                </table>

              </div>

                <br>
                <br>
                <h6 align="right"><font color="black"><b>Bogor, <?php echo date('d M Y'); ?> </font></h6>
                <br>
                <h6 align="right"><font color="black"><b>Petugas,</font></h6>
                <br>
                <br>
                <br>
                <br>
                <h6 align="right"><font color="black"><b> <?php echo $_SESSION['nama']; ?> </font></h6>
                <hr>

            </div>
          </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
