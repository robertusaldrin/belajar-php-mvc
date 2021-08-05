<?php
include 'controller/controller.php';

$main = new controller();

// kondisi form-edit data
if(isset($_GET['e'])){
	$id = $_GET['e'];
	$main->viewEdit($id);
// kondisi delete data
} else if(isset($_GET['d'])){
	$id = $_GET['d'];
	$main->deleteCtl($id);
// kondisi form-add data
} else if(isset($_GET['a'])){
	$main->viewAdd();
// kondisi halaman index
} else {
	$main->index();
}



?>