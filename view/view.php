<!DOCTYPE html>
<html>
<head>
	<title>Tryna</title>
</head>
<body>

<a href="index.php?a=add">Tambah</a>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td></td>
	</tr>
	<?php while($s = $this->model->fetch($data)){ ?>
	<tr>
		<td><?php echo $s['id']; ?></td>
		<td><?php echo $s['nama']; ?></td>
		<td>
			<a href="index.php?e=<?php echo $s['id']; ?>">Edit</a>
			<a href="index.php?d=<?php echo $s['id']; ?>" onClick="return confirm('Hapus Data?')">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

</body>
</html>