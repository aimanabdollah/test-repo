<?php 
session_start();


if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	header("Location:index.php");
}else if(isset($_SESSION['staff'])){
	unset($_SESSION['staff']);
	header("Location:index.php");
}



 ?>