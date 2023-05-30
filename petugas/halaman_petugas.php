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


	}
}
else
{
	?>

		<center><img src=../img/wave10.png width=800 height=400></center>
		<center>
			<hr>
			<font face="Blogger Sans " color=#19b77d><h1>Selamat Datang <b> <?php echo $_SESSION['nama'];?> </b>Di LPMO</h1>
	        	<h1>|LAPORAN PENGADUAN MASYARAKAT ONLINE|</h1>
			</font>	
			<hr>
		</center>
		
<?php
 
		require '../koneksi.php';
		 
    $sql=mysqli_query($koneksi,"select * from pengaduan where status='0'");
	  if ($cek=mysqli_num_rows($sql))
	  {
		?>
		
      	 <br>
         <div class="row">

		        <div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-success shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h6>Laporan Pengaduan : </div>
                      <font color="#19b77d"><div class="h5 mb-0 font-weight-bold text-800">Ada <?php echo $cek;?> Laporan dari Masyarakat</div></font>
                    </div>
                    <div class="col-auto">
                      <font color="#19b77d"><i class="fas fa-comments fa-5x text-300"></i></font>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
						</div>
						
						<?php

						$sql=mysqli_query($koneksi,"select * from pengaduan where status='proses'");
						if ($cek1=mysqli_num_rows($sql))
						{
						?>

						<div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-danger shadow h-100 py-3">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><h6>Verifikasi Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-800 text-danger">Ada <?php echo $cek1; ?> Laporan yang telah Di Verifikasi</div>
                    </div>
                    <div class="col-auto">
											<i class="fas fa-paper-plane fa-5x text-300 text-danger"></i>
                      <span class="badge badge-success badge-counter"><?php echo $cek1; ?></span>
                    </div>
                  </div>
                </div>
	            </div>
						</div>
						
						
				</div>
						
<?php
} } }
?> 