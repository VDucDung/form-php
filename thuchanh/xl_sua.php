<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý sửa</title>
</head>
<body>
<?php
    $kn= mysqli_connect("localhost", "root", "", "thuchanh");
    if($kn) {
        echo "<script>alert('Kết nối database thành công')</script>";
    } else {
        echo "<script>alert('Kết nối database thất bại')</script>";
    }
    $masv = $_POST['masv'];
    $hoten = $_POST['hoten'];
    $toan = $_POST['toan'];
    $ly = $_POST['ly'];
    $hoa = $_POST['hoa'];
    if($masv !== "" && $hoten !== "" && $toan !== "" && $ly !== "" && $hoa !== ""){
        $sql = "UPDATE sinhviens SET hoten = '$hoten', toan = $toan, ly = $ly, hoa = $hoa WHERE masv = $masv";
        $kq = mysqli_query($kn, $sql);
        if ($kq) {
            echo "<script>alert('Sua thanh cong'); window.location.href = 'pd.php';</script>";
            exit();
        } else {
            echo "<script>alert('Sua that bai'); window.location.href = 'sua.php';</script>";
        }
    }
?>
</body>
</html>
