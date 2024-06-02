<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý tìm kiếm</title>
</head>
<body>
    <?php
        $kn = mysqli_connect("localhost", "root", "", "thuchanh");
        $masv = $_POST['masv'];
        $sql = "SELECT * FROM sinhviens WHERE masv = $masv";
        $kq = mysqli_query($kn, $sql);
        $row = mysqli_fetch_array($kq);
        if(!$row){
            echo "<script>alert('Không tìm thấy'); window.location.href = 'timKiem.php';</script>";
        } else {
            $masv = $row['masv'];
            $hoten = $row['hoten'];
            $toan = $row['toan'];
            $ly = $row['ly'];
            $hoa = $row['hoa'];
        }
        mysqli_close($kn);
    ?>

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
    </table>
</body>
</html>
