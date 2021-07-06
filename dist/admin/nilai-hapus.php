<?php
include_once "../controller/config.php";
$database = new Config();
$db = $database->getConnection();

include_once '../controller/nilai.inc.php';
$pro = new Nilai($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete()){
	echo "<script>location.href='nilai.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='nilai.php';</script>";
		
}
?>

