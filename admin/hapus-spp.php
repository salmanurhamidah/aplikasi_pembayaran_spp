<?php 
$id_spp = $_GET['id_spp'];


include'../koneksi.php';
$sql = "DELETE FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query) {
	//digunakan untuk memproses http
	header("Location:?url=spp");
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus');
	window.Location.assign('?url=spp');
	</script>";
	}
 ?>
