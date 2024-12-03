<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="formnhom.html"><button>Thêm nhóm hàng</button></a>
    <a href="formsp.php"><button>Thêm sản phẩm</button></a>
    <a href="cart.php"><button>Giỏ hàng</button></a>
    <table>
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Nhóm hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Hình ảnh</th>
            <th>Chọn mua</th>
        </tr>
        <?php
                include("connect.php");
                $sql = "SELECT * FROM tblproduct";
                $rs = mysqli_query($con,$sql);
                while($r = mysqli_fetch_assoc($rs)){
                    ?>
                    <tr>
                        <td><?=$r['mahang']?></td>
                        <td><?=$r['tenhang']?></td>
                        <td><?=$r['nhomhang']?></td>
                        <td><?=$r['soluong']?></td>
                        <td><?=$r['dongia']?></td>
                        <td><img src="<?=$r['hinhanh']?>" width="50px" alt=""></td>
                        <td><a href="buy.php?id=<?=$r['mahang']?>&name=<?=$r['tenhang']?>&price=<?=$r['dongia']?>"><button>Mua</button></a></td>
                    </tr>
                    <?php
                }
            ?>
    </table>
</body>
</html>