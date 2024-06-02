<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD</title>
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

        $sql = "SELECT * FROM sinhviens";
        $kq = mysqli_query($kn, $sql);
        if(!$kq){
            echo "<script>alert('Truy vấn thất bại')</script>";
        } else {
            if(mysqli_num_rows($kq) > 0){
                echo "<table border='1' ";
                echo "<tr>";
                echo "<th>Mã sinh viên</th>";
                echo "<th>Họ và tên</th>";
                echo "<th>Toán</th>";
                echo "<th>Lý</th>";
                echo "<th>Hóa</th>";
                echo "<th>Kết quả</th>";
                echo "<th>Thực hiện</th>";
                echo "</tr>";
                while($row = mysqli_fetch_assoc($kq)){
                    $toan = $row['toan'];
                    $ly = $row['ly'];
                    $hoa = $row['hoa'];
                    $tongD = $toan *2 + $ly + $hoa;
                    if($tongD > 20){$kqua = "Đậu";} else {$kqua = "Rớt";}
                    echo "<tr>";
                    echo "<td>" . $row['masv'] . "</td>";
                    echo "<td>" . $row['hoten'] . "</td>";
                    echo "<td>" . $toan . "</td>";
                    echo "<td>" . $ly . "</td>";
                    echo "<td>" . $hoa . "</td>";
                    echo "<td>" . $kqua . "</td>";
                    echo "<td><a href='them.php'>Thêm</a>
                        <a href='sua.php?masv=" . $row['masv'] . "'>Sửa</a>
                        <a href='xoa.php?masv=" . $row['masv'] . "'>Xóa</a>
                        <a href='timkiem.php'>Tìm kiếm</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        mysqli_close($kn);
    ?>
</body>
</html>
