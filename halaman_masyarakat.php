<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;
		


	}
}

else
{
		?>
	
		<center><img src=img/wave7.png width=800 height=400></center>
		<center>
			<hr>
			<font face="Blogger Sans " color=#19b77d><h1>Selamat Datang <b> <?php echo $_SESSION['nama'];?> </b>Di LPMO</h1>
	        	<h1>|LAPORAN PENGADUAN MASYARAKAT ONLINE|</h1>
			</font>	
			<hr>
		</center>
		
<?php
}
?>