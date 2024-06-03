<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 align="center">DANH SÁCH SINH VIÊN KHOA CNTT</h1>
  <?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      echo "<script>alert('Kết nối CSDL thành công');</script>";
      $query = "SELECT * FROM sinhviens";
      $result = mysqli_query($kn, $query);
      if(!$result){
        echo "<script>alert('Không thể truy vấn CSDL');</script>";
      }
      if(mysqli_num_rows($result) > 0){
        echo "<table border=1 width=650 align='center'>";
        echo "<tr>";
        echo "<th>Mã sinh viên</th>";
        echo "<th>Họ tên</th>";
        echo "<th>Giới tính</th>";
        echo "<th>Hình ảnh</th>";
        echo "<th>Quê quán</th>";
        echo "<th>Thực hiện</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['hoten'] . "</td>";
          echo "<td>" . $row['gioitinh'] . "</td>";
          echo "<td>" . 
            "<img src='img/" . $row['hinhanh'] . "' width=100 height=100 alt='hinh anh'>"
          . "</td>";
          echo "<td>" . $row['quequan'] . "</td>";
          echo "<td>" . 
            "<a href='them.php'>Thêm | </a>".
            "<a href='sua.php?id=" . $row['id'] . "'>Sửa | </a>".
            "<a href='xoa.php?id=" . $row['id'] . "'>Xóa |</a>".
            "<a href='timkiem.php?id=" . $row['id'] . "'> Tìm kiếm </a>"

          . "</td>";
          echo "</tr>";
        }
  
        echo "</table>";
      }
      mysqli_close($kn);
    }
  ?>
</body>
</html>
