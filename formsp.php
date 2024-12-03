<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>Trang chu</button></a>
    <form action="sp.php" method="post" enctype="multipart/form-data">
        <label for="">Tên hàng</label>
        <input type="text" name="tenhang" id=""><br>
        <label for="">Nhóm hàng</label>
        <select name="nhomhang" id="">
            <?php
                include("connect.php");
                $sql = "SELECT * FROM tblcategory";
                $rs = mysqli_query($con,$sql);
                while($r = mysqli_fetch_assoc($rs)){
                    ?>
                    <option value="<?=$r['id']?>"><?=$r['ten']?></option>
                    <?php
                }
            ?>
        </select><br>
        <label for="">Số lượng</label>
        <input type="number" name="sl" id=""><br>
        <label for="">Đơn giá</label>
        <input type="text" name="dg" id=""><br>
        <label for="">Hình ảnh</label>
        <input type="file" name="images" id=""><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>