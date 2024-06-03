<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      $id = $_GET['id'];
      $query = "SELECT * FROM sinhviens WHERE id = $id";
      $result = mysqli_query($kn, $query);
      if(!$result){
        echo "<script>alert('Không thể truy vấn CSDL');</script>";
      }else{
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $hoten = $row['hoten'];
        $gioitinh = $row['gioitinh'];
        $hinhanh = $row['hinhanh'];
        $quequan = $row['quequan'];
      }
      mysqli_close($kn);
    }
  ?>


  <h1 align="center">CẬP NHẬP THÔNG TIN SINH VIÊN</h1>

  <form action="xl_sua.php" method="post" enctype="multipart/form-data">
    <table border=1 width=500 height=200 align="center">
    <tr>
        <th>Mã sinh viên: </th>
        <td>
          <input type="text" name="id" readonly value="<?php echo $id; ?>">
        </td>
      </tr>
      <tr>
        <th>Họ tên: </th>
        <td>
          <input type="text" name="hoten" value="<?php echo $hoten; ?>">
        </td>
      </tr>
      <tr>
        <th>Giới tính: </th>
        <td>
          <input type="text" name="gioitinh" value="<?php echo $gioitinh; ?>">
        </td>
      </tr>
      <tr>
        <th>Hình ảnh: </th>
        <td>
          <input type="file" name="hinhanh" accept="image/*">
        </td>
      </tr>
      <tr>
        <th>Quê quán: </th>
        <td>
          <input type="text" name="quequan" value="<?php echo $quequan; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Sửa"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <a href="index.php"><input type="button" value="Trang chủ"></a>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
