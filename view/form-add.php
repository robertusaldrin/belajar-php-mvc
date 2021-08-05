<form action="" method="POST">
	<input type="text" name="nama">
	<input type="submit" name="submit" value="Simpan">
</form>

<?php
// jika tombol simpan diklik, panggil fungsi insert di kontroller
if (isset($_POST['submit'])) {
	$main = new controller();
	$main->insertCtl();
}

?>