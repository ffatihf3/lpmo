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

  
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
              <span class="m-0 font-weight-bold text-success">Data Pengaduan & Tanggapan</span>
              <i class="fas fa-database icon text-success"> </i>

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="m-0 font-weight-bold text-success"><b>ID Pengaduan</th>
                      <th class="m-0 font-weight-bold text-success"><b>NIK</th>
                      <th class="m-0 font-weight-bold text-success"><b>NAMA</th>
                      <th class="m-0 font-weight-bold text-success"><b>AKSI</th>
                    </tr>
                  </thead>
                  <tfoot>
                  
                  <?php
                  require '../koneksi.php';
                  $sql=mysqli_query($koneksi,"SELECT pengaduan.id_pengaduan, pengaduan.nik, pengaduan.status, masyarakat.nama from pengaduan, masyarakat WHERE pengaduan.nik=masyarakat.nik && status='selesai';");
                  while ($data=mysqli_fetch_array($sql)) {
                      
                  ?>

                  <tbody>
                    <tr>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['id_pengaduan']; ?></td>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['nik']; ?></td>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['nama']; ?></td>
                      <td>

                        <!--button-->
                            
                            <a href="?url=detail_pengaduan_tanggapan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-info btn-circle">
                              <i class="fa fa-info"></i>
                            </a>
                         
                      </td>
                    </tr>
                    
                  </tbody>
                  
                <?php } ?>
                
                </table>
              </div>
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


<!-- "SELECT pengaduan.id_pengaduan, pengaduan.nik, pengaduan.isi_laporan, tanggapan.tanggapan from pengaduan, tanggapan WHERE pengaduan.id_pengaduan=tanggapan.id_pengaduan;" -->