<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php"><button>Trang chu</button></a>
    <table border="1">
        <?php
                include("connect.php");
                $sql = "SELECT * FROM tblorder";
                $rs = mysqli_query($con,$sql);
                while($r = mysqli_fetch_assoc($rs)){
                    ?>
                    <tr>
                        <td>Đơn hàng thứ <?=$r['madonhang']?></td>
                        <td><a href="orderdetails.php?id=<?=$r['madonhang']?>"><button>Xem chi tiet</button></a></td>
                    </tr>
                    <?php
                }
            ?>
</body>
</html>