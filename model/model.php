<?php

class model{
	// $awaw sebagai parameter tambahan mysqli
	public $awaw = "";

	function __construct(){
		$this->awaw = mysqli_connect("localhost","root","");
		mysqli_select_db($this->awaw,"latihan");
	}

	function query($sql){
		return mysqli_query($this->awaw, $sql);
	}

	function selectAnime(){
		// kolom tbl_anime --> id int(11), nama varchar(50)
		$q = "SELECT * FROM tbl_anime";
		return $this->query($q);
	}

	function selectIdAnime($id){
		$q = "SELECT * FROM tbl_anime WHERE id='$id'";
		return $this->query($q);
	}

	function insertMdl($nama){
		$q = "INSERT INTO tbl_anime(nama) VALUES('$nama')";
		return $this->query($q);
	}

	function deleteMdl($id){
		$q = "DELETE FROM tbl_anime WHERE id='$id'";
		return $this->query($q);
	}

	function updateMdl($id,$nama){
		$q = "UPDATE tbl_anime SET nama='$nama' WHERE id='$id'";
		return $this->query($q);
	}

	function fetch($var){
		return mysqli_fetch_array($var);
	}

	function __destruct(){
	}

}

?>