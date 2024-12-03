<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>Mua thêm</button></a>
    <table border="1">
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        session_start();
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
        }
        $tongtien = 0;
        if(empty($cart)){
            echo "Gio hang cua ban hien tai khong co gi ";
        }else{
            foreach($cart as $id => $v){
                $tongtien += $v['sl'] * $v['price'];
                ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$v['name']?></td>
                    <td><?=$v['sl']?></td>
                    <td><?=$v['price']?></td>
                    <td><?=$v['sl']*$v['price']?></td>
                </tr>
                <?php
                }
        }        
            if(isset($tongtien)){
                ?>
                <td colspan="4">Tổng tiền</td>
                <td><?=$tongtien?></td>
                <?php
            }
            ?>
    </table>
    <a href="order.php?id=<?=$id?>&tongtien=<?=$tongtien?>"><button>Order</button></a>
</body>
</html>