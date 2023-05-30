<?php
require 'koneksi.php';

$id_pengaduan=$_GET['id_pengaduan'];

$sql=mysqli_query($koneksi,"delete from pengaduan where id_pengaduan='$id_pengaduan' ");

if ($sql)
{
	?>

	<script type="text/javascript">
		alert ('Data Berhasil Di Hapus');
		window.location='masyarakat.php?url=lihat_pengaduan';
	</script>
	
	<?php
}
?>