<?php
    $svname = "localhost";
    $usname = "root";
    $pw ="";
    $db ="bang";
    $con = mysqli_connect($svname,$usname,$pw,$db);
    if($con->connect_error){
        die('Không kết nối được với máy chủ CSDL'.$con->connect_error);
    }
?>