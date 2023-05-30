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
              
              <span class="m-0 font-weight-bold text-success">Data Petugas & Admin</span>
              <font color="#19B77D"> <i class="fas fa-database icon text"> </i></font>

            </div>

            <div class="card-body">

                  <a href="admin.php?url=tambah_petugas" class="btn btn-success btn-icon-split">
                    <span class="icon text-black-80">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>


                  <br><br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="m-0 font-weight-bold text-success"><b>ID Petugas</th>
                      <th class="m-0 font-weight-bold text-success"><b>Nama Petugas</th>
                      <th class="m-0 font-weight-bold text-success"><b>Username</th>
                      <th class="m-0 font-weight-bold text-success"><b>Password</th>
                      <th class="m-0 font-weight-bold text-success"><b>Telp</th>
                      <th class="m-0 font-weight-bold text-success"><b>Level</th>
                      <th class="m-0 font-weight-bold text-success"><b>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                  
                  <?php
                  require '../koneksi.php';

                  $sql=mysqli_query($koneksi,"select * from petugas");
                  while ($data=mysqli_fetch_array($sql)) {
                      
                  ?>
 
                  <tbody>
                    <tr>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['id_petugas']; ?></td>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['nama_petugas']; ?></td>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['username']; ?></td>
                      <td class="m-0 font-weight-bold text-info"><?php echo $data['password']; ?></td>
                      <td class="m-0 font-weight-bold text-success"><?php echo $data['telp']; ?></td>
                      <td class="m-0 font-weight-bold text-danger"><?php echo $data['level']; ?></td>
                      <td>

                        <!--button-->

                            <a href="admin.php?url=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-info .btn-circle .btn-lg">
                              <span class="icon text-black-80">
                              <i class="fas fa-user-edit"></i>
                              </span>
                            </a>
   
                            <a href="delete_petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger .btn-circle .btn-lg" onclick="return confirm('Yakin Akan Anda Hapus?')">
                              <span class="icon text-black-80">
                              <i class="fas fa-trash"></i>
                              </span>
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
