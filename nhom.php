<?php
	//lấy dữ liệu từ form gửi lên
	$ten = $_POST['ten'];
	$mota = $_POST['mota'];

	include("connect.php");

	$sql = "INSERT INTO tblcategory(ten,mota) 
		VALUES('$ten','$mota')";
	mysqli_query($con,$sql);
	
	header("Location: formnhom.html");
?>