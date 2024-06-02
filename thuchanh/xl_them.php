<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý Thêm</title>
</head>
<body>
    <?php
        $kn = mysqli_connect("localhost", "root", "", "thuchanh");
        if($kq) {
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
            $sql = "INSERT INTO sinhviens VALUES ($masv, '$hoten', $toan, $ly, $hoa);";
            $kq = mysqli_query($kn, $sql);
            if ($kq) {
                echo "<script>alert('Thêm thành công');window.location.href= 'pd.php';</script>";
                exit();
            } else {
                echo "<script>alert('Thêm thất bại'); window.location.href = 'them.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('Thêm thất bại: Dữ liệu không được để trống'); window.location.href = 'them.php';</script>";
            exit();
        }
        mysqli_close($kn);
    ?>
</body>
</html>
