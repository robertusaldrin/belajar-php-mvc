<?php
include 'model/model.php';

class controller{
	// var public untuk menyimpan data method
	public $model;

	function __construct(){
		// objek baru dari class model
		$this->model = new model();
	}

	function index(){
		// $data menyimpan hasil fungsi selectAnime() di class model
		$data = $this->model->selectAnime();
		include 'view/view.php';
	}

	function viewAdd(){
		// tampilkan form add
		include 'view/form-add.php';
	}

	function viewEdit($id){
		// select * anime by ID
		$data = $this->model->selectIdAnime($id);
		$e = $this->model->fetch($data);
		include 'view/form-edit.php';
	}

	function insertCtl(){
		$nama = $_POST['nama'];
		$i = $this->model->insertMdl($nama);
		header("location:index.php");
	}

	function deleteCtl($id){
		$d = $this->model->deleteMdl($id);
		header("location:index.php");
	}

	function updateCtl(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$u = $this->model->updateMdl($id,$nama);
		header("location:index.php");
	}

	function __destruct(){
	}

}



?>