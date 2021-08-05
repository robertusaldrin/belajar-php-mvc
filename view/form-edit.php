<form action="" method="POST">
	<input type="text" name="id" value="<?php echo $e['id'];?>">
	<input type="text" name="nama" value="<?php echo $e['nama'];?>">
	<input type="submit" name="submit" value="Edit">
</form>

<?php
if (isset($_POST['submit'])) {
	$main = new controller();
	$main->updateCtl();
}
?>