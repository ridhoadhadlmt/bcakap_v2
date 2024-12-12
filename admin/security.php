<?php
session_start();
include '../koneksi.php';
if($_SESSION['level']=="admin"){
	header('location:../login.php');
}
?>