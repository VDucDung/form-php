<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa</title>
</head>
<body>
    <?php
        $kn = mysqli_connect("localhost", "root", "", "thuchanh");
        if($kn){
            echo "<script>alert('Kết nối database thành công')</script>";
        } else {
            echo "<script>alert('Kết nối database thất bại')</script>";
        }
        $masv = $_GET['masv'];
        $sql = "DELETE FROM sinhviens WHERE masv = $masv";
        $kq = mysqli_query($kn, $sql);
        if($kq){
            echo "<script>alert('Xóa thành công');window.location.href= 'pd.php';</script>";
        }
        else{
            echo "<script>alert('Xoa thành công');window.location.href= 'pd.php';</script>";
        }
        mysqli_close($kn);
    ?>
</body>
</html>
