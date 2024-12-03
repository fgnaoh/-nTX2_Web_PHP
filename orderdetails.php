<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listorder.php"><button>Back to list order</button></a>
    <h2>Chi tiet don hang</h2>
    <?php
        $id=$_GET['id'];
        include("connect.php");
        $sql = "SELECT * FROM tblorder WHERE madonhang = $id";
        $rs = mysqli_query($con,$sql);
        while($r = mysqli_fetch_assoc($rs)){
        ?>
        <table>
            <tr>
                <td>Mã đơn hàng</td>
                <td><?=$r['madonhang']?></td>
            </tr>
            <tr>
                <td>Thời gian</td>
                <td><?=$r['time']?></td>
            </tr>
            <tr>
                <td>tổng tiền</td>
                <td><?=$r['tongtien']?></td>
            </tr>
        </table>
        <?php
        }
        ?>
        <table border="1">
            <tr>
                <th>Mã hàng</th>
                <th>Số lượng mua</th>
                <th>Đơn giá mua</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tblorderdetails WHERE madonhang = $id";
            $rs = mysqli_query($con,$sql);
            while($r = mysqli_fetch_assoc($rs)){
        ?>
        <table>
            <tr>
                <td><?=$r['mahang']?></td>
                <td><?=$r['slmua']?></td>
                <td><?=$r['dgmua']?></td>
            </tr>
        </table>
        <?php
        }
        ?>
        </table>
        <?php
    ?>

</body>
</html>