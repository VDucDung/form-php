<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>
<body>
<?php
    $kn = mysqli_connect("localhost", "root", "", "thuchanh");
    if($kn){
        echo "<script>alert('Kết nối database thành công')</script>";
    }
    else{
        echo "<script>alert('Kết nối database thất bại')</script>";
    }
    $masv = $_GET['masv'];
    $sql = "SELECT * FROM sinhviens WHERE masv = $masv";
    $kq = mysqli_query($kn, $sql);
    $row = mysqli_fetch_assoc($kq);
    $hoten = $row['hoten'];
    $toan = $row['toan'];
    $ly = $row['ly'];
    $hoa = $row['hoa'];
?>
<form action="xl_sua.php" method="post">
        <table>
            <tr>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Toán</th>
                <th>Lý</th>
                <th>Hóa</th>
            </tr>
            <tr></tr>
                <td><input type="text" name="masv" id="masv" value="<?php echo $masv; ?>" readonly></td>
                <td><input type="text" name="hoten" id="hoten" value="<?php echo $hoten; ?>"></td>
                <td><input type="text" name="toan" id="toan" value="<?php echo $toan; ?>"></td>
                <td><input type="text" name="ly" id="ly" value="<?php echo $ly; ?>"></td>
                <td><input type="text" name="hoa" id="hoa" value="<?php echo $hoa; ?>"></td>
            </tr>
            <tr><td colspan="5"><button type="submit">Sửa</button></td></tr>
        </table>
    </form>
</body>
</html>
