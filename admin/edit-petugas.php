 <?php 
$id_petugas= $_GET['id_petugas'];
include'../koneksi.php';
$sql = "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
//mysqli_query = nama pungsi untuk menjalnkan intruki
	$query = mysqli_query($koneksi, $sql);
//mysqli_fetch_array = fungsi pengambilan mengakses data
	$data = mysqli_fetch_array($query);

 ?>



 <h5>Halaman Tambah Data Petugas.</h5>
<a href="?url=petugas" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas; ?>">
	<div class="from-group mb-2">
		<label>Username</label>
		<input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
	</div>	
	<div class="from-group mb-2">
		<label>Password</label>
		<input value="<?= $data['username'] ?>" type="text" name="password" class="form-control" required>
	</div>	
	<div class="from-group mb-2">
		<label>Nama Petugas</label>
		<input value="<?= $data['username'] ?>" type="text" name="nama_petugas" class="form-control" required>
	</div> 
	<div class="form-group mb-2">
		<label>Level Petugas</label>
		<select name="level" class="form-control" required>
			<option value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success"> SIMPAN </button>
		<button type="reset" class="btn btn-warning"> KOSONGKAN </button>
	</div>

</form>