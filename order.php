<?php
    session_start();

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }

    $id = $_GET['id'];
    $tongtien = $_GET['tongtien'];
    $time = date("d/m/Y");

    include("connect.php");
    $sql = "INSERT INTO tblorder(time,tongtien) 
		VALUES('$time','$tongtien')";
	mysqli_query($con,$sql);

    $madonhang = mysqli_insert_id($con);
    foreach($cart as $id => $v){
        $slmua = $v['sl'];
        $dgmua = $v['price'];
        $sql2="INSERT INTO tblorderdetails(madonhang,mahang,slmua,dgmua) VALUES($madonhang,$id,$slmua,$dgmua)";
        mysqli_query($con,$sql2);
    }
    unset($_SESSION['cart']);
    header("location:listorder.php");
?>