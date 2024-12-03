<?php
    session_start();
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];

    $cart = [];
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }

    if(array_key_exists($id,$cart)){
        $cart[$id]['sl']++;
    }else $cart[$id]=['name'=>$name,'sl'=>1,'price'=>$price];

    $_SESSION['cart'] = $cart;

    header("location:cart.php");
?>