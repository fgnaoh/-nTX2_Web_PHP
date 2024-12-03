<?php
	//lấy dữ liệu từ form gửi lên
	$tenhang = $_POST['tenhang'];
	$nhomhang = $_POST['nhomhang'];
    $sl = $_POST['sl'];
    $dg = $_POST['dg'];

    $dir = "Uploads/";
    $img = $dir.basename($_FILES['images']['name']);

    //if(move_uploaded_file($_FILES['images']['name'],$img)){}

	include("connect.php");

	$sql = "INSERT INTO tblproduct(tenhang,nhomhang,soluong,dongia,hinhanh) VALUES('$tenhang','$nhomhang','$sl','$dg','$img')";
	mysqli_query($con,$sql);
	
	header("Location: index.php");
?>