
<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		
		case 'verifikasi_pengaduan':
		include 'verifikasi_pengaduan.php';
		break;

		case 'detail_pengaduan':
		include 'detail_pengaduan.php';
		break;

		case 'tanggapan':
		include 'tanggapan.php';
		break;

		case 'lihat_petugas':
		include 'lihat_petugas.php';
		break;

		case 'tambah_petugas':
		include 'tambah_petugas.php';
		break;

		case 'edit_petugas':
		include 'edit_petugas.php';
		break;

		case 'lihat_masyarakat':
		include 'lihat_masyarakat.php';
		break;

		case 'cetak_masyarakat':
		include 'preview_masyarakat.php';
		break;

		case 'cetak_petugas':
		include 'priview_petugas.php';
		break;

		case 'cetak_pengaduan_tanggapan':
		include 'priview_pengaduan_tanggapan.php';
		break;

		case 'lihat_pengaduan_tanggapan':
		include 'lihat_pengaduan_tanggapan.php';
		break;

		case 'detail_pengaduan_tanggapan':
		include 'detail_pengaduan_tanggapan.php';
		break;
	
		


	}
}
else
{
	?>
	
  	<center><img src=../img/wave6.png width=800 height=400></center>
		<center>
			<hr>
			<font face="Blogger Sans " color=#19b77d><h1>Selamat Datang <b> <?php echo $_SESSION['nama'];?> </b>Di LPMO</h1>
	        	<h1>|LAPORAN PENGADUAN MASYARAKAT ONLINE|</h1>
			</font>	
			<hr>
		</center>

<?php 

	require '../koneksi.php';
	$sql=mysqli_query($koneksi,"select * from pengaduan where status='proses'");
	if ($cek=mysqli_num_rows($sql))
	{
	?>
					<br>
					<div class="row">

          <div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-danger shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
										<div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><h6>Verifikasi Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-800 text-danger">Ada <?php echo $cek; ?> Laporan yang telah Di Verifikasi</div>
                     </div>
                    <div class="col-auto">
                      <i class="fas fa-paper-plane fa-5x text-300 text-danger"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
					</div>
					
					<?php

					$sql=mysqli_query($koneksi,"select * from pengaduan where status='selesai'");
					if ($cek1=mysqli_num_rows($sql))
					{
          ?>

					<div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-danger shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><h6>Tanggapan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-800 text-danger">Ada <?php echo $cek1;?> Laporan yang telah Di Tanggapi</div>
                     </div>
                    <div class="col-auto">
                      <i class="fas fa-reply-all fa-5x text-300 text-danger"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek1; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
					</div>
					 
					<?php

					$sql=mysqli_query($koneksi,"select * from petugas");
					if ($cek2=mysqli_num_rows($sql))
					{
					?>

					<div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-warning shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6>Data Petugas / Admin : </div>
                      <div class="h5 mb-0 font-weight-bold text-800 text-warning">Ada <?php echo $cek2;?> Petugas / Admin yang TerDaftar</div></font>
                     </div>
                    <div class="col-auto">
                      <i class="fas fa-headset fa-5x text-300 text-warning"></i>
                      <span class="badge badge-warning badge-counter"><?php echo $cek2; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
					</div>
					
					<?php

					$sql=mysqli_query($koneksi,"select * from masyarakat");
					if ($cek3=mysqli_num_rows($sql))
					{
          ?>

					<div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-success shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h6>Data Masyarakat : </div>
                      <div class="h5 mb-0 font-weight-bold text-800 text-success">Ada <?php echo $cek3;?> Masyarakat yang TerDaftar</div></font>
                     </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-5x text-300 text-success"></i>
                      <span class="badge badge-success badge-counter"><?php echo $cek3; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
					</div>

					</div>

					

<?php
} } } } } 
?>